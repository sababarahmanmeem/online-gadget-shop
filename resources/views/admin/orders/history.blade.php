@extends('layouts.admin')

@section('title')
    Orders
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-h">
                        <h4>Completed Requests</h4>
                        <a href="{{url('orders')}}" class="btn btn-warning float-right">New Requests</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Request Date</th>
                                    <th>Tracking Number</th>
                                    <th>Total Cost</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ date('d-m-y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->track_no }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->o_status == "0"? 'pending': 'completed' }}</td>
                                        <td>
                                            <a href="{{ url('orders/view-order/'.$item->id) }}" class="btn btn-primary">view</a>
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
