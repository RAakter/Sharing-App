@extends('backend.admin.master')

@section('title')
    ADMIN | Add Wastage Product
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Add Wastage Product</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Wastage Product</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add Wastage Product</h3>
                    </div>
                </div>
                <hr>
                <h3 class="text-center text-success"></h3>

                <form action="{{ route('save.wastage.product') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Image <span style="color: red;"><b>*</b></span></label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Price (Taka)</label>
                            <input type="text" name="price" placeholder="For example: 200" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Measurement Unit</label>
                            <input type="text" name="measurement_unit" placeholder="For example: 2 kg" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Status <span style="color: red"><b>*</b></span></label>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultchecked" value="1" name="status" >
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

