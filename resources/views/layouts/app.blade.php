<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PCM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="row">
<div class="container">
<nav class="sidebar">
    <ul class="main_side">
        <li>
            <img class="dashboard_logo" src="{{asset('img/d_logo6.png')}}" class="image">
        </li>
        <li class="active"><a href="/dashboard"><i class="fas fa-chart-line"></i> Dashboard</a></li>
        <li> <a href="#" id="1"><i class="far fa-calendar-alt"></i> Visit <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-1">
                <li><a href="/schedule/create">Add Visit</a></li>
                <li><a href="/schedule">View Visit</a></li>
            </ul>
        </li>
        <li> <a href="#" id="2"> <i class="far fa-user"></i> Patient <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-2">
                <li><a href="/patient/create">Add Patient</a></li>
                <li><a href="/patient">View Patient</a></li>
            </ul>
        </li>
        <li> <a href="#" id="3"><i class="far fa-calendar-check"></i> Appointment <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-3">
                <li><a href="/appointment/create">Add Appointment</a></li>
                <li><a href="/appointment">View Appointment</a></li>
            </ul>
        </li>
        <li> <a href="#" id="4"><i class="far fa-bell"></i> Reminder <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-4">
                <li><a href="/reminder/create">Add Reminder</a></li>
                <li><a href="/reminder">View Reminder</a></li>
            </ul>
        </li>
        <li> <a href="#" id="5"><i class="far fa-credit-card"></i> Payment <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-5">
                <li><a href="/payment/create">Add Payment</a></li>
                <li><a href="/payment">View Payment</a></li>
            </ul>
        </li>
    </ul>
</nav>
</div>
    <div class="container">
        @yield('content')
    </div>
</div>


</body>
</html>
