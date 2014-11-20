<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">

    <title>Test</title>

    <script src="//code.jquery.com/jquery-1.10.0.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    {{ HTML::script('js/bootstrap-datepicker.js'); }}

    {{ HTML::script('js/bootstrap-timepicker.js'); }}

    {{ HTML::script('js/function.js'); }}

    {{ HTML::style('css/datepicker.css'); }}

    {{ HTML::style('css/bootstrap-timepicker.css'); }}

    {{ HTML::style('css/style.css'); }}

</head>

<body>

<div class="container">
    @yield('content')
</div>

</body>


</html>