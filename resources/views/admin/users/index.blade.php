<script src="{{ asset('frontend/css/light-bootstrap-dashboard.css') }}" defer></script>
<link rel="stylesheet" href="custom.css">
<style>
    .cate-image {
        max-width: 200px;
    }
</style>
@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4> Registered Users </h4>


        </div>

        <div class="card-body mb-6">
            <table class="table table-bordered table-striped">
              <thead class="table table-bordered table-striped">
                    <tr>
                        <th> ID </th>
                        <th> NAME</th>
                        <th> Email </th>
                        <th> Phone</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                      <tr>
                            <td> {{ $item->id }}</td>

                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }} </td>


                            <td>
                                <a href="{{ url('viewusers/' . $item->id) }}" class="btn" style="color:white;background-color:#895996;"> view </a>

                            </td>

                        </tr>
                    @endforeach



                </tbody>


            </table>

        </div>
    </div>
@endsection
