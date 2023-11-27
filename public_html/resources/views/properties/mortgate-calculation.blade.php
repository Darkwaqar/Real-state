@extends('properties.layouts.main')

@section('content')

<div class="card">
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Monthl</th>
            <th>Monthly Payment </th>
            <th>Interest Paid</th>
            <th>Principal Paid</th>
            <th>Balance</th>
          </tr>
        </thead>
        <tbody>
            @php
               $balance = $request->total_amount; 
              //  $propertyTax = $request->propertyTax;
              //  $homeinsurance = $request->homeInsurance;
              //  $HOAdues = $request->HOAdues;
              //  $totalBalance = $balance + $propertyTax + $homeinsurance + $HOAdues;
               $downPayment = $request->down_payment
               $afterdown = $balance - $downPayment;
               $emi = PMT($request->interest_rate,$request->loan, $afterdown);
            @endphp
            @for($i=1;$i<=$request->loan*12;$i++)
            @php
                $interest = (($request->interest_rate/100)*$balance)/12;
                $principal = $emi - $interest;
                $afterdown = $afterdown - $principal;
            @endphp
            <tr>
                <td>{{$i}}</td>
              <td>{{showValue($emi)}}</td>
              <td>{{showValue($interest)}}</td>
              <td>{{showValue($principal)}}</td>
              <td>{{showValue($afterdown)}}</td>
            
            </tr>
           @endfor
        </tbody>
      </table>
</div>

    
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

@endsection