@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 Add NEW CAKE></h1>
        </div>



        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cakename"> cake name </label>
                        <input type="text" class="form-control" name="cakename">

                        <span>
                            @error('cakename')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug"> slug </label>
                        <input type="text" class="form-control" name="slug">
                        <span>
                            @error('slug')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="original_priceprice"> Original Price</label>
                        <input type="text" class="form-control" name="original_price">
                        <span>
                            @error('original_price')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="selling_price">  Selling Price</label>
                        <input type="text" class="form-control" name="selling_price">

                        <span>
                            @error('selling_price')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cakeflavour"> Cake Flavour </label>
                        <input type="text" class="form-control" name="cakeflavour">

                        <span>
                            @error('cakeflavour')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="cakeshape"> cakeshape </label>
                        <select id="cakeshape" name="cakeshape">
                            <option value="heart"> Heart </option>
                            <option value="round"> Round</option>
                            <option value="doubleducker"> DoubleDucker</option>
                        </select>

                        <span>
                            @error('cakeshape')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="weight"> weight</label>
                        <select id="weight" name="weight">
                            <option value="0.5"> 0.5kg </option>
                            <option value="1"> 1kg</option>
                            <option value="1.5"> 1.5kg</option>
                            <option value="2"> 2kg</option>
                            <option value="2.5"> 2.5kg</option>
                            <option value="3"> 3kg</option>
                            <option value="3.5"> 3.5kg</option>
                            <option value="4"> 4 kg</option>
                            <option value="4.5"> 4.5kg </option>
                            <option value="5">5kg </option>
                        </select>

                        <span>
                            @error('weight')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="caketype"> Cake Type </label>
                        <select id="caketype" name="caketype">
                            <option value="eggless"> Eggless </option>
                            <option value="egg">  Eggs </option>
                        </select>
                        <span>
                            @error('caketype')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="image"> image </label>
                        <input type="file" name="image" class="form-control">
                        <span>
                            @error('image')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ordinary"> Ordinary</label>
                        <input type="checkbox" name="status">

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular </label>
                        <input type="checkbox" name="popular">


                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="quantity"> Quantity </label>
                        <input type="text" class="form-control" name="quantity">
                        <span>
                            @error('quantity')
                              <p style="color:red;font-size:20px;"> {{ $message }} </p>
                            @enderror

                        </span>

                    </div>

                    <div class="col-md-12 mb-3">

                        <button type="submit" class="btn" style="background-color: #F78F06"> Submit </button>


                    </div>





                </div>

            </form>



        </div>
    </div>
@endsection
