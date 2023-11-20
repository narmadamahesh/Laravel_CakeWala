
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
        <h4> Category page </h4>


    </div>

    <div class="card-body mb-6">
        <table class="table table-bordered table-striped">
            <thead class="table table-bordered table-striped">
                <tr>
                    <th> ID </th>
                    <th> CAKENAME</th>
                    <th> Slug </th>
                    <th> Original Price</th>
                    <th> Selling Price</th>
                    <th> CAKEfLAVOUR </th>
                    <th> CAKESHAPE </th>
                    <th> WEIGHT </th>
                    <th> Cake type </th>
                    <th> IMAGE </th>
                    <th> QUANTITY </th>

                </tr>


            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td> {{ $item->id }}</td>

                    <td>{{ $item->cakename }} </td>
                    <td>{{ $item->slug }} </td>
                    <td>{{ $item->original_price }} </td>
                    <td>{{ $item->selling_price }} </td>


                    <td> {{ $item->cakeflavour }}</td>
                    <td>{{ $item->cakeshape }} </td>
                    <td> {{ $item->weight }}</td>
                    <td> {{ $item->caketype }}</td>


                    <td>

                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image"
                            alt="image here">
                    </td>
                    <td> {{ $item->quantity }}</td>
                    <td>

                        <a href="{{ url('edit-cake/'. $item->id) }}" class="btn" style="background-color: #F78F06"> Edit </a>
                        <a href="{{ url('delete-cake/' .$item->id) }}" class="btn btn-danger"> Delete </a>

                    </td>

                </tr>
                @endforeach



            </tbody>


        </table>

    </div>
</div>
@endsection
