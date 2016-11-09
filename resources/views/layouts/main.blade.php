<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div class="container-fluid" id="page-wrapper">
        @include('layouts.parts._nav')

        <div class="container-fluid no-indent" id="content-wrapper">
            @yield('content')
        </div>        
        
        @include('layouts.parts._footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/css/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            var contentHeight = $(window).height() - $('#page-wrapper .footer').outerHeight(true) - $('#page-wrapper .navigation').outerHeight(true);
            $('#content-wrapper').css('min-height', contentHeight);
        })

    </script>
</body>
</html>
