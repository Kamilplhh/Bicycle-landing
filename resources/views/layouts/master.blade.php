<html>

<head>
    <title> __________________________🚲</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    @vite('resources/js/app.js')
    @section('navbar')
        <div class="main-navbar">
            <h4><a href="/" class="home-a">Home</a>
            <a href="/">Bike's</a>
            <a href="/">Parts</a>
            <a href="/">Contact</a></h4>
        </div>

    @show
        @yield('content')
        
    </div>     
</body>

</html>
