@extends('template')
@section('content')

    <form action="/home" method="GET">
        <div class="grid">
            <label for="date">Start Date
                <input type="date" id="date" name="startdate" />
            </label>
            <label for="date">End Date
                <input type="date" id="date2" name="enddate" />
            </label>
        </div>

        <!-- Buttons -->
        <input type="submit" value="Submit" />
    </form>


    <a href="/create_new_transaction">
        <button class="contrast">
            Create New Transaction    
        </button>
    </a>


    <h1> Total Number of Transaction: {{ $no_of_transactions }}</h1>
    <table>
        <thead>
            <tr>
                <td>Date of Transaction</td>
                <td>trxGross {{$total_Gross}}</td>
                <td>trxDiscount {{$total_Discount}}</td>
                <td>trxNet {{$total_Net}}</td>
                <td>trxPayAmount {{$total_PayAmount}}</td>
                <td>trxChange</td>
                <td>trxBalance</td>
                <td>EDIT</td>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $val)
                <tr>
                    <td>{{ $val->trxDate }}</td>
                    <td>{{ $val->trxGross }}</td>
                    <td>{{ $val->trxDiscount }}</td>
                    <td>{{ $val->trxNet }}</td>
                    <td>{{ $val->trxPayAmount }}</td>
                    <td>{{ $val->trxChange }}</td>
                    <td>{{ $val->trxBalance }}</td>
                    <td>
                        <a href="/edit_new_transaction/{{ $val->trxID }}">
                            EDIT
                        </a>
                        <br/>
                        <a href="/deactivate_transaction/{{ $val->trxID }}">
                            DEACTIVATE
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection