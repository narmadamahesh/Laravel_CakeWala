@extends('layouts.inc.front')
@section('title')
   My Order
@endsection
@section('content')


<div class="container">
  <div class="row">
{{--   this is the page for showing the order details for user and usered login  --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                 <h4 class="text-white"> Order View </h4>
                    <a href="{{ url('my-orders')}}" class="btn float-end" style="color:white;background-color:#895996;"> Back </a>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 order-details">
                        <h4> Shipping Details </h4>
                        <label for=""> First Name </label>
                        <div class="border p-2"> {{ $orders->fname }}</div>
                        <label for=""> Last Name </label>
                        <div class="border p-2"> {{ $orders->lname }}</div>

                        <label for="">Email </label>
                        <div class="border p-2"> {{ $orders->email }}</div>


                        <label for=""> Contact Numbers </label>
                        <div class="border p-2"> {{ $orders->phone }}</div>


                        <label for="">Shipping Address</label>
                        <div class="border p-2">
                            {{ $orders->address1 }}
                            {{ $orders->address2 }}
                            {{ $orders->city }}
                            {{ $orders->state }}
                            {{ $orders->country}}

                        </div>
                        <label for=""> Zip Code  </label>
                        <div class="border p-2"> {{ $orders->pincode }}</div>

                    </div>

                    <div class="col-md-6 order-details p-2">
                        <h4> Order Details </h4>

                <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>    Cake id          </th>
                          <th>   Cakename     </th>
                          <th>    CakeShape      </th>
                          <th>      Cakequantity    </th>
                          <th>      CakeImage    </th>


                      </tr>
                    </thead>

                 <tbody>
                    @foreach ($orders->orderitems as $item)
                    <tr>
                        <td> {{ $item->cakeid}}</td>
                       <td> {{ $item->cake->cakename}}</td>

                       <td> {{ $item->cake->cakeshape}}</td>
                       <td> {{ $item->cakequantity}}</td>

                     <td>  <img src="{{ asset('assets/uploads/category/'.$item->cake->image) }}" class="sm-image"
                       alt="image here"></td>



                    </tr>
                    @endforeach
                 </tbody>
                  </table>
                    <h4>  Grand  Total :{{ $orders->totalprice }}</h4>
            </div>
                </div>
        </div>

    </div>
</div>

  </div>
</div>

@endsection
