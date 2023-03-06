<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment SPP - @yield('title')</title>
    <link rel="stylesheet" href="{{secure_asset ('build/assets/app-ff486903.css')}}">
    <!-- UIkit CSS -->
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{secure_asset ('css/style.css')}}"> 
    <link rel="stylesheet" href="{{secure_asset ('css/uikit.css')}}">
    <link rel="stylesheet" href="{{secure_asset ('css/bootstrap.css')}}"> 

    <style>
    </style>
    
</head>
<body class="">

    @yield('content');
    
    <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>		
	<!--Datatables -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <script src="{{secure_asset ('build/assets/app-abd40105.js')}}"></script>
    <script>
        // FOR DATATBLES PLUGIN
        document.addEventListener('DOMContentLoaded', function () {
            let table = new DataTable('#table');
        });

        // FOR ALERT
    </script>
    <script>
        const date = new Date();
        let day = date.getDate();
        let month = date.getMonth() + 1;
        let year = date.getFullYear();
        let currentDate = `${day}-${month}-${year}`;
            $(document).ready(function() {
                $('#laporan').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'print',
                            title: 'Laporan Pembayaran SPP',
                            messageTop: `Updated: ${currentDate}`,
                        }
                    ]
                } );
            } );
    </script>
    <script>
    </script>
       
</body>
</html>