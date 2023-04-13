<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class InternsWithResourceController extends Controller
{
    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        DB::table('transactions')
        ->insert([
            "trxDate" => Carbon::now(),
            "trxGross" => $request->trxGross,
            "trxDiscount" => $request->trxDiscount,
            "trxNet" => $request->trxNet,
            "trxPayAmount" => $request->trxPayAmount
        ]);

        return redirect( '/home' );
    }

    public function show($id)
    {
        $transaction = DB::table('transactions')
        ->where('trxID',$id)
        ->first();

        return view('transaction.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        DB::table('transactions')
        ->where('trxID',$id)
        ->update([
            "trxGross" => $request->trxGross,
            "trxDiscount" => $request->trxDiscount,
            "trxNet" => $request->trxNet,
            "trxPayAmount" => $request->trxPayAmount
        ]);
        
        return redirect( '/home' );
    }

    public function deactivate($id)
    {
        DB::table('transactions')
        ->where('trxID',$id)
        ->update([
            "trxActive" => 0
        ]);
        
        return redirect( '/home' );
    }
}
