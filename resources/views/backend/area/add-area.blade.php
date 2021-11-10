@extends('backend.admin.master')

@section('title')
    ADMIN | Add Area
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Add Area</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Area</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add Area</h3>
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
                <form action="{{ route('new-area') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Choose Division <span style="color: red"><b>*</b></span></label>
                            <select class="select2" name="division_id" id="division_id" onchange="getDistrict();" placeholder="Please Select Division">
                                <option value="">Please Select Division</option>
                                @foreach($divisions as $division)
                                    <option value={{$division->id}}>{{$division->division_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Choose District <span style="color: red"><b>*</b></span></label>
                            <select class="select2 district_id" name="district_id" placeholder="Please Select District">
                                <option selected disabled>---First select the division---</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Area title <span style="color: red"><b>*</b></span></label>
                            <input type="text" placeholder="" name="area_title" class="form-control">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Status <span style="color: red"><b>*</b></span></label>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultchecked" value="1" name="status">
                                <label class="custom-control-label" for="defaultchecked">Active</label>
                            </div>
                            <!-- Default checked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultUnChecked" value="0" name="status">
                                <label class="custom-control-label" for="defaultUnChecked">Inactive</label>
                            </div>
                        </div>

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-black btn-hover-bluedark">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



