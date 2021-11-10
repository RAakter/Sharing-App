@extends('backend.admin.master')

@section('title')
    ADMIN | Manage Product Deal
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Manage Product Deal</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Product Deal</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3 class="mt-3 mb-3">Manage Product Deal</h3>
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
                            <th class="text-white">Discount</th>
                            <th class="text-white">Discount Amount</th>
                            <th class="text-white">Price After Discount</th>
                            <th class="text-white">Status</th>
                            <th class="text-white">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php($i=1)
                        @foreach($deals as $deal)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a target="_blank" href="{{ asset('assets/backend/images/product_deal_images/'.$deal->image) }}"><img src="{{ asset('assets/backend/images/product_deal_images/'.$deal->image) }}" alt="" height="100" width="120"></a></td>
                                <td>{{ $deal->title }}</td>
                                <td>{{ $deal->description }}</td>
                                <td>TK. {{ $deal->price }} </td>
                                <td>{{ $deal->discount.$deal->discount_type }}</td>
                                <td>TK. {{ $deal->discount_amount }}</td>
                                <td>TK. {{ $deal->price - $deal->discount_amount }}</td>
                                <td>
                                    @if ($deal->status == 1? 'Active':'')
                                        <span class="btn btn-success btn-lg text-white">Active</span>
                                    @elseif ($deal->status == 0? 'Inactive':'')
                                        <span class="btn btn-gradient-yellow btn-lg text-white">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('edit.deal.product',['id'=> $deal->id]) }}" class="btn btn-primary btn-lg">Edit</a>

                                    {{--                                    @if(Auth::guard('admin')->user()->admin_type==2)--}}
                                    <a href="#deleteModal{{$deal->id}}" class="btn btn-danger btn-lg" data-toggle="modal">Delete</a>
                                    {{--                                    @endif--}}
                                    {{--                                            modal--}}

                                    <div class="modal fade" id="deleteModal{{$deal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
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
                                                    <form action="{{route('delete.deal.product',['id'=>$deal->id])}}" method="post">
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

