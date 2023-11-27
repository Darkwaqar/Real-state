@extends('properties.layouts.main')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
<br><br>
<br><br>        <div class="calculate-inner">
            <div class="widget-title">
                <h4>Rerfinance  Calculator</h4>
            </div>
            <form action="{{ route('refinance') }}" method="post" enctype="multipart/form-data">
                @csrf           
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="loanAmount" value="" placeholder="Loan Amount">
                </div>
                <div class="form-group">
                    <i class="fas fa-percent"></i>
                    <input type="number" name="interestRate" value="" placeholder="Interest rate">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="originationYear" value="" placeholder="Origination year">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="term" value="" placeholder="Loan Terms(Years)">
                </div>
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="newAmount" value="" placeholder=" New Loan Amount">
                </div>
                <div class="form-group">
                    <i class="fas fa-percent"></i>
                    <input type="number" name="newInterest" value="" placeholder=" new Interest rate">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="newTerm" value="" placeholder=" New Term">
                </div>
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="refinanceFees" value="" placeholder=" Refinance fees	">
                </div>
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="rollFees" value="" placeholder=" Roll fees	">
                </div>
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="cashOut" value="" placeholder="Cash out">
                </div>
                {{-- <div class="form-group">
                    <div class="select-box">
                        <select class="wide">
                            <option data-display="Monthly">Monthly</option>
                            <option value="1">Yearly</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-group message-btn">
                    <button type="submit" onclick="calculate" class="theme-btn btn-one">Calculate Now</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-md-6"></div>
</div>
</div>



@endsection