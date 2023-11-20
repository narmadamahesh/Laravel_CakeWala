<div class="container-fluid">
{{--   this  is the page for slideing the picture for carousel  --}}
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="{{ asset('/images/cake.jpg') }}"  style="width: 650px;height: 650px;background-repeat: no-repeat;
        background-attachment: fixed;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('/images/slide_4.jpg') }}"  style="width: 250px;height: 650px;background-repeat: no-repeat;
        background-attachment: fixed;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('/images/cake_8.jpg') }}"  style="width: 650px;height: 650px;background-repeat: no-repeat;
        background-attachment: fixed;" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"> </span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"> </span>
    </button>
  </div>
</div>

{{--
<div id="carouselExampleCaptions" class="carousel slide carousel-fade ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/slide_check.jpg') }}" class="d-block w-100 img-fluid " style="width: 250px;height: 950px;background-repeat: no-repeat;
        background-attachment: fixed;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-center bold" style="font-size: 30px;"> LET THE CAKE CHANGE THE HAPPINESS</h5>
          <p style="color:#F78F06;font-weight:900;font-size:30px;"> LIFE IS SHORT ........... LETS  EAT THE CAKE </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide_4.jpg') }}" class="d-block w-100 img-fluid" style="width: 500px;height: 950px;background-repeat: no-repeat;
        background-attachment: fixed;background-position: center;   " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/image_5.jpg') }}" class="d-block w-100 img-fluid " style="width: 500px;height: 950px;background-repeat: no-repeat;
        background-attachment: fixed; background-position: center;  " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>  --}}
</div>
