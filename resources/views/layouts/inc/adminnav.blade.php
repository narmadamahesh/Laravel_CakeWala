<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#895996;">
    <div class="container-fluid">
        <p class="navbar-brand"  style="color:white;font-weight:700;text-shadow:5px;font-size:30px; font-family:TimesNewRoman;"  href="#"> Welcome Admin !!! Cake is Little Slice Of Heaven</p>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        {{--  this is the page for admin navigation with logo  --}}
        <ul class="nav navbar-nav ms-auto">

            <li class="nav-item">

                <a class="nav-link" style="text-decoration:none;"aria-current="page" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="/images/adminfemale.png" {{ __('Logout') }}>
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
      </div>
    </div>
  </nav>
