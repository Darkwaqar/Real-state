@extends('properties.layouts.main')

@section('content')
    <div class="card">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Monthl</th>
                    <th>Monthly Payment </th>
                    <th>Payment Date</th>
                    <th>Interest Paid</th>
                    <th>Principal Paid</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $balance = $request->totalAmount;
                    $paymentDate = $request->startDate;
                    $emi = PMT($request->interestRate, $request->loan, $balance);
                @endphp
                @for ($i = 1; $i <= $request->loan * 12; $i++)
                    @php
                        $interest = (($request->interestRate / 100) * $balance) / 12;
                        $principal = $emi - $interest;
                        $balance = $balance - $principal;
                        $paymentDate = date('Y-m-d', strtotime('+1 month', strtotime($paymentDate)));
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ showValue($emi) }}</td>
                        <td>{{ $paymentDate }}</td>
                        <td>{{ showValue($interest) }}</td>
                        <td>{{ showValue($principal) }}</td>
                        <td>{{ showValue($balance) }}</td>

                    </tr>
                @endfor
            </tbody>
        </table>
    </div>


    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
@endsection
