<script src="{{ asset('frontend/css/light-bootstrap-dashboard.css') }}" defer></script>
<link rel="stylesheet" href="custom.css">
<style>
    .cate-image {
        max-width: 200px;
    }
</style>
@extends('layouts.admin')

@section('content')
   <div class="container">

   <div class="row">

     <div class="col-md-12">


    <div class="card">
      <div class="card-header">
         <h4> User details </h4>
        <a href="{{ url('users')}}" class="btn float-end" style="color:white;background-color:#895996;"> Back </a>
       <div class="card-body">
      <div class="row">


        <div class="col-md-4">
           <label for=""> First Name</label>
           <p class="text-black"> {{ $users->name }}</p>
        </div>

        <div class="col-md-4">
            <label for=""> Last Name</label>
            <p class="text-black"> {{ $users->lname }}</p>
         </div>

         <div class="col-md-4">
            <label for=""> Email </label>
            <p class="text-black"> {{ $users->email }}</p>
         </div>

         <div class="col-md-4">
            <label for=""> Phone </label>
            <p class="text-black"> {{ $users->phone }}</p>
         </div>

         <div class="col-md-4">
            <label for=""> Address 1</label>
            <p class="text-black"> {{ $users->address1 }}</p>
         </div>

         <div class="col-md-4">
            <label for=""> Address2</label>
            <p class="text-black"> {{ $users->address2}}</p>
         </div>

         <div class="col-md-4">
            <label for=""> City</label>
            <p class="text-black"> {{ $users->city}}</p>
         </div>

         <div class="col-md-4">
            <label for=""> State</label>
            <p class="text-black"> {{ $users->state}}</p>
         </div>
         <div class="col-md-4">
            <label for="">  Pincode </label>
            <p class="text-black"> {{ $users->pincode}}</p>
         </div>
         <div class="col-md-4">
            <label for=""> Role </label>
            <p class="text-black"> {{ $users->role_as == '0' ? 'User' : 'Admin' }} </p>

         </div>
       </div>


       </div>
      </div>

   </div>


@endsection
