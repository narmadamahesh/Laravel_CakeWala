@extends('layouts.inc.front')
@section('title')
    My Order
@endsection
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> My Orders</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>


                                <th> Tracking Number </th>
                                    <th> Total price </th>

                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>

                                        <td> {{ $item->tracking_no }}</td>
                                        <td> {{ $item->totalprice }}</td>
                                     <td> {{ $item->status == '0' ? 'pending' : 'completed' }}</td>

                                        <td>
                                            <a href="{{ url('vieworders/' . $item->id) }}" class="btn" style="color:white;background-color:#895996;"> View </a>
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
