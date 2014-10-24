<!doctype html>
<html lang="en">
	<head>
		<title>TMIP | Dashboard</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">

		<!-- BEGIN STYLESHEETS -->
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/boostbox.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/boostbox_responsive.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/theme-default/font-awesome.min.css') }}">

		<!-- Additional CSS includes -->
		@yield('additional_css_includes')

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <link rel="javascript" href="{{ URL::asset('js/libs/utils/html5shiv.js') }}">
        <link rel="javascript" href="{{ URL::asset('js/libs/utils/respond.min.js') }}">
        <![endif]-->

	</head>


	<body>

	    <header id="header">
        	@include('after_login.pages.header')
        </header>
        <div id="base">
        	<div id="sidebar">
        		@include('after_login.pages.sidebar')
        	</div>
        	<div id="content">
        		@yield('main_content')
        	</div>
        </div>

        <!-- BEGIN JAVASCRIPT -->
        {{ HTML::script('js/libs/jquery/jquery-1.11.0.min.js') }}
        {{ HTML::script('js/libs/jquery/jquery-migrate-1.2.1.min.js') }}
        {{ HTML::script('js/libs/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}
        {{ HTML::script('js/core/BootstrapFixed.js') }}
        {{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}
        {{ HTML::script('js/libs/spin.js/spin.min.js') }}
        {{ HTML::script('js/libs/moment/moment.min.js') }}
        {{ HTML::script('js/libs/flot/jquery.flot.min.js') }}
        {{ HTML::script('js/libs/flot/jquery.flot.time.min.js') }}
        {{ HTML::script('js/libs/flot/jquery.flot.resize.min.js') }}
        {{ HTML::script('js/libs/flot/jquery.flot.orderBars.js') }}
        {{ HTML::script('js/libs/flot/jquery.flot.pie.js') }}
        {{ HTML::script('js/libs/jquery-knob/jquery.knob.js') }}
        {{ HTML::script('js/libs/sparkline/jquery.sparkline.min.js') }}
        {{ HTML::script('js/libs/slimscroll/jquery.slimscroll.min.js') }}
        {{ HTML::script('js/libs/fullcalendar/fullcalendar.min.js') }}
        {{ HTML::script('js/libs/bootstrap/bootstrap.min.js') }}
        {{ HTML::script('js/core/App.js') }}
        {{ HTML::script('js/core/TmipApp.js') }}
        {{ HTML::script('js/core/demo/DemoCharts.js') }}
        {{ HTML::script('js/core/demo/Demo.js') }}
	</body>
</html>