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
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}"> 
    <link rel="stylesheet" href="{{asset ('css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.css')}}"> 

    
</head>
<body class="">
    
    <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>		
	<!--Datatables -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
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
    <script>
    
    </script>
       
</body>
</html>