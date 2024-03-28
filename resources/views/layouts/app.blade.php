<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <script src="assets/js/script.js"></script>

    <title>@yield('title', 'Dashboard')</title>
</head>

<body>
    @include("layouts.navbar")

    <main class="row">
        <div class="col-3">
            @include("layouts.sidebar")
        </div>
        <dic class="col-8">
            @yield('content')
        </dic>
    </main>

    <footer>
        <!-- Add footer content as needed -->
    </footer>

    <!-- Add your JavaScript and other scripts here -->
</body>

</html>