


<script src="{{ asset('frontend/css/light-bootstrap-dashboard.css') }}" defer></script>
<link rel="stylesheet" href="custom.css">
<style>

    .cate-image
{
    max-width: 200px;
}
  </style>
 @extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h1> Edit /Update Cake </h1>
    </div>
    <div class="card-body">
        <form action="{{ url('update-cake/' . $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cakename"> Cake Name </label>
                    <input type="text" value="{{ $category->cakename }}" class="form-control" name="cakename">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="slug">  Slug</label>
                    <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">


                </div>
                <div class="col-md-6 mb-3">
                    <label for="original_price">  Original Price</label>
                    <input type="text" value="{{ $category->original_price }}" class="form-control" name="original_price">


                </div>

                <div class="col-md-6 mb-3">
                    <label for="selling_price">  Selling Price</label>
                    <input type="text" value="{{ $category->selling_price }}" class="form-control" name="selling_price">


                </div>

                <div class="col-md-6 mb-3">
                    <label for="cakeflavour"> Cake Flavour </label>
                    <input type="text" value="{{ $category->cakeflavour }}" class="form-control" name="cakeflavour">


                </div>


                <div class="col-md-6 mb-3">
                    <label for="cakeshape"> Cake Shape </label>
                    <select id="cakeshape"name="cakeshape">
                        <option value="heart"> heart</option>
                        <option value="round"> Round</option>
                        <option value="doubleducker"> Doubleducker</option>


                    </select>


                </div>

                <div class="col-md-6 mb-3">

                    <label for="weight"> weight</label>
                    <select id="weight" name="weight">
                        <option value="0.5"> 0.5kg </option>
                            <option value="1kg"> 1kg</option>
                            <option value="1.5"> 1.5kg</option>
                            <option value="2kg"> 2kg</option>
                            <option value="2.5kg"> 2.5kg</option>
                            <option value="3kg"> 3kg</option>
                            <option value="3.5kg"> 3.5kg</option>
                            <option value="4kg"> 4 kg</option>
                            <option value="4.5kg"> 4.5kg </option>
                            <option value="5kg">5kg </option>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="caketype"> CakeType </label>
                    <select id="caketype" name="caketype">
                        <option value="egg"> egg </option>
                        <option value="eggless"> eggless </option>


                    </select>

                </div>



            </div>
            @if ($category->image)
            <img src="{{ asset('assets/uploads/category/' . $category->image) }}" class="cate-image" alt="image here">
            @endif
            <div class="col-md-6 mb-3">
                <label for="image"> image </label>
                <input type="file" value="{{ $category->image }}" name="image" class="form-control">


            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Status</label>
                <input type="checkbox" name="status" value="{{ $category->status}}">




            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Popular </label>
                <input type="checkbox" name="popular" value="{{ $category->popular}}">




            </div>
            <div class="col-md-6 mb-3">
                <label for="quantity">  Quantity</label>
                <input type="text" value="{{ $category->quantity }}" class="form-control" name="quantity">

            </div>

            <div class="col-md-12 mb-3">

                <button type="submit" class="btn" style="background-color: #F78F06"> Submit </button>


            </div>





    </div>

    </form>



</div>
</div>
@endsection
