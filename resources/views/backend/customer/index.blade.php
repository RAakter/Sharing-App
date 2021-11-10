@extends('backend.admin.master')

@section('title')
    ADMIN | Customer List
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Customer List</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Customer List</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3 class="mt-3 mb-3">Customer List</h3>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table display bg-dark table-bordered data-table text-nowrap datatable-pagination table-stripped">
                        <thead>
                        <tr>
                            <th class="text-white">ID</th>
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
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{ $customer->name ?? '' }}</td>
                                <td>{{ $customer->email ?? '' }}</td>
                                <td>{{ $customer->phone ?? '' }}</td>
                                <td>
                                    @if($customer->image != '')
                                    <a target="_blank" href="{{ asset('assets/backend/images/user_images/'.$customer->image) }}"><img src="{{ asset('assets/backend/images/user_images/'.$customer->image) }}" alt="" height="auto" width="50"></a>
                                    @endif
                                </td>
                                <td>{{ $customer->divisionName->division_title ?? '' }}</td>
                                <td>{{ $customer->districtName->district_title ?? '' }}</td>
                                <td>{{ $customer->areaName->area_title ?? '' }}</td>
                                <td>{{ $customer->created_at->diffForHumans() }}</td>
                                <td>{{ $customer->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

