@extends('layouts.inc.front')
@section('title')
    cart page
@endsection
@section('content')
    <div class="container my-5">
        <div class="card shadow ">
            @if($cartitems->count()>0)
            <div class="card-body">
{{--   this is the page for Add to  Cart Page   --}}h
                @php $total=0; @endphp
                @foreach ($cartitems as $item)
                <div class="row pro_data">

                        <div class="col-md-2 my-auto">

                            <img src="{{ asset('assets/uploads/category/' . $item->cakes->image) }}" alt="image here"
                                height="120px" width="120px">

                        </div>

                        <div class="col-md-3 my-auto">

                            <h3> {{ $item->cakes->cakename }} </h3>
                        </div>

                        <div class="col-md-2 my-auto">

                            <h3> Rs. {{ $item->cakes->selling_price }} </h3>
                        </div>

                        <div class="col-md-3 my-auto">

                            <input type="hidden" class="cakeid" value="{{ $item->cakeid }}">

                            @if ($item->cakes->cakequantity >= $item->cakequantity)
                            <label for="Quantity">Quantity</label>

                            @else
                            <input type="number" class="form-control qty_input text-center"
                            id="input1" value="{{ $item->cakequantity }}"/>






                        @endif
{{--  {{ $item->cakes->selling_price }} q  {{  $item->cakequantity  }} <br>  --}}


                 @php $total +=  str_replace("₹", "", $item->cakes->selling_price) *  $item->cakequantity; @endphp






                    <div class="col-md-3 ms-auto mt-5 ">
                        <button class="btn btn-danger delete-cart-item">
                           <img src="/images/dele.png" alt="" style="width:60px;height:60px;"> Remove </button>
                    </div>




                    <div class="col-md-3 ms-auto mt-5">
                        <button class="btn btn-success changequantity">  <img src="/images/upda.png" alt="" style="width:60px;height:60px;">  update Cart
                        </button>
                    </div>

                </div>

                </div>


                @endforeach


                <div class="card-footer mt-5 ">

                    <h6 style="color:green;font-size:40px;"> Total Price : {{ $total }}</h6>

                    <a href="{{ url('checkout') }}"class="btn btn-success"> <img src="/images/propay.png" alt="" style="width:60px;height:60px;"> Proceed
                        to checkout </a>


                </div>
                @else
                     <div class="cardbody mt-5 p-2">
                         <h2> Your Cart is empty
                            <img src="/images/empty.png" alt="cart is here ">
                         </h2>
                      <a href="{{ url('/') }}" style="color:white;background-color:#895996;" class="btn float-end mt-5 p-2"><img src="/images/cont.png" alt=""> Continue Shopping </a>

                     </div>
              @endif
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function() {



            $('.delete-cart-item').click(function(e) {
                e.preventDefault();
                var c_id = $(this).closest('.pro_data').find('.cakeid').val();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });




                $.ajax({
                    method: "POST",
                    url: "delete-cart-item",
                    data: {
                        'cakeid': c_id,

                    },
                    success: function(response) {
                        window.location.reload();
                        swal("", response.status, "success");
                    }
                });
            });



            $('.changequantity').click(function(e) {
                e.preventDefault();
                var c_id = $(this).closest('.pro_data').find('.cakeid').val();
                var c_qty = $(this).closest('.pro_data').find('.qty_input').val();
                data = {
                    'cakeid': c_id,
                    'cakequantity': c_qty,
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });




                $.ajax({
                    method: "POST",
                    url: "update-cart",
                    data: data,
                    success: function(response) {
                        window.location.reload();
                        swal("", response.status, "success");
                    }
                });
            });






        })
    </script>
@endsection
