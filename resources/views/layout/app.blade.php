<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/2cae89997c.js" crossorigin="anonymous"></script>   
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div id="">
        <main class="py-4">
            @yield('content')
        </main>
        @hasSection('javascript')
            @yield('javascript')
        @endif
    </div>
</body>
</html>