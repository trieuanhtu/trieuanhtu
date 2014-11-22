<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    @section('style')
    <!-- bootstrap 3.0.2 -->
    {{HTML::style("css/bootstrap.min.css")}}
    <!-- font Awesome -->
    {{HTML::style("css/plugins/metisMenu/metisMenu.min.css")}}
    <!-- Ionicons -->
    {{HTML::style("css/plugins/timeline.css")}}
    {{HTML::style("css/sb-admin-2.css")}}
    {{HTML::style("css/plugins/morris.css")}}
    {{HTML::style("font-awesome-4.1.0/css/font-awesome.min.css")}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
@include('layouts.header');

<div id="page-wrapper">
    <section class="content">
        @yield('content')

    </section><!-- /.content -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

</body>

</html>
