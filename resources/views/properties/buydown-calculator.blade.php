@extends('properties.layouts.main')
@section('content')
    <style>
        .buydown_calculator_wrapper .b_form_item {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
        }

        .buydown_calculator_wrapper .b_form_item div {
            width: 100%;
            display: flex;
            place-items: center;
            position: relative;
        }

        .buydown_calculator_wrapper .b_form_item>div .prefix {
            font-size: 22px;
            opacity: 0.8;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 18px;
        }

        .buydown_calculator_wrapper input {
            border: solid 1px #b5b5b5;
            border-radius: 50px;
            min-height: 50px;
            padding: 0 20px;
            flex: 1
        }

        .buydown_calculator_wrapper .main_title {
            font-size: 22px;
            color: #DE1E25;
        }
    </style>

    <section class="styled_section">
        <div class="buydown_calculator_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="main_title">Loan Info</h3>
                        <form class="row" id="calculator-form">
                            <div class="col-lg-6">
                                <div class="b_form_item">
                                    <label for="buydown_type">BuyDown Type</label>
                                    <select name="buydown_type" id="buydown_type">
                                        <option value="3-2-1" selected="selected">3-2-1 BuyDown</option>
                                        <option value="2-1">2-1 BuyDown</option>
                                        <option value="1-1">1-1 BuyDown</option>
                                        <option value="1-0">1-0 BuyDown</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="b_form_item">
                                    <label for="loan_term">Loan Term (Yr)</label>
                                    <input id="loan_term" type="number" name="loan_term">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="b_form_item">
                                    <label for="total_loan_amount">Total Loan Amount</label>
                                    <div>
                                        <span class="prefix">$</span> <input style="padding-left: 40px;" id="total_loan_amount"
                                            type="number" name="total_loan_amount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="b_form_item">
                                    <label for="interest_rate">Interest Rate (%)</label>
                                    <div>
                                        <input style="padding-left: 40px;" id="interest_rate" type="number" name="interest_rate">
                                        <span class="prefix">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center py-5">
                                <button class="theme-btn btn-one m-auto" type="submit">Calculate</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div style="overflow:auto;">
                            <table style="min-width: 660px" id="Record" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Rate</th>
                                        <th>Payment</th>
                                        <th>Monthly Savings</th>
                                        <th>Annual Savings</th>
                                    </tr>
                                </thead>
                                <tbody id="result-table-body" class="tbody">
                                    <!-- Table rows will be added dynamically using JavaScript -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total Cost</th>
                                        <th id="total-cost"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
  document.getElementById('calculator-form').addEventListener('submit', function (e) {
    e.preventDefault();

    // Get input values
    const buydownType = document.getElementById('buydown_type').value;
    const loanTerm = parseInt(document.getElementById('loan_term').value);
    const totalLoanAmount = parseFloat(document.getElementById('total_loan_amount').value);
    const interestRate = parseFloat(document.getElementById('interest_rate').value);

    // Initialize variables
    const monthlyInterestRate = interestRate / 12 / 100;
    let remainingBalance = totalLoanAmount;
    const tableBody = document.getElementById('result-table-body');
    tableBody.innerHTML = ''; // Clear previous data

    let totalCost = 0;

    for (let year = 1; year <= loanTerm; year++) {
        const rate = (year <= buydownType[0]) ? interestRate : interestRate - 1;
        const monthlyPayment = calculateMonthlyPayment(remainingBalance, monthlyInterestRate, loanTerm - year + 1);

        const monthlyInterestPayment = remainingBalance * monthlyInterestRate;
        const monthlyPrincipalPayment = monthlyPayment - monthlyInterestPayment;
        remainingBalance -= monthlyPrincipalPayment;

        // Calculate monthly savings based on the difference between the original interest rate and the current rate
        const monthlySavings = (interestRate - rate) / 12 / 100 * totalLoanAmount / buydownType[0];

        // Calculate annual savings as 12 times the monthly savings
        const annualSavings = monthlySavings * 12;
        totalCost += annualSavings;

        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${year}</td>
            <td>${rate.toFixed(2)}%</td>
            <td>$${monthlyPayment.toFixed(2)}</td>
            <td>$${monthlySavings.toFixed(2)}</td>
            <td>$${annualSavings.toFixed(2)}</td>
        `;

        tableBody.appendChild(newRow);
    }

    // Update total cost in the footer
    document.getElementById('total-cost').textContent = `$${totalCost.toFixed(2)}`;
});

function calculateMonthlyPayment(principal, monthlyInterestRate, months) {
    return principal * (monthlyInterestRate * Math.pow(1 + monthlyInterestRate, months)) / (Math.pow(1 + monthlyInterestRate, months) - 1);
}

        </script>
    </section>
@endsection
