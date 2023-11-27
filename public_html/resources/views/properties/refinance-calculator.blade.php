@php
    $metaTitle = 'Refinance Calculator Washington | Washington Refinance Calculator';
    $metaDescription = 'Considering refinancing your home in Washington? Take advantage
     of our Washington Refinance Calculator to evaluate your options. Calculate potential savings,
      estimate new monthly payments, and determine the financial benefits of refinancing in Washington.
       Our user-friendly calculator provides valuable insights to help you make informed decisions
        about your refinancing journey. Explore the Washington Refinance Calculator today
         and discover how you can optimize your mortgage and save money in Washington.';
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
@section('content')
    <section class="mortgage-calc-sect1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mortgage-sec1-banner">
                        <p class="title">Refinance Calculator</p>
                        <p class="para">Evaluate your mortgage refinancing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start of Service section
     ============================================= -->
    <section id="in-service-2" class="in-service-section-2 position-relative">
        <span class="in-service-bg position-absolute"><img class="lazy" data-src="assets/img/bg/ser-bg1.png"
                alt=""></span>
        <div class="container">

            <div class="text-center mb-4">
                <h2>Your Refinancing Payment Details</h2>
            </div>
            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>
            <div class="in-contact-form-title-area">
                <div class="in-contact-form">
                    <form action="#" method="get"
                        class="row d-flex justify-content-center bg-white p-lg-5 p-md-4 p-2 border-radius">

                        <div class="col-xl-4 col-lg-4 col-md-4 mb-3">
                            <label for="loan_amount">Loan Amount</label>
                            <div class="inline_input">
                                <div class="input_label">$</div>
                                <input onchange="loanAmount()" type="number" id="loan_amount" name="loan_amount" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-3 mb-3">
                            <label for="interest_rate">Interest rate</label>
                            <div class="inline_input">
                                <div class="input_label">%</div>
                                <input onchange="interestRate()" type="number" id="interest_rate" name="interest_rate" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-5 mb-3 loan_type_select">
                            <p class="mb-0">Loan terms</p>
                            <div class="in-insurance-type in-select position-relative">
                                <select name="loan_type" id="loan_type">
                                    <option value="10" selected>10 Year Fixed</option>
                                    <option value="15">15 Year Fixed</option>
                                    <option value="20">20 Year Fixed</option>
                                    <option value="30">30 Year Fixed</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-4 mb-3">
                            <label for="new_loan_amount">New Loan Amount</label>
                            <div class="inline_input">
                                <div class="input_label">$</div>
                                <input onchange="newLoanAmount()" type="number" id="new_loan_amount"
                                    name="new_loan_amount" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-3 mb-3">
                            <label for="new_interest_rate">New interest rate</label>
                            <div class="inline_input">
                                <div class="input_label">%</div>
                                <input type="number" id="new_interest_rate" name="new_interest_rate" />
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-5 mb-3 loan_type_select">
                            <label for="new_loan_type">New loan terms</label>
                            <div class="in-insurance-type in-select position-relative">
                                <select name="new_loan_type" id="new_loan_type">
                                    <option value="10" selected>10 Year Fixed</option>
                                    <option value="15">15 Year Fixed</option>
                                    <option value="20">20 Year Fixed</option>
                                    <option value="30">30 Year Fixed</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                            <label for="organizational_year">Organizational year</label>
                            <div class="inline_input">
                                <input type="number" id="organizational_year" name="organizational_year" />
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                            <label for="refinance_fee">Refinance fees</label>
                            <div class="inline_input">
                                <div class="input_label">$</div>
                                <input type="number" id="refinance_fee" name="refinance_fee" />
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                            <label for="roll_fee">Roll fees</label>
                            <div class="inline_input">
                                <div class="input_label">$</div>
                                <input type="number" id="roll_fee" name="roll_fee" />
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                            <label for="cash_out">Cash out</label>
                            <div class="inline_input">
                                <div class="input_label">$</div>
                                <input type="number" id="cash_out" name="cash_out" />
                            </div>
                        </div>
                        <script>
                            LoanAmount = document.getElementById('loan_amount')
                            Interestrate = document.getElementById('interest_rate')
                            NewLoanAmount = document.getElementById('new_loan_amount')
                            const loanAmount = () => {
                                //Chart
                                Highcharts.chart('container', {
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: `Refinance`,
                                        align: 'center',
                                        verticalAlign: 'middle',
                                        y: 60
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    accessibility: {
                                        point: {
                                            valueSuffix: '%'
                                        }
                                    },
                                    plotOptions: {
                                        pie: {
                                            dataLabels: {
                                                enabled: true,
                                                distance: -50,
                                                style: {
                                                    fontWeight: 'bold',
                                                    color: 'white'
                                                }
                                            },
                                            startAngle: -90,
                                            endAngle: 90,
                                            center: ['50%', '75%'],
                                            size: '110%'
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Browser share',
                                        innerSize: '50%',
                                        data: [
                                            ['Home Insurance', parseInt(LoanAmount.value)],
                                            ['Interest Paid', parseInt(Interestrate.value)],
                                            ['Principal Paid', parseInt(NewLoanAmount.value)],
                                            {
                                                name: 'Other',
                                                y: 3.77,
                                                dataLabels: {
                                                    enabled: false
                                                }
                                            }
                                        ]
                                    }]
                                })
                            }
                            const interestRate = () => {
                                //Chart
                                Highcharts.chart('container', {
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: `Refinance`,
                                        align: 'center',
                                        verticalAlign: 'middle',
                                        y: 60
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    accessibility: {
                                        point: {
                                            valueSuffix: '%'
                                        }
                                    },
                                    plotOptions: {
                                        pie: {
                                            dataLabels: {
                                                enabled: true,
                                                distance: -50,
                                                style: {
                                                    fontWeight: 'bold',
                                                    color: 'white'
                                                }
                                            },
                                            startAngle: -90,
                                            endAngle: 90,
                                            center: ['50%', '75%'],
                                            size: '110%'
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Browser share',
                                        innerSize: '50%',
                                        data: [
                                            ['Home Insurance', parseInt(LoanAmount.value)],
                                            ['Interest Paid', parseInt(Interestrate.value)],
                                            ['Principal Paid', parseInt(NewLoanAmount.value)],
                                            {
                                                name: 'Other',
                                                y: 3.77,
                                                dataLabels: {
                                                    enabled: false
                                                }
                                            }
                                        ]
                                    }]
                                })
                            }
                            const newLoanAmount = () => {
                                //Chart
                                Highcharts.chart('container', {
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: 0,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: `Refinance`,
                                        align: 'center',
                                        verticalAlign: 'middle',
                                        y: 60
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    accessibility: {
                                        point: {
                                            valueSuffix: '%'
                                        }
                                    },
                                    plotOptions: {
                                        pie: {
                                            dataLabels: {
                                                enabled: true,
                                                distance: -50,
                                                style: {
                                                    fontWeight: 'bold',
                                                    color: 'white'
                                                }
                                            },
                                            startAngle: -90,
                                            endAngle: 90,
                                            center: ['50%', '75%'],
                                            size: '110%'
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Browser share',
                                        innerSize: '50%',
                                        data: [
                                            ['Home Insurance', parseInt(LoanAmount.value)],
                                            ['Interest Paid', parseInt(Interestrate.value)],
                                            ['Principal Paid', parseInt(NewLoanAmount.value)],
                                            {
                                                name: 'Other',
                                                y: 3.77,
                                                dataLabels: {
                                                    enabled: false
                                                }
                                            }
                                        ]
                                    }]
                                })
                            }
                            //Chart
                            Highcharts.chart('container', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 0,
                                    plotShadow: false
                                },
                                title: {
                                    text: `Refinance`,
                                    align: 'center',
                                    verticalAlign: 'middle',
                                    y: 60
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                accessibility: {
                                    point: {
                                        valueSuffix: '%'
                                    }
                                },
                                plotOptions: {
                                    pie: {
                                        dataLabels: {
                                            enabled: true,
                                            distance: -50,
                                            style: {
                                                fontWeight: 'bold',
                                                color: 'white'
                                            }
                                        },
                                        startAngle: -90,
                                        endAngle: 90,
                                        center: ['50%', '75%'],
                                        size: '110%'
                                    }
                                },
                                series: [{
                                    type: 'pie',
                                    name: 'Browser share',
                                    innerSize: '50%',
                                    data: [
                                        ['Home Insurance', 5000],
                                        ['Interest Paid', 5000],
                                        ['Principal Paid', 5000],
                                        {
                                            name: 'Other',
                                            y: 3.77,
                                            dataLabels: {
                                                enabled: false
                                            }
                                        }
                                    ]
                                }]
                            })
                        </script>
                        <div class="col-12 mt-4 text-center field_error d-none">
                            <p class="text-danger">Please fill all the fields</p>
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="mt-4 text-center">
                                <div class="in-btn-1 position-relative">
                                    <!-- <button type="submit">Submit</button> -->
                                    <a href="javascript:void(0)" class="submit_btn theme-btn btn-one"
                                        data-bs-toggle="modal" data-bs-target="#loading_modal">Calculate Now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="calculation_result in-contact-form-title-area mt-5 d-none">
                <div class="in-contact-form">

                    <h2 class="mb-3 text-center">Estimate Payment -
                        <span class="text_primary estamate_payment">$3,167</span>
                    </h2>
                    <div class="info_form text-center">
                        <div class="info_div">
                            <label>Loan Amount</label>
                            <p class="fw-bold estimate_loan_amount">$2,000,000</p>
                        </div>

                        <div class="info_div">
                            <label>Interest rate</label>
                            <p class="fw-bold estimate_interest_rate">2%</p>
                        </div>

                        <div class="info_div">
                            <label>Organization year</label>
                            <p class="fw-bold estimate_organizational_year">2023</p>
                        </div>

                        <div class="info_div">
                            <label>Type</label>
                            <p class="fw-bold estimate_loan_type">30 Year Fixed</p>
                        </div>

                    </div>


                    <h2 class="mb-1 mt-3 text-center">New Loan</h2>
                    <div class="info_form text-center mt-3">
                        <div class="info_div">
                            <label>Loan Amount</label>
                            <p class="fw-bold new_estimate_loan_amount">$2,000,000</p>
                        </div>

                        <div class="info_div">
                            <label>Interest rate</label>
                            <p class="fw-bold new_estimate_interest_rate">2%</p>
                        </div>

                        <div class="info_div">
                            <label>Type</label>
                            <p class="fw-bold new_estimate_loan_type">30 Year Fixed</p>
                        </div>

                        <div class="info_div">
                            <label>Refinance fees</label>
                            <p class="fw-bold estimate_refinance">$30,000</p>
                        </div>

                        <div class="info_div">
                            <label>Roll fees</label>
                            <p class="fw-bold estimate_roll_fee">$200</p>
                        </div>

                        <div class="info_div">
                            <label>Cash out</label>
                            <p class="fw-bold estimate_cash_out">$500</p>
                        </div>

                    </div>

                    <div class="chart mt-5 d-none">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="cal_sheet_right">
                        <div class="mt-4 text-center">
                            <div class="in-btn-1 position-relative">
                                <a href="javascript:void(0)" class="theme-btn btn-one">Find a Lender</a>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="in-btn-1 position-relative">
                                <a href="javascript:void(0)" class="theme-btn btn-one" id="btn_excel">Export to Excel</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-3 text-center">Your Remortgage Payment Plan</h2>
                   
                    <div  style="overflow: auto"  class="mt-5">
                        <table style="min-width: 660px" id="Record" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Months</th>
                                    <th>Monthly Payment</th>
                                    <th>Interest Paid</th>
                                    <th>Principal Paid</th>
                                    <th>Payment Amt </th>
                                </tr>
                            </thead>
                            <tbody class="tbody"></tbody>
                        </table>
                    </div>


                </div>
            </div>


        </div>
    </section>
    <!-- End of service section
     ============================================= -->



    <script>
        $(document).ready(function() {

            var _loan_amount;
            var _interest_rate;
            var _loan_type;
            var _new_loan_amount;
            var _new_interest_rate;
            var _new_loan_type;
            var _organizational_year;
            var _refinance_fee;
            var _roll_fee;
            var _cash_out;

            $('.submit_btn').click(function() {


                _loan_amount = parseFloat($('#loan_amount').val());
                _interest_rate = parseFloat($('#interest_rate').val());
                _loan_type = parseFloat($('#loan_type').val());
                _new_loan_amount = parseFloat($('#new_loan_amount').val());
                _new_interest_rate = parseFloat($('#new_interest_rate').val());
                _new_loan_type = parseFloat($('#new_loan_type').val());
                _organizational_year = $('#organizational_year').val();
                _refinance_fee = parseFloat($('#refinance_fee').val());
                _roll_fee = parseFloat($('#roll_fee').val());
                _cash_out = parseFloat($('#cash_out').val());

                if (
                    Number.isNaN(_loan_amount) ||
                    Number.isNaN(_interest_rate) ||
                    Number.isNaN(_loan_type) ||
                    Number.isNaN(_new_loan_amount) ||
                    Number.isNaN(_new_interest_rate) ||
                    Number.isNaN(_new_loan_type) ||
                    Number.isNaN(_refinance_fee) ||
                    Number.isNaN(_roll_fee) ||
                    Number.isNaN(_cash_out)
                ) {

                    setTimeout(() => {
                        $('.calculation_result').addClass('d-none');
                        $('.field_error').removeClass('d-none');
                    }, 1000);

                } else {
                    var _new_loan = PMT(_new_interest_rate, _new_loan_type, _new_loan_amount);
                    var _old_loan = PMT(_interest_rate, _loan_type, _loan_amount);

                    var balance = 0;
                    var new_balance_amount = 0;
                    var newAmount = 0;
                    var Amount = 0;
                    var newInterest = 0;
                    var interest = 0;
                    var Newprincipal = 0;
                    var principal = 0;

                    for (let index = 0; index < loan_type * 12; index++) {

                        interest = ((_interest_rate / 100) * _loan_amount) / 12;
                        principal = _old_loan - interest;
                        balance = _new_loan_amount - principal;

                    }


                    for (let index = 0; index < _loan_type * 12; index++) {

                        newInterest = ((_new_interest_rate / 100) * _new_loan_amount) / 12;
                        Newprincipal = _new_loan - _new_interest_rate;
                        new_balance_amount = _new_loan_amount - Newprincipal;

                    }

                    var saving = _old_loan - _new_loan;

                    $('.estamate_payment').text('$' + saving);
                    $('.estimate_loan_amount').text('$' + _loan_amount);
                    $('.estimate_interest_rate').text(_interest_rate + '%');
                    $('.estimate_organizational_year').text(_organizational_year);
                    $('.estimate_loan_type').text(_loan_type + ' years');

                    $('.new_estimate_loan_amount').text('$' + _new_loan_amount);
                    $('.new_estimate_interest_rate').text(_new_interest_rate + '%');
                    $('.new_estimate_loan_type').text(_new_loan_type + ' Years');
                    $('.estimate_refinance').text('$' + _refinance_fee);
                    $('.estimate_roll_fee').text('$' + _roll_fee);
                    $('.estimate_cash_out').text('$' + _cash_out);


                    var _html = ``;

                    var _down_payment2 = _new_loan_amount;
                    var _emi = PMT(_new_interest_rate, _new_loan_type, _down_payment2);


                    for (let index = 0; index < _loan_type * 12; index++) {

                        var _interest_rate2 = ((_new_interest_rate / 100) * _down_payment2) / 12;
                        var _principal = _emi - _interest_rate2;
                        _down_payment2 = _down_payment2 - _principal;

                        _html += `<tr>
									<td>${index+1}</td>
									<td>$${_emi.toFixed(0)}</td>
									<td>$${_interest_rate2.toFixed(0)}</td>
									<td>$${_principal.toFixed(0)}</td>
									<td>$${_down_payment2.toFixed(2)}</td>
						</tr>`

                    }

                    $('.tbody').html(_html);

                    setTimeout(() => {
                        $('.calculation_result').removeClass('d-none');
                        $('.field_error').addClass('d-none');
                    }, 1000);

                    setTimeout(() => {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $(".calculation_result").offset().top - 200
                        }, 1000);
                    }, 1500);

                }

                setTimeout(() => {
                    $('#loading_modal').modal('hide');
                }, 1000);



            });



            function PMT(_interest_rate, _loan_type, _down_payment) {

                _loan_type = _loan_type * 12;
                _interest_rate = _interest_rate / 1200;

                return _interest_rate * (-_down_payment) * Math.pow((1 + _interest_rate), _loan_type) / (1 - Math
                    .pow((1 + _interest_rate), _loan_type));

            }


            var data = {
                "datasets": [{
                        "backgroundColor": "#F36E09",
                        "borderColor": "#F36E09",
                        "fill": false,
                        "data": [
                            10,
                            120,
                            80,
                            134
                        ],
                        "id": "amount",
                        "label": "Loan",
                        "yAxisID": "left"
                    },
                    {
                        "backgroundColor": "#3C3C3C",
                        "borderColor": "#3C3C3C",
                        "fill": false,
                        "data": [
                            300,
                            -1200,
                            500,
                            -340
                        ],
                        "id": "amount",
                        "label": "New Loan",
                        "yAxisID": "right"

                    }
                ],
                "labels": [
                    "2022-01-02",
                    "2012-04-02",
                    "2012-07-02",
                    "2023-01-02"
                ]
            };

            var options = {
                "elements": {
                    "rectangle": {
                        "borderWidth": 2
                    }
                },
                "layout": {
                    "padding": 0
                },
                "legend": {
                    "display": true,
                    "labels": {
                        "boxWidth": 16
                    }
                },
                "maintainAspectRatio": false,
                "responsive": true,
                "scales": {
                    "xAxes": [{
                        "gridLines": {
                            "display": false
                        },
                        "scaleLabel": {
                            "display": true,
                            "labelString": "Date"
                        },
                        "stacked": false,
                        "ticks": {
                            "autoSkip": true,
                            "beginAtZero": true
                        },
                        "time": {
                            "tooltipFormat": "[Q]Q - YYYY",
                            "unit": "quarter"
                        },
                        "type": "time"
                    }],
                    "yAxes": [{
                            "scaleLabel": {
                                "display": true,
                                "labelString": "Purchase amount (USD)"
                            },
                            "id": "left",
                            "stacked": false,
                            "ticks": {
                                "beginAtZero": true
                            }
                        },
                        {
                            "scaleLabel": {
                                "display": true,
                                "labelString": "Purchase count"
                            },
                            "id": "right",
                            "position": "right",
                            "stacked": false,
                            "ticks": {
                                "beginAtZero": true
                            }
                        }
                    ]
                },
                "title": {
                    "display": false
                },
                "tooltips": {
                    "intersect": false,
                    "mode": "index",
                    "position": "nearest",
                    "callbacks": {}
                }
            }

            var type = "line";



        });
    </script>

    <script>
        document.getElementById("btn_excel").addEventListener("click", () => {
            let table2excel = new Table2Excel();
            table2excel.export(document.querySelector("#Record"));
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>
@endsection
