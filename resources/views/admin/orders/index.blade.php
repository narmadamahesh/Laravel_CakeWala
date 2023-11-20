@extends('layouts.admin')


@section('title')
  Order
@endsection
@section('content')


<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="cardheader" style="background-color: #895996">

            <h4 class="text-white">
                  New Orders
                  <a href="{{ 'orderhistory' }}" class="btn btn-warning float-end"> Order History </a>
            </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Order Date </th>
                                <th> Tracking Number </th>
                                <th> Total price </th>
                                <th> Status of product </th>
                                <th> Action </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td> {{ date('d-m-Y',strtotime($item->created_at)) }}</td>
                                    <td> {{ $item->tracking_no }}</td>
                                    <td> {{ $item->totalprice }}</td>
                                    <td> {{ $item->status == '0' ? 'pending' : 'completed' }}</td>

                                    <td>
                                        <a href="{{ url('admin/vieworders/' . $item->id) }}" class="btn" style="color:white;background-color:#895996;"> View </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>


                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
