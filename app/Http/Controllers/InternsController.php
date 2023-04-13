<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InternsController extends Controller
{
    public function homepage(Request $request){
        $startdate = $request->startdate;
        $enddate = $request->enddate;

        // dd($startdate, $enddate);
        if($startdate && $enddate){
            $transactions = DB::table('transactions')
            ->whereDate('trxDate', '>=', $request->startdate)
            ->whereDate('trxDate', '<=', $request->enddate)
            ->where('trxActive',1)
            ->get();
        }else{
            $transactions = DB::table('transactions')
            ->where('trxActive',1)
            ->get();
        }

        $no_of_transactions = count($transactions);
        $total_Gross = 0;
        $total_Discount = 0;
        $total_Net = 0;
        $total_PayAmount = 0;
        foreach($transactions as $val){
            $total_Gross += $val->trxGross;
            $total_Discount += $val->trxDiscount;
            $total_Net += $val->trxNet;
            $total_PayAmount += $val->trxPayAmount;
        }

        return view('homepage', 
            compact('transactions', 'no_of_transactions','total_Gross','total_Discount','total_Net','total_PayAmount')
        );
    }
}
