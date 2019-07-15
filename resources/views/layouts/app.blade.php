<html>
    <head>
        <title>Steligence - @yield('title')</title>
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="<?php echo asset('js/app.js')?>"></script>
    </body>
</html>
