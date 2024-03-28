<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <title>@yield('title', 'Dashboard')</title>
</head>

<body>
    @include("layouts.navbar")

    <main class="row">
        <div class="col-3">
            @include("layouts.sidebar")
        </div>
        <div class="col-9 pt-4">
            @yield('content')
        </div>
    </main>

    <footer>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>