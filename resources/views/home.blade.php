@extends('layouts.inc.front')

@section('title')
Welcome to Cakewala
@endsection
{{--  this is tha page you are logged in  --}}
@section('content')


<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{--  <a href="{{ '/' }}"> Logout</a>  --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{--
@include('layouts.inc.slider')


<div class="py-5">
    <div class="container">
        <h1 class="font-effect-emboss mt-4" style="color:#895996;font-weight:700;text-shadow:5px;"> Trending cake  </h1>

        <div class="row">
               @foreach ($featuredcake as $cake)
            <div class="col md-3">
                <a href="{{ 'view-cake/'.$cake->slug }}" style="text-decoration: none;">
                <div class="card">
                    <img src="{{ asset('assets/uploads/category/'. $cake->image) }}" alt="fuky"
                        style="width: 250px;height:250px;">
                    <div class="card-body">
                        <h5> {{ $cake->cakename }} </h5>
                        <small> {{ $cake->price }}</small>
                    </div>
                </div>
            </a>

            </div>
            @endforeach
        </div>


    </div>


</div>


{{--   for not trending  --}}

{{--
<div class="py-5">
    <div class="container">
        <h1 class="font-effect-emboss mt-4" style="color:#895996;font-weight:700;text-shadow:5px;"> NOt Trending cake  </h1>

        <div class="row">
               @foreach ($statuscake as $cake)
            <div class="col md-3">
                <a href="{{ 'view-cake/'.$cake->slug }}" style="text-decoration: none;">
                <div class="card">
                    <img src="{{ asset('assets/uploads/category/'. $cake->image) }}" alt="fuky"
                        style="width: 250px;height:250px;">
                    <div class="card-body">
                        <h5> {{ $cake->cakename }} </h5>
                        <small> {{ $cake->price }}</small>
                    </div>
                </div>
            </a>

            </div>
            @endforeach
        </div>


    </div>


</div>  --}}




@endsection
