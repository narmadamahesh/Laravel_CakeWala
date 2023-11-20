<style>
.check ul li a:hover
{
   border-bottom-color: #495681;
   border: 2px solid white;
}
{{--   this is page for all nav for login and register  --}}

</style>
<nav class="navbar navbar-expand-lg navbar-light mb-5 check" style="background-color:#895996">
    <div class="container-fluid">
        <img src="/images/iconbir.png" class="img-fluid" alt="image" style="width: 100px;height:70px;">
        {{--  <img src="images/cakey.gif" alt="image" style="width: 170px;height:70px;">  --}}

        <h1 class="font-effect-emboss mt-3" style="color:#fff;"> 🅲🅰🅺🅴🆆🅰🅻🅰 </h1>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-5">
          <li class="nav-item" >

            <a class="nav-link active"  style="color:white;font-weight:700;text-shadow:5px;font-size:20px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" aria-current="page" href="{{ url('/') }}">  <img style="width:50px; height:50px;" src="/images/home.png">  Home</a>
          </li>
          {{--  <li class="nav-item" >
            <a class="nav-link active"  style="color:white;font-weight:700;text-shadow:5px;font-size:25px;" href="{{ url('/') }}"> Cakes </a>
          </li>  --}}
          <li class="nav-item">
            <a class="nav-link" style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="{{ url('cart') }}"> <img style="width:50px; height:50px;" src="/images/cartcheck.png"> Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="{{('checkout')}}"><img style="width:50px; height:50px;" src="/images/pya.png">  Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="{{ url('my-orders') }}"> <img style="width:50px; height:45px;" src="/images/pro.png"> My Profile </a>
          </li>

        </ul>

        <ul class="navbar-nav">
{{--   check with login  --}}
@guest
@if (Route::has('login'))
<li class="nav-item">
    <a class="nav-link font-effect-emboss mt-4"  style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="{{ route('login') }}">{{ __('Login') }}   <img style="width:45px; height:40px;" src="/images/log.png"> </a>
</li>
@endif

@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link font-effect-emboss mt-4"  style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" href="{{ route('register') }}">{{ __('Register') }}     <img style="width:45px; height:40px;" src="/images/reg.png"></a>
</li>
@endif
@else

<a class="nav-link"  style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="#" id="navbarDropdown" data-bs-toggle="dropdown"
    aria-expanded="false"> HELLO!!
    {{ Auth::user()->name }}
</a>


    <li class="ms-auto">
        <a class="dropdown-item"  style="color:white;font-weight:700;text-shadow:5px;font-size:20px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"  href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}

        </a>



        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            class="d-none">
            @csrf
        </form>
</ul>
</li>

@endguest
</ul>







      </div>
    </div>
  </nav>
