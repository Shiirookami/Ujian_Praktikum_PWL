<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard &mdash; ngoding-era</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('')}}admin/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}admin/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('')}}admin/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    @stack('css')
    @stack('datatables')
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{asset('')}}admin/assets/css/style.min.css">
    <link rel="stylesheet" href="{{asset('')}}admin/assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="{{asset('')}}admin/assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        @include('layouts.header')
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.settings')

        <footer>
            Copyright © 2022 &nbsp <a href="https://www.ngoding-era.com" target="_blank" class="ml-1"> ngoding-era </a> <span> . All rights Reserved</span>
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="{{asset('')}}admin/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="{{asset('')}}admin/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    @stack('js')
    @stack('js_datatables')
    <script>
        DataTable.init()
    </script>
    <!-- ======= -->
    <script src="{{asset('')}}admin/assets/js/main.js"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
