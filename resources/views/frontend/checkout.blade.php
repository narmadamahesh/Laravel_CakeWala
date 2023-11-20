@extends('layouts.inc.front')
@section('title')
    Check out page
@endsection

  @section('content')

{{--
     this is the page for entering the payment details for the user  --}}

        <form action="{{ url('placeorder') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">

                    <div class="card p-3 ">
                        <div class="card-body p-3">

                            <h6 style="font-size: 30px;"> PayMent Details </h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fname"> first Name </label>
                                    <input type="text" class="form-control" name="fname"
                                        placeholder="Enter your First name">
                                    <span>
                                        @error('fname')
                                          <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                        @enderror

                                    </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="lname"> Last Name </label>
                                    <input type="text" class="form-control" name="lname"
                                        placeholder="Enter your Last name">

                                        <span>
                                            @error('lname')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="email"> Email </label>
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter your Email-id">

                                        <span>
                                            @error('email')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone">Phone Number </label>
                                    <input type="text" minlength="10" maxlength="10 " name="phone" class="form-control"
                                        placeholder="Enter your Phone Number">
                                        <span>
                                            @error('phone')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="address1"> Address 1 </label>
                                    <input type="text" class="form-control" name="address1"
                                        placeholder="Enter your Address 1">
                                        <span>
                                            @error('address1')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="address2"> Address 2 </label>
                                    <input type="text" class="form-control" name="address2"
                                        placeholder="Enter your Address 2">
                                        <span>
                                            @error('address2')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="city"> City </label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your City">
                                    <span>
                                        @error('city')
                                          <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                        @enderror

                                    </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="state"> state </label>
                                    <input type="text" class="form-control" name="state"
                                        placeholder="Enter your State">

                                        <span>
                                            @error('state')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>

                                <div class="col-md-6">
                                    <label for="pincode"> Pin code </label>
                                    <input type="text" class="form-control"name="pincode"
                                        placeholder="Enter your Pincode ">

                                        <span>
                                            @error('pincode')
                                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                                            @enderror

                                        </span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-5">


                    <div class="card">

                        <div class="card-body">
                            <h6> Order Details </h6>
                            <hr>
                            <table class="table">
                                <tbody>


                                    @foreach ($cartitems as $items)
                                        <tr>


                                            <td> {{ $items->cakes->cakename }} </td>
                                            <td> {{ $items->cakequantity }} </td>
                                            <td> {{ $items->cakes->selling_price }} </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <hr>

                            <button type="submit" style="color:white;background-color:#895996;" class="btn"> <img src="/images/cod.png" alt="">  Place Order with cod  </button>
                            <br/>
                            <br><br>

{{--
                            <button type="submit" class="btn btn-primary razor-btn"> pay with razor pay </button>  --}}


                        </div>
                    </div>
                </div>



            </div>
        </form>



  <div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 col-md-offset-6">

                    @if($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Error!</strong> {{ $message }}
                        </div>
                    @endif

                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>Success!</strong> {{ $message }}
                        </div>
                    @endif

                    <div class="card card-default" style="border: 1px solid black;">
                        <div class="card-header" style="color:white;background-color:#895996;">
                            <p style="color:white;font-size:18px;font-weight:700;">    <img src="/images/paywithcard.png" alt=""> Pay With Razor Pay </p>
                        </div>

                        <div class="card-body text-center">
                            <form action="{{ route('razorpay.payment.store') }}" method="POST" >
                                @csrf
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ env('RAZORPAY_KEY') }}"
                                        data-amount="1000"
                                        data-buttontext="Pay Now"
                                        data-name="Cakewala.com"
                                        data-description="Rozerpay"
                                        data-image="images/iconbir.png"
                                        data-prefill.name="name"
                                        data-prefill.email="email"
                                        data-theme.color="#895996">

                                </script>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
  </div>
    @endsection


@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    $(document).ready(function() {



        $('.razor-btn').click(function(e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                method: "POST",
                url: "/proceed-to-pay",
                success: function(response) {


var options = {
    "key": "rzp_test_mVsNogw0q3k5pn", // Enter the Key ID generated from the Dashboard
    "amount": response.total_price, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Cakewala", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "cakewala", //your customer's name
        "email": response.email,
        "contact": response.phone
    },

    "theme": {
        "color": "#895996"
    }
};
var rzp1 = new Razorpay(options);
{
    rzp1.open();
    e.preventDefault();
}
                }
            });
        });
    })
@endsection
