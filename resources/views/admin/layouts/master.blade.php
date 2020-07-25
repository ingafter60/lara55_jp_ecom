<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>JavasShop Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    {{ Html::style('assets/css/bootstrap.min.css') }}
    {{ Html::style('assets/css/animate.min.css') }}
    {{ Html::style('assets/css/paper-dashboard.css') }}
    {{ Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}
    {{ Html::style('assets/css/themify-icons.css') }}

</head>
<body>
	<!-- Wrappter -->
	<div class="wrapper">
		<!-- Sidebar -->
	    <div class="sidebar" data-background-color="white" data-active-color="danger">
			@include('admin.layouts.sidebar')
		</div>

		<!-- Main content -->
	    <div class="main-panel">

	    	<!-- Navbar -->
	        <nav class="navbar navbar-default">
				@include('admin.layouts.navbar')
	        </nav>

	        <!-- Content -->
	        <div class="content">
	            <div class="container-fluid">
	            	@yield('content')
	            </div>
	        </div>

	        <!-- Footer -->
	        <footer class="footer">
				@include('admin.layouts.footer')
	        </footer>

	    </div>
	</div><!-- end Wrappter -->

</body>

{{ Html::script('assets/js/jquery-1.10.2.js') }}
{{ Html::script('assets/js/jquery-1.10.2.js') }}
</html>
