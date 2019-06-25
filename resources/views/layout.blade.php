<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/clients">Klanten</a>
            <a class="nav-item nav-link" href="/reservations">Reserveringen</a>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>

<script src="/js/app.js"></script>

</html>