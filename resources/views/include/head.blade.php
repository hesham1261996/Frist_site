<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Frisr site</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets')}}/media/image/favicon.png)"/>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<!-- CSS -->
	<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
	<meta name="robots" content="noindex,follow" />

	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/bundle.css" type="text/css">

	<link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.min.css" type="text/css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css" type="text/css">
	
	<!-- bootstrap-select -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap-select/css/bootstrap-select.min.css" type="text/css">

	<!-- Daterangepicker -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/datepicker/daterangepicker.css" type="text/css">

	<!-- DataTable -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/dataTable/datatables.min.css" type="text/css">

	<!-- App css -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/app.css" type="text/css">
</head>


@yield('content')


<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{asset('vendors/bundle.js')}}"></script>
<script src="{{asset("'js/popper.js'")}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<!-- Apex chart -->
<script src="{{asset('vendors/charts/apex/apexcharts.min.js')}}"></script>

<!-- Daterangepicker -->
<script src="{{asset('vendors/datepicker/daterangepicker.js')}}"></script>

<!-- DataTable -->
<script src="{{asset('vendors/dataTable/datatables.min.js')}}"></script>
<script src="{{asset('js/examples/pages/user-list.js')}}"></script>

<!-- bootstrap-select -->
<script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

<!-- Dashboard scripts -->
<script src="{{asset('js/examples/pages/dashboard.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('js/app.min.js')}}"></script>
<script>
    $('input[name="daterangepicker"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="{{asset('js/script.js')}}" charset="utf-8"></script>

</body>
</html>
