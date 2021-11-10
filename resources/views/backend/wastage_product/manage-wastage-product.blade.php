@extends('backend.admin.master')

@section('title')
    ADMIN | Manage Wastage Product
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Manage Wastage Product</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Wastage Product</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3 class="mt-3 mb-3">Manage Wastage Product</h3>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table display table-bordered data-table bg-yellow text-nowrap datatable-pagination table-stripped">
                        <thead>
                        <tr>
                            <th class="text-white">SL No</th>
                            <th class="text-white">Image</th>
                            <th class="text-white">Title</th>
                            <th class="text-white">Description</th>
                            <th class="text-white">Price</th>
                            <th class="text-white">Measurement Unit</th>
                            <th class="text-white">Status</th>
                            <th class="text-white">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php($i=1)
                        @foreach($wastages as $wastage)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a target="_blank" href="{{ asset('assets/backend/images/wastage_product_images/'.$wastage->image) }}"><img src="{{ asset('assets/backend/images/wastage_product_images/'.$wastage->image) }}" alt="" height="60" width="60"></a></td>
                                <td>{{ $wastage->title }}</td>
                                <td>{{ $wastage->description }}</td>
                                <td>{{ $wastage->price }}</td>
                                <td>{{ $wastage->measurement_unit }}</td>
                                <td>
                                    @if ($wastage->status == 1? 'Active':'')
                                        <span class="btn btn-success btn-lg text-white">Active</span>
                                    @elseif ($wastage->status == 0? 'Inactive':'')
                                        <span class="btn btn-gradient-yellow btn-lg text-white">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('edit.wastage.product',['id'=> $wastage->id]) }}" class="btn btn-primary btn-lg">Edit</a>

                                    {{--                                    @if(Auth::guard('admin')->user()->admin_type==2)--}}
                                    <a href="#deleteModal{{$wastage->id}}" class="btn btn-danger btn-lg" data-toggle="modal">Delete</a>
                                    {{--                                    @endif--}}
                                    {{--                                            modal--}}

                                    <div class="modal fade" id="deleteModal{{$wastage->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('delete.wastage.product',['id'=>$wastage->id])}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-lg">Permanent delete</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary btn-lg" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

