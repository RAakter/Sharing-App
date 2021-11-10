@extends('backend.admin.master')

@section('title')
    ADMIN | Deals Product Order List
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Deals Product Order List</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Deals Product Order List</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3 class="mt-3 mb-3">Deals Product Order List</h3>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table display bg-dark table-bordered data-table text-nowrap datatable-pagination table-stripped">
                        <thead>
                        <tr>
                            <th class="text-white">Order ID</th>
                            <th class="text-white">Name</th>
                            <th class="text-white">Email</th>
                            <th class="text-white">Phone</th>
                            <th class="text-white">Image</th>
                            <th class="text-white">Division</th>
                            <th class="text-white">District</th>
                            <th class="text-white">Area</th>
                            <th class="text-white">Created At</th>
                            <th class="text-white">Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->order_id}}</td>
                                <td>{{ $order->customer_id }}</td>
                                <td>{{ $order->product_id }}</td>
                                <td>{{ $order->qty }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->discount_price }}</td>
                                <td>{{ $order->subtotal }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->shipping_id }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->payment_status }}</td>

                                <td>{{ $order->created_at->diffForHumans() }}</td>
                                <td>{{ $order->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

