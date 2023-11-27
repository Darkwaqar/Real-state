@extends('properties.layouts.main')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
<br><br>
<br><br>        <div class="calculate-inner">
            <div class="widget-title">
                <h4>Affordability Calculator</h4>
            </div>
            <form action="{{ route('affordability') }}" method="post" enctype="multipart/form-data">
                @csrf           
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="number" name="annualIncome" value="" placeholder="Annual income">
                </div>
                <div class="form-group">
                    <i class="fas fa-percent"></i>
                    <input type="number" name="monthlyDebts" value="" placeholder="Monthly debts">
                </div>
                <div class="form-group">
                    <i class="fas fa-percent"></i>
                    <input type="number" name="downPayment" value="" placeholder="Down payment">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="debtToincome" value="" placeholder="Debt-to-income">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="interestRate" value="" placeholder="Interest rate">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="loanTerm" value="" placeholder="Loan term">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="PropertyTax" value="" placeholder="Property tax">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="homeInsurance" value="" placeholder="Home insurance">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="number" name="HOAdues" value="" placeholder="HOA dues">
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
    <div class="col-md-6">

        
    </div>
</div>
</div>



@endsection