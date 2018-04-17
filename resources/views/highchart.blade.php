<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraveL') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
    
</head>
<body background="">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        TASK.co
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        <div class="row">
        <div class="panel panel-default">
        <table class="table">
        <tr><div class="col-md-8 col-md-offset-2" id="div-pie" style="max-width: 400px; height: 400px; margin: 20px" ></div></tr>
        <tr><div class="col-md-8 col-md-offset-2" id="div-bar" style="max-width: 400px; height: 400px; margin: 20px" ></div></tr>
		
	</table>
	</div>
	</div>
	</div>	
	
        <script src="js/jquery.min.js"></script>
		<script src="js/highcharts.js"></script> 
		<script type="text/javascript" src="/js/themes/gray.js"></script> <!-- letak bawah because need to load highchart 1st then themes -->


			<script>

					$(function () {
	

					    $('#div-chart').highcharts({
					        chart: {
					            type: 'bar'
					        },
					        title: {
					            text: 'Company Income'
					        },
					        subtitle: {
					            text: '2017'
					        },
					        xAxis: {
					            categories: <?php echo json_encode($name) ?>,
					            crosshair: true
					        },
					        yAxis: {
					            min: 0,
					            title: {
					                text: 'Amount ( Dollar)'
					            }
					        },
					        plotOptions: {
					            column: {
					                pointPadding: 0,
					                borderWidth: 500,
					                borderHeight: 100
					            }
					        },

					        series: [{
					            name: 'Income',
					            data: <?php echo json_encode($salary) ?>
					        }]
					    });
					});
		  </script>

		  <script>

					$(function () {
	

					    $('#div-pie').highcharts({
					        chart: {
					            plotBackgroundColor: null,
					            plotBorderWidth: null,
					            plotShadow: false,
					            type: 'pie'
					        },
					        title: {
					            text: 'Company Income'
					        },
					        subtitle: {
					            text: '2017'
					        },
		
					        tooltip: {
					            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					        },
							plotOptions: {
					            pie: {
					                allowPointSelect: true,
					                cursor: 'pointer',
					                dataLabels: {
					                    enabled: false
					                },
					                showInLegend: true
					            }
					        },

					        series: [{
					            name: 'Income',
					            data: {!!$encode!!}

					        }]
					    });
					});
		  </script>


		  <script>

					$(function () {
	

					    $('#div-bar').highcharts({
					        chart: {
						        type: 'column'
						    },
					        title: {
					            text: 'Company Income'
					        },
					        subtitle: {
					            text: '2017'
					        },
					        xAxis: {
					            categories: <?php echo json_encode($name) ?>,
					            
					        },
					        yAxis: {
					            min: 0,
					            title: {
					                text: 'Amount ( Dollar)'
					            }
					        },
					        plotOptions: {
						        series: {
						            borderWidth: 0,
						            dataLabels: {
						                enabled: false,
						                format: '{point.y:.1f}%'
						            }
						        }
						    },



					        series: [{
					            name: 'Income',
					            data: <?php echo json_encode($salary) ?>
					        }]
					    });
					});
		  </script>




</body>
</html>


         