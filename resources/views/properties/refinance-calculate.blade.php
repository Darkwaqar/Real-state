@extends('properties.layouts.main')
@php
    $newAmount = $request->newAmount;
    $balance = $request->loanAmount;
    $newLoan = PMT($request->newInterest, $request->newTerm, $newAmount);
    $oldLoan = PMT($request->interestRate, $request->term, $balance);
    $newInterest = 0;
    $interest = 0;
    $principal = 0;
    for ($i = 1; $i <= $request->newTerm * 12; $i++) {
        $newInterest = (($request->Newinterest / 100) * $newAmount) / 12;
        $Newprincipal = $newLoan - $newInterest;
        $newAmount = $newAmount - $Newprincipal;
    }
    for ($i = 1; $i <= $request->term * 12; $i++) {
        $interest = (($request->interestRate / 100) * $balance) / 12;
        $principal = $oldLoan - $interest;
        $balance = $newAmount - $principal;
    }
    
    $saving = $oldLoan - $newLoan;
@endphp
@section('content')
    <div class="card">
        <br>
        <br>
        <h3> Estimated payment</h3>
        <h3>{{ showValue($saving)}}
            
        </h3>
        <br>
        <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Loan Amount </th>
                    <th>Interest rate</th>
                    <th>Origination year</th>
                    <th>Term</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $request->loanAmount }}</td>
                    <td>{{ $request->interestRate }}</td>
                    <td>{{ $request->originationYear }}</td>
                    <td>{{ $request->loan }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <h3> New Loan</h3>
        <br>
        <br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Loan amount</th>
                    <th>Interest rate</th>
                    <th>Term</th>
                    <th>Refinance fees</th>
                    <th>Roll fees</th>
                    <th>Cash out</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $request->newAmount }}</td>
                    <td>{{ $request->newInterest }}</td>
                    <td>{{ $request->newTerm }}</td>
                    <td>{{ $request->refinanceFees }}</td>
                    <td>{{ $request->rollFees }}</td>
                    <td>{{ $request->cashOut }}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Months</th>
                    <th>Monthly Payment</th>
                    <th>Interest Paid</th>
                    <th>Principal Paid</th>
                    <th>Payment Amt </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $down_payment = $request->newAmount;
                    $emi = PMT($request->newInterest, $request->newTerm, $down_payment);
                @endphp
                @for ($i = 1; $i <= $request->newTerm * 12; $i++)
                    @php
                        $interest = (($request->newInterest / 100) * $down_payment) / 12;
                        $principal = $emi - $interest;
                        $down_payment = $down_payment - $principal;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ showValue($emi) }}</td>
                        <td>{{ showValue($interest) }}</td>
                        <td>{{ showValue($principal) }}</td>
                        <td>{{ showValue($down_payment) }}</td>

                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <div id="chartdiv"></div>

    <style>
        #chartdiv {
            width: 100%;
            height: 250px;
        }
    </style>
    <script>
        /**
         * ---------------------------------------
         * This demo was created using amCharts 5.
         *
         * For more information visit:
         * https://www.amcharts.com/
         *
         * Documentation is available at:
         * https://www.amcharts.com/docs/v5/
         * ---------------------------------------
         */

        // Create root and chart
        var root = am5.Root.new("chartdiv");

        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panY: false,
                wheelY: "zoomX",
                layout: root.verticalLayout,
                maxTooltipDistance: 0
            })
        );

        // Define data
        var data = [{
            date: new Date(2021, 0, 1).getTime(),
            value: 1,
            value2: 2.5
        }, {
            date: new Date(2021, 0, 2).getTime(),
            value: 3,
            value2: 2.1
        }, {
            date: new Date(2021, 0, 3).getTime(),
            value: 2,
            value2: 3
        }, {
            date: new Date(2021, 0, 4).getTime(),
            value: 1,
            value2: 2
        }, {
            date: new Date(2021, 0, 5).getTime(),
            value: 1.5,
            value2: 0.5
        }];

        // Create Y-axis
        var yAxis = chart.yAxes.push(
            am5xy.ValueAxis.new(root, {
                extraTooltipPrecision: 1,
                renderer: am5xy.AxisRendererY.new(root, {})
            })
        );

        // Create X-Axis
        var xAxis = chart.xAxes.push(
            am5xy.DateAxis.new(root, {
                baseInterval: {
                    timeUnit: "day",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {
                    minGridDistance: 20
                }),
            })
        );

        // Create series
        function createSeries(name, field) {
            var series = chart.series.push(
                am5xy.SmoothedXLineSeries.new(root, {
                    name: name,
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: field,
                    valueXField: "date",
                    tooltip: am5.Tooltip.new(root, {})
                })
            );

            series.strokes.template.set("strokeWidth", 2);

            series.get("tooltip").label.set("text", "[bold]{name}[/]\n{valueX.formatDate()}: {valueY}")
            series.data.setAll(data);
        }

        createSeries("Series #1", "value");
        createSeries("Series #2", "value2");

        // Add cursor
        chart.set("cursor", am5xy.XYCursor.new(root, {
            behavior: "zoomXY",
            xAxis: xAxis
        }));

        xAxis.set("tooltip", am5.Tooltip.new(root, {
            themeTags: ["axis"]
        }));

        yAxis.set("tooltip", am5.Tooltip.new(root, {
            themeTags: ["axis"]
        }));
    </script>
@endsection
