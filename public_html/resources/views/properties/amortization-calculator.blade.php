@php
    $metaTitle = 'Amortization Calculator USA | Washington Amortization Calculator';
    $metaDescription = "Plan your loan payments effectively with our Amortization Calculator USA.
	 Specifically designed for Washington residents, our Washington Amortization Calculator allows you
	  to calculate and visualize your loan's amortization schedule. Gain insights into the principal
	   and interest breakdowns, track your progress, and make informed financial decisions.
	    Explore our user-friendly Washington Amortization Calculator today and stay on top
		 of your loan repayment journey.";
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
                    <p class="title">Amortization Calculator</p>
                    <p class="para">Evaluate your mortgage expense at different payment stages   </p>
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
				<h2>Your Mortgage Schedule Details</h2>
			</div>
            <figure class="highcharts-figure">
                <div id="container"></div>
              </figure>
			<div class="in-contact-form-title-area">
				<div class="in-contact-form">
					<form action="#" method="get" class="row d-flex justify-content-center bg-white p-lg-5 p-md-4 p-2 border-radius">

						<div class="col-md-6 mb-3">
							<label for="total_amount">Total Amount</label>
							<div class="inline_input">
								<div class="input_label">$</div>
								<input onchange="totalAmount()" type="number" id="total_amount" name="total_amount" />
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="interest_rate">Interest rate</label>
							<div class="inline_input">
								<div class="input_label">%</div>
								<input onchange="interestRate()" type="number" id="interest_rate" name="interest_rate" />
							</div>
						</div>

						<div class="col-md-6 mb-3 loan_type_select">
						    <label for="loan_type">Loan terms</label>
							<div class="in-insurance-type in-select position-relative">
								<select onchange="totalAmount2()" name="loan_type" id="loan_type">
									<option value="10" selected>10 Year</option>
									<option value="15">15 Year</option>
									<option value="20">20 Year</option>
									<option value="30">30 Year</option>
								</select>
							</div>
						</div>


						<div class="col-md-6 mb-3">
							<label for="loan_start_date">Loan start date</label>
							<div class="inline_input">
								<input type="date" id="loan_start_date" name="loan_start_date" />
							</div>
						</div>
                        <script>
                            TotalAmount = document.getElementById('total_amount')
                            InterestRate = document.getElementById('interest_rate')
                            const totalAmount = () => {
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
                                            ['Home Insurance', parseInt(TotalAmount.value)],
                                            ['Interest Paid', parseInt(InterestRate.value)],
                                            ['Principal Paid', parseInt(TotalAmount.value)],
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
                                            ['Home Insurance', parseInt(TotalAmount.value)],
                                            ['Interest Paid', parseInt(InterestRate.value)],
                                            ['Principal Paid', parseInt(TotalAmount.value)],
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
                            const totalAmount2 = () => {
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
                                            ['Home Insurance', parseInt(TotalAmount.value)],
                                            ['Interest Paid', parseInt(InterestRate.value)],
                                            ['Principal Paid', parseInt(TotalAmount.value)],
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
									<a href="javascript:void(0)" class="submit_btn theme-btn btn-one"  data-bs-toggle="modal" data-bs-target="#loading_modal">Calculate Now</a>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>

			<div class="calculation_result in-contact-form-title-area mt-5 d-none">
				<div class="in-contact-form">

					<h2 class="mb-3 text-center">Estimate Payment -
						<span class="text_primary">$1,237</span>
					</h2>

					<div class="info_form text-center d-none">


						<div class="info_div">
							<label>Total principal</label>
							<p class="fw-bold">$200,000</p>
						</div>

						<div class="info_div">
							<label>Total interest</label>
							<p class="fw-bold">$245,193</p>
						</div>

						<div class="info_div">
							<label>Principal & interest</label>
							<p class="fw-bold">$445,193</p>
						</div>

					</div>


					<div class="chart mt-5 d-none">
						<canvas id="myChart"></canvas>
					</div>

                    <div class="cal_sheet_right">
					    <div class="mt-4 text-center">
							<div class="in-btn-1 position-relative">
								    <a href="mortgage-rates.html" class="theme-btn btn-one" >Find a Lender</a>
							</div>
						</div>
					    <div class="mt-4 text-center">
							<div class="in-btn-1 position-relative">
								    <a href="javascript:void(0)" class="theme-btn btn-one"  id="btn_excel">Export to Excel</a>
							</div>
						</div>
					</div>
                    <h2 class="mb-3 text-center">Your Payment Plan</h2>
					<div style="overflow: auto" class="mt-5">
						<table style="min-width: 650px" id="Record" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Month</th>
									<th>Monthly Payment </th>
									<th>Payment Date</th>
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

			var _total_amount;
			var _interest_rate;
			var _loan_type;
			var _loan_start_date;

			$('.submit_btn').click(function () {

				_total_amount = parseFloat($('#total_amount').val());
				_interest_rate = parseFloat($('#interest_rate').val());
				_loan_type = parseFloat($('#loan_type').val());

				if (Number.isNaN(_total_amount) || Number.isNaN(_interest_rate) || Number.isNaN(_loan_type)) {

					setTimeout(() => {
						$('.calculation_result').addClass('d-none');
						$('.field_error').removeClass('d-none');
					}, 1000);

				}
				else{

					var _emi = PMT(_interest_rate, _loan_type , _total_amount);

					_loan_start_date = new Date($('#loan_start_date').val());
					let a = [ {month: 'short'}, {year: 'numeric'}];

					var _html = ``;

					for (let index = 0; index < _loan_type * 12 ; index++) {

						var _interest_rate2 = ((_interest_rate / 100) * _total_amount )/12;
						var _principal = _emi - _interest_rate2;
						_total_amount = _total_amount - _principal;

						_loan_start_date.setMonth(_loan_start_date.getMonth() + 1);
						var _started_date = join(_loan_start_date , a, ' ');

						// $paymentDate = date('Y-m-d', strtotime('+1 month', strtotime($paymentDate)));

						_html += `<tr>
									<td>${index+1}</td>
									<td>$${_emi.toFixed(0)}</td>
									<td>${_started_date}</td>
									<td>$${_interest_rate2.toFixed(0)}</td>
									<td>$${_principal.toFixed(0)}</td>
									<td>$${_total_amount.toFixed(2)}</td>
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


			function join(t, a, s) {
				function format(m) {
					let f = new Intl.DateTimeFormat('en', m);
					return f.format(t);
				}
				return a.map(format).join(s);
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
