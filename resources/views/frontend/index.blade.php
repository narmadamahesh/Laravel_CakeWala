@extends('layouts.inc.front')
@section('title')
    Welcome to Cakewala
@endsection

<style>

    .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #F9615A 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 80px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
</style>



@section('content')
    @include('layouts.inc.slider')
    {{--   first page of the product   --}}
    <div class="py-5">
        <div class="container mt-5 p-3 ">
             <h3 class="animate-charcter">  Premium Black Forest Cakes </h3>
            {{--  <h1 class="font-effect-emboss mt-4" style="color:#F78F06;font-size:40px;font-family:Broadway;"> Premium  BlackForest Cakes
             </h1>  --}}
        </div>

        <div class="container">
            <div class="row">
                @foreach ($featuredcake as $cake)
                    <div class="col-md-4">
                        <a href="{{ 'view-cake/' . $cake->slug }}" style="text-decoration: none;">
                            <div class="card mt-5 p-2" style="border: 2px solid black;" >

                                <img src="{{ asset('assets/uploads/category/' . $cake->image) }}" alt="fuky"
                                 class="img-fluid">
                                <div class="card-body" style="background-color:#895996;">
                                    <h5 style="color:#fff;font-size:25px;font-weight:bold;font-family:Rockwell Extra Bold">
                                        {{ $cake->cakename }} </h5>
                                    <del style="color:black;font-size:22px;font-family:algerian"> Original Price
                                        Rs.{{ $cake->original_price }}</del>
                                    <small style="color:black;font-size:22px;font-family:algerian;font-weight:800;"> Selling
                                        Price Rs. {{ $cake->selling_price }}</small>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>


        </div>


    </div>


    {{--   for second side of cake  --}}


    <div class="py-5 mt-5 mb-5">

        <div class="container mt-5">
            <h3 class="animate-charcter">   Deliciuos Chocolate Cakes </h3
            {{--  <h1 class="font-effect-emboss mt-4" style="color:#F78F06;font-size:40px;font-family:Broadway;"> Chocolate
                Cakes </h1>  --}}
        </div>

        <div class="container">
            <div class="row">
                @foreach ($statuscake as $cake)
                    <div class="col-md-4">
                        <a href="{{ 'view-cake/' . $cake->slug }}" style="text-decoration: none;">
                            <div class="card mt-5 p-2" style="border: 2px solid black;" >
                                <img src="{{ asset('assets/uploads/category/' . $cake->image) }}" alt="fuky"
                                      class="img-fluid">
                                <div class="card-body" style="background-color:#895996;">
                                    <h5 style="color:#fff;font-size:25px;font-weight:bold;font-family:Rockwell Extra Bold">
                                        {{ $cake->cakename }} </h5>
                                    <del style="color:black;font-size:22px;font-family:algerian"> Original Price
                                        Rs.{{ $cake->original_price }}</del>
                                    <small style="color:black;font-size:22px;font-family:algerian;font-weight:800;"> Selling
                                        Price Rs. {{ $cake->selling_price }}</small>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>


        </div>
    </div>

    </div>


    {{-- Thir side of the cake   --}}
@endsection
