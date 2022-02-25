<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-md bg-transparent navbar-light">
    <div class="container p-2">
        <a href="#" class="navbar-brand font-weight-bold">LOGO</a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navmenu"
        >

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu" style="text-align: center">
            <ul class="navbar-nav ml-sm-auto mt-sm-2">
                <li class="nav-item">
                    <a href="/" class="nav-link text-dark" style="min-width: 75px">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/services" class="nav-link text-dark" style="min-width: 75px">Services</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link text-dark" style="min-width: 75px">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link text-dark" style="min-width: 75px">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="/faq" class="nav-link text-dark" style="min-width: 75px">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="/sign-up" class="nav-link text-dark" style="border-color: cornflowerblue; background-color: #92adff; border-radius: 40px; min-width: 100px;">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-3 m-sm-auto">

    @yield('content')

</main>
</body>

</html>
