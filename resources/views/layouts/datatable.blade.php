<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment SPP - @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- UIkit CSS -->
    <!--Regular Datatables CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    {{-- <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">  	 

    
</head>
<body>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>		
	<!--Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    <script>
        // FOR DATATBLES PLUGIN
        $(document).ready(function () {
            $('#table').DataTable(
            );
        });

        // FOR ALERT
    </script>
       
</body>
</html>