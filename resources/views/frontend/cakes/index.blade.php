@extends('layouts.inc.front')
@section('title')
    {{ $category->name }}
@endsection
<style>
    .trending_tag {
        width: 90px;
        height: 30px;
        background-color: red;

    }

    *
    {
        font-family: 'Times New Roman', Times, serif;
        color:#2F4858;
    }
</style>

@section('content')
    {{--  second page of product   for  showing all the details page --}}


    <div class="container-fluid">

        <div class="card-shadow pro_data">

            <div class="card-body">
                <div class="row">
                    @foreach ($cakey as $cake)
                        <div class="col-md-4  border-right">
                           <div class="zoom-wrapper">


                            <img src="{{ asset('assets/uploads/category/' . $cake->image) }}" alt="fuky"
                              class="img-fluid" style="height:450px;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h2 class="mb-0" style="font-family:TimesNewRoman;color:#F78F06">
                                {{ $cake->cakename }}
                                @if ($cake->popular == '1')
                                    <label style="font-size:16px;" class="float-end  badge bg-danger trending_tag mt-2 p-2"> Trending
                                    </label>
                                @endif
                            </h2>
                            <hr>

                            <h3  style="color:black;font-family:TimesNewRoman;"> Original Price : <del> Rs{{ $cake->original_price }}</del></h3>
                            <h3  style="color:black;font-family:TimesNewRoman">
                            Selling Price : Rs{{ $cake->selling_price }}
                            </h3>
                            <br>
                            <label style="color:#2F4858;font-size:20px;font-family:TimesNewRoman"> Cake Flavour: {{ $cake->cakeflavour }}</label> <br>
                            <label style="color:#2F4858;font-size:20px;font-family:TimesNewRoman"> Cake Shape: {{ $cake->cakeshape }}</label><br>
                            <label style="color:#2F4858;font-size:20px;font-family:TimesNewRoman"> Cake Type: {{ $cake->cakeflavour }}</label>


                            <br>
                            <br>

                            <h6 style="color:#2F4858;font-family:'Times New Roman', Times, serif;font-size:18px;"> Available forall kgs</h6>
                            <hr>



                    {{--  @if ($category->quantity > 0)
                        <label class="badge bg-success"> In Stock</label>
                    @else
                        <label class="badge bg-danger"> Out of Stock</label>
                    @endif  --}}
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="{{ $cake->id }}" class="cakeid">
                            <label for="Quantity">Quantity</label>
                            <input type="number" class="form-control qty_input" id="input1" value="1">

                            {{--  <div class="input-group text-center mb-3" style="width:120px;">
                                <button class="input-group-text decrement-btn"> - </button>
                                <input type="text" name="quantity"class="form-control qty-input text-center" value="1" />
                                <button class="input-group-text increment-btn"> +</button>
                            </div>  --}}
                        </div>
                    </div>

                    @endforeach
                    <div class="col-md-9">
                        <br />



                            <button type="button" class="btn btn-success me-3  addtocartbtn float-start">Add To
                                Cart</button>

                        {{--  <label class="badge bg-danger"> Out Of Stock </label>  --}}


                        <a href="{{route('checkout')}}" class="btn" style="color:white;background-color:#895996;">Order Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {



            $('.addtocartbtn').click(function(e) {
                e.preventDefault();
                var c_id = $(this).closest('.pro_data').find('.cakeid').val();
                var c_y = $(this).closest('.pro_data').find('.qty_input').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });




                $.ajax({
                    method: "POST",
                    url: "/add-to-cart",
                    data: {
                        'cakeid': c_id,
                        'cakequantity': c_y,
                    },
                    success: function(response) {
                        swal(response.status);
                    }
                });
            });
        })
    </script>
@endsection
