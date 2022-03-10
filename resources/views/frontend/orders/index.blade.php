@extends('layouts.front')

@section('title')
        My Orders
@endsection

@section('content')
<div class="container-fluid con2 py-5">
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My orders</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tracking Number</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <body>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->tracking_no}}</td>
                                        <td>{{ $item->total_price}}</td>
                                        <td>{{ $item->status == '0' ? 'pending':'completed'}}</td>
                                        <td>
                                            <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </body>
                        </table>                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection