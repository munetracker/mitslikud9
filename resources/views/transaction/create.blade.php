@extends('template')
@section('content')

    <form action="/store_new_transaction" method="POST">
        @csrf
        <label for="trxGross">Enter trxGross
            <input type="number" name="trxGross" />
        </label>
        <label for="trxDiscount">Enter trxDiscount
            <input type="number" name="trxDiscount" />
        </label>
        <label for="trxNet">Enter trxNet
            <input type="number" name="trxNet" />
        </label>
        <label for="trxPayAmount">Enter trxPayAmount
            <input type="number" name="trxPayAmount" />
        </label>

        <!-- Buttons -->
        <input type="submit" value="Submit" />
    </form>

@endsection