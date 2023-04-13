@extends('template')
@section('content')

    <form action="/update_new_transaction/{{ $transaction->trxID }}" method="POST">
        @csrf
        @method("PATCH")
        <label for="trxGross">Enter trxGross
            <input type="number" name="trxGross" value="{{ $transaction->trxGross }}"/>
        </label>
        <label for="trxDiscount">Enter trxDiscount
            <input type="number" name="trxDiscount"  value="{{ $transaction->trxDiscount }}"/>
        </label>
        <label for="trxNet">Enter trxNet
            <input type="number" name="trxNet"  value="{{ $transaction->trxNet }}"/>
        </label>
        <label for="trxPayAmount">Enter trxPayAmount
            <input type="number" name="trxPayAmount"  value="{{ $transaction->trxPayAmount }}"/>
        </label>

        <!-- Buttons -->
        <input type="submit" value="Submit" />
    </form>

@endsection