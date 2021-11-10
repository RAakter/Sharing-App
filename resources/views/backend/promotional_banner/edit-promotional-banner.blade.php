@extends('backend.admin.master')

@section('title')
    ADMIN | Edit Promotional Banner
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit Promotional Banner</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Promotional Banner</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Promotional Banner</h3>
                    </div>
                </div>
                <hr>
                <h3 class="text-center text-success"></h3>

                <form action="{{ route('update.promotional.banner') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Image <span style="color: red"><b>*</b></span></label>
                            <input type="file" name="image" class="form-control-file">
                            <br>
                            <img src="{{ asset('assets/backend/images/promotional_banner_images/'.$banner->image) }}" alt="" height="100" width="120">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$banner->title}}" class="form-control">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                        </div>


                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control">{{$banner->description}}</textarea>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Status <span style="color: red"><b>*</b></span></label>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultchecked" {{ $banner->status == 1? 'checked' :'' }} value="1" name="status" >
                                <label class="custom-control-label" for="defaultchecked">Active</label>
                            </div>
                            <!-- Default checked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultUnChecked" {{ $banner->status == 0? 'checked' :'' }} value="0" name="status">
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

