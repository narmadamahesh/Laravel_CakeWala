<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.bunny.net">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


  {{--   my links   --}}
  <link href="frontend/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

  <link href="{{ asset('frontend/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"></link>

  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('frontend/js/light-bootstrap-dashboard.js') }}" defer></script>
  <script src="{{ asset('frontend/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

  <script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>


</head>

<body>
    {{--   this is the page for like layout for admin page rendering all the content  --}}


        <div class="wrapper">
            @include('layouts.inc.sidebar')

            <div class="main-panel">

                @include('layouts.inc.adminnav')

                <div class="content">
                    @yield('content')
                </div>


                {{--  @include('layouts.inc.adminfooter')  --}}
            </div>

        </div>




        <script src="{{ asset('frontend/js/jquery.3.2.1.min.js') }}" defer></script>

        <script src="{{ asset('frontend/js/perfect-scrollbar.jquery.min.js') }}" defer></script>



        <script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>



        <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (session('status'))
        {
        <script>
            swal("{{ session('status') }}");
        </script>
        }
        @endif

        @yield('scripts')

    </body>

</html>
