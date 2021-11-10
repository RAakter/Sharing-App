@extends('backend.admin.master')

@section('title')
    ADMIN | Manage Area
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Manage Area</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Area</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3 class="mt-5 mb-5">Manage Area</h3>

                    </div>

                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table display table-bordered data-table bg-yellow text-nowrap datatable-pagination table-stripped">
                    <thead>
                        <tr>
                            <th class="text-white">SL No</th>
                            <th class="text-white">Division</th>
                            <th class="text-white">District</th>
                            <th class="text-white">Area</th>
                            <th class="text-white">Status</th>
                            <th class="text-white">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php($i=1)
                        @foreach($subs as $sub)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    @foreach($divisions as $division)
                                    @if($sub->division_id == $division->id)
                                        {{$division->division_title}}
                                        @endif
                                        @endforeach
                                </td>
                                <td>
                                    @foreach($districts as $district)
                                    @if($sub->district_id == $district->id)
                                        {{$district->district_title}}
                                        @endif
                                        @endforeach
                                </td>
                                <td>{{ $sub->area_title }}</td>
                                <td>
                                    @if ($sub->status == 1? 'Active':'')
                                        <span class="btn btn-success btn-lg text-white">Active</span>
                                    @elseif ($sub->status == 0? 'Inactive':'')
                                        <span class="btn btn-gradient-yellow btn-lg text-white">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('edit-area',['id'=> $sub->id]) }}" class="btn btn-primary btn-lg">Edit</a>

                                    {{--                                    @if(Auth::guard('admin')->user()->admin_type==2)--}}
                                    <a href="#deleteModal{{$sub->id}}" class="btn btn-danger btn-lg" data-toggle="modal">Delete</a>
                                    {{--                                    @endif--}}
                                    {{--                                            modal--}}

                                    <div class="modal fade" id="deleteModal{{$sub->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
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
                                                    <form action="{{route('delete-area',['id'=>$sub->id])}}" method="post">
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

