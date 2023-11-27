@php
    $metaTitle = 'Washington Affordability Calculator | Affordability Calculator Washington';
    $metaDescription = 'Want to determine the affordability of homes in Washington? Use our Washington Affordability Calculator to assess your financial capability and find out what you can comfortably afford. Estimate your monthly mortgage payments, consider your income and expenses, and get a clearer picture of the homes that fit your budget in Washington. Make informed decisions about your housing options with our user-friendly Washington Affordability Calculator. Start exploring today and find your ideal home within your means in Washington.';
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
                    <p class="title">Affordability Calculator</p>
                    <p class="para">Evaluate your mortgage expense against your income</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start of Service section
	============================================= -->
	<section id="in-service-2" class="in-service-section-2 position-relative">
		<span class="in-service-bg position-absolute"><img class="lazy" data-src="assets/img/bg/ser-bg1.png" alt=""></span>
		<div class="container">

			<div class="text-center mb-4">
				<h2>Your Mortgage Affordability Details</h2>
			</div>
            <figure class="highcharts-figure">
                <div id="container"></div>
              </figure>
			<div class="in-contact-form-title-area">
				<div class="in-contact-form">
					<form action="#" method="get" class="row d-flex justify-content-center bg-white p-lg-5 p-md-4 p-2 border-radius">

						<div class="col-md-6 mb-3">
							<label for="annual_income">Annual Income</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input onchange="annualIncome()" type="number" id="annual_income" name="annual_income" />
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="monthly_expenses">Monthly Expenses</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input type="number" id="monthly_expenses" name="monthly_expenses" />
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="home_price">Home price</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input onchange="homePrice()" type="number" id="home_price" name="home_price" />
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="down_payment">Down payment</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input onchange="downPayment()" type="number" id="down_payment" name="down_payment" />
							</div>
						</div>

						<div class="col-md-4 mb-3">
							<label for="property_tax">Property tax</label>
							<div class="inline_input">
								<div class="input_label">%</div>
								<input type="number" id="property_tax" name="property_tax" />
							</div>
						</div>


						<div class="col-md-4 mb-3">
							<div>
								<label for="interest_rate">Interest rate</label>
								<div class="inline_input">
									<div class="input_label">%</div>
									<input type="text" id="interest_rate" name="interest_rate" />
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-3">
							<label for="home_insurance">Home Insurance</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input type="number" id="home_insurance" name="home_insurance" />
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="hoa_dues">HOA dues</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input type="number" id="hoa_dues" name="hoa_dues" />
							</div>
						</div>



						<div class="col-md-6 mb-3 loan_type_select">
						    <label for="loan_type">Loan Type</label>
							<div class="in-insurance-type in-select position-relative">
								<select name="loan_type" id="loan_type">
									<option value="10" selected>10 Year</option>
									<option value="15">15 Year</option>
									<option value="20">20 Year</option>
									<option value="30">30 Year</option>
								</select>
							</div>
						</div>
                        <script>
                            AnnualIncome = document.getElementById('annual_income')
                            HomePrice = document.getElementById('home_price')
                            DownPayment = document.getElementById('down_payment')
                            const annualIncome = () => {
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
                                            ['Home Insurance', parseInt(AnnualIncome.value)],
                                            ['Interest Paid', parseInt(HomePrice.value)],
                                            ['Principal Paid', parseInt(DownPayment.value)],
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
                            const homePrice = () => {
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
                                            ['Home Insurance', parseInt(AnnualIncome.value)],
                                            ['Interest Paid', parseInt(HomePrice.value)],
                                            ['Principal Paid', parseInt(DownPayment.value)],
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
                            const downPayment = () => {
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
                                            ['Home Insurance', parseInt(AnnualIncome.value)],
                                            ['Interest Paid', parseInt(HomePrice.value)],
                                            ['Principal Paid', parseInt(DownPayment.value)],
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

						<div class="col-lg-4 col-md-4">
							<div class="mt-4 text-center">
								<div class="in-btn-1 position-relative">
									<!-- <button type="submit">Submit</button> -->
									<a href="javascript:void(0)" class="submit_btn theme-btn btn-one"  data-bs-toggle="modal" data-bs-target="#loading_modal">Calculate Now</a>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>

			<div class="calculation_result in-contact-form-title-area mt-5 d-none">
				<div class="in-contact-form">

					<div class="cal_sheet_right">
					    <div class="mt-4 text-center">
							<div class="in-btn-1 position-relative">
								    <a href="javascript:void(0)" class="theme-btn btn-one" >Find a Lender</a>
							</div>
						</div>
					    <div class="mt-4 text-center">
							<div class="in-btn-1 position-relative">
								    <a href="javascript:void(0)" class="theme-btn btn-one"  id="btn_excel">Export to Excel</a>
							</div>
						</div>
					</div>


					<div class="info_form text-center">

						<!-- <h2 class="mb-3">Payment Breakdown</h2> -->

						<h2 class="mb-3 estamate_payment">Dummy heading</h2>

					</div>


					<div class="info_form text-center d-none">


							<span class="text_primary estamate_payment">$1,781</span>
						</h5>

						<div class="info_div">
							<label>Insurance</label>
							<p class="fw-bold">$105</p>
						</div>

						<div class="info_div">
							<label>Taxes</label>
							<p class="fw-bold">$193</p>
						</div>

						<div class="info_div">
							<label>Principal & interest</label>
							<p class="fw-bold">$1,484</p>
						</div>

					</div>


					<div class="chart py-5 d-none">
						<h3>Amortization</h3>
						<canvas id="amortization_chart"></canvas>
					</div>

					<div style="overflow: auto" class="mt-5">
						<table style="min-width: 650px" id="Record" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Months</th>
									<th>Monthly Payment</th>
									<th>Interest Paid</th>
									<th>Principal Paid</th>
									<th>Balance</th>
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
		$(document).ready(function () {

			var income;
			var expenses;
			var _home_price;
			var _down_payment;
			var _property_tax;
			var _interest_rate;
			var _home_insurance;
			var _hoa_dues;
			var _loan_type;


			$('.submit_btn').click(function () {

				income = parseFloat($("#annual_income").val());
				expenses = parseFloat($("#monthly_expenses").val());
				_home_price = parseFloat($('#home_price').val()); // $balance
				_down_payment = parseFloat($('#down_payment').val());
				_property_tax = parseFloat($('#property_tax').val()) / 100 / 12;// $propertyTax
				_interest_rate = parseFloat( $('#interest_rate').val()) / 100 / 12;
				_home_insurance = parseFloat( $('#home_insurance').val()) / 12; // $homeinsurance
				_hoa_dues = parseFloat($('#hoa_dues').val()); // $HOAdues
				_loan_type = parseFloat($('#loan_type').val());

				var principal = _home_price - _down_payment;
				var monthlyPayment = (principal * _interest_rate * (Math.pow(1 + _interest_rate, _loan_type))) / (Math.pow(1 + _interest_rate, _loan_type) - 1);
				var _property_tax = _home_price * _property_tax;
				var totalPayment = monthlyPayment + _property_tax + _home_insurance;

				var maxPayment = (income - expenses) * 0.36;
				var affordablePrice = (maxPayment - _property_tax - _home_insurance) / (_interest_rate * Math.pow(1 + _interest_rate, _loan_type)) * (Math.pow(1 + _interest_rate, _loan_type) - 1) + _down_payment;


				if (Number.isNaN(_home_price)  ||  Number.isNaN(_down_payment) ||  Number.isNaN(_property_tax) ||
					Number.isNaN(_interest_rate) || Number.isNaN(_home_insurance) || Number.isNaN( _hoa_dues) || Number.isNaN( _loan_type) ) {
					setTimeout(() => {
						$('.calculation_result').addClass('d-none');
						$('.field_error').removeClass('d-none');
					}, 1000);
				}
				else {
					var _html = ``

					var _total_balance = _home_price + _property_tax + _home_insurance + _hoa_dues;

					// var _after_down = _total_balance - _down_payment; // is ki jaga pe affordiblity amount lagana hai

					var _emi = PMT(_interest_rate, _loan_type , affordablePrice);
					$('.estamate_payment').text('you could save upto:  $'+affordablePrice.toFixed(2));
					for (let index = 0; index < _loan_type * 12 ; index++) {

						var _interest_rate2 = ((_interest_rate / 100) * affordablePrice )/12;
						var _principal = _emi - _interest_rate2;
						affordablePrice = affordablePrice - _principal;

						// $('.estamate_payment').text('$'+affordablePrice);
						_html += `<tr>
									<td>${index+1}</td>
									<td>$${_emi.toFixed(0)}</td>
									<td>$${_interest_rate2.toFixed(0)}</td>
									<td>$${_principal.toFixed(0)}</td>
									<td>$${affordablePrice.toFixed(2)}</td>
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
					$('#loading_modal').modal('hide')
				}, 1000);



			});

			function PMT(_interest_rate, _loan_type , _down_payment) {

				_loan_type = _loan_type * 12;
				_interest_rate = _interest_rate / 1200;

				return _interest_rate * (-_down_payment) * Math.pow((1 + _interest_rate), _loan_type) / (1 - Math.pow((1 + _interest_rate), _loan_type) ) ;

			}

     //Chart
     Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: `Affordability`,
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
            ['Home Insurance', 5200],
            ['Interest Paid', 4000],
            ['Principal Paid', 3000],
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
			// Amortization ===========================================================================================>

			var data = {
				"datasets": [
					{
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
						"label": "Principal",
								"yAxisID":"Principal"
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
						"label": "Interest",
								"yAxisID":"Interest"

					} ,
					{
						"backgroundColor": "rgb(156, 39, 176)",
						"borderColor": "rgb(156, 39, 176)",
						"fill": false,
						"data": [
						200,
						-200,
						100,
						-340
						],
						"id": "amount",
						"label": "Remaining",
								"yAxisID":"Remaining"

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
				"xAxes": [
					{
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
					}
				],
				"yAxes": [
					{
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


			// Amortization ===========================================================================================>


		});
	</script>
    <script>
        document.getElementById("btn_excel").addEventListener("click", () => {
          let table2excel = new Table2Excel();
          table2excel.export(document.querySelector("#Record"));
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/table2excel@1.0.4/dist/table2excel.min.js"></script>

<!-- Loading Modal
============================================= -->
<div class="modal" id="loading_modal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="loading_modalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

		<div class="modal-body text-center">
				<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
				</div>
		</div>

		</div>
	</div>
</div>
<!-- Loading Modal
============================================= -->



@endsection
