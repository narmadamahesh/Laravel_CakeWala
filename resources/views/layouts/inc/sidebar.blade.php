<!DOCTYPE html>

<html lang="en" dir="ltr">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="iconbir.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<div class="sidebar" data-image="images/iconbir.png" id="newside" style="width:250px;">

    <div class="sidebar-wrapper" >
        <div class="logo">
            <img src="/images/iconbir.png" style="width: 100px;height:100px;margin-left:30px;">
{{--   this is the oage for admin dahs board   --}}

            <h1 class="font-effect-emboss mt-3" style="color:#fff;font-size:25px;"> 🅲🅰🅺🅴🆆🅰🅻🅰 </h1>

        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active':''}} ">
                <a class="nav-link text-style-none" href="{{ url('dashboard') }}">
                  <img src="/images/dash.png" style="width: 50px;height:50px;"/>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{  Request::is('categories') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('categories') }}">
                    <img src="/images/items.png" style="width: 50px;height:50px;"/>
                    <p> List of Cakes </p>
                </a>
            </li>
            <li  class="nav-item {{  Request::is('add-category') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('add-category') }}">
                    <img src="/images/add.png" style="width: 50px;height:50px;"/>
                    <p> Add Cake </p>
                </a>
            </li>

            <li  class="nav-item {{  Request::is('orders') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('orders') }}">
                    <img src="/images/orders.png" style="width: 50px;height:50px;"/>
                    <p> Orders  </p>
                </a>
            </li>
            <li  class="nav-item {{  Request::is('users') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('users') }}">
                    <img src="/images/users.png" style="width: 50px;height:50px;"/>
                    <p> Users  </p>
                </a>
            </li>
            {{--  <li  class="nav-item {{  Request::is('product') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('product') }}">
                    <img src="images/add.png" style="width: 50px;height:50px;"/>
                    <p> Product </p>
                </a>
            </li>
            <li  class="nav-item {{  Request::is('add-product') ? 'active':''}} ">
                <a class="nav-link"  href="{{ url('add-product') }}">
                    <img src="images/add.png" style="width: 50px;height:50px;"/>
                    <p> Add Category </p>
                </a>
            </li>
            <li>
                <a class="nav-item" href="./typography.html">
                    <i class="nc-icon nc-paper-2"></i>
                    <p> Products</p>
                </a>
            </li>  --}}

        </ul>
    </div>
</div>
