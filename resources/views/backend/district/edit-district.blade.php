@extends('backend.admin.master')

@section('title')
    ADMIN | Edit District
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit District</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>District</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit District</h3>
                    </div>
                </div>
                <hr>
                <h3 class="text-center text-success"></h3>
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if(session('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                        {{ session('success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
                <form action="{{ route('update-district') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Choose Division <span style="color: red"><b>*</b></span></label>
                            <select class="select2" name="division_id" placeholder="Please Select District">
                                <option value="">Please Select Division</option>
                                @foreach($divisions as $division)
                                    <option value={{$division->id}} {{$district->division_id == $division->id ? 'selected':''}}>{{$division->division_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Title <span style="color: red"><b>*</b></span></label>
                            <input type="text" placeholder="" name="district_title" value="{{$district->district_title}}" class="form-control">
                            <input type="hidden" name="id" value="{{ $district->id }}" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Status <span style="color: red"><b>*</b></span></label>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultchecked" {{ $district->district_status == 1? 'checked' :'' }} value="1" name="district_status" >
                                <label class="custom-control-label" for="defaultchecked">Active</label>
                            </div>
                            <!-- Default checked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultUnChecked" {{ $district->district_status == 0? 'checked' :'' }} value="0" name="district_status">
                                <label class="custom-control-label" for="defaultUnChecked">Inactive</label>
                            </div>
                        </div>

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-black btn-hover-bluedark">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

