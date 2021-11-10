@extends('backend.admin.master')

@section('title')
    ADMIN | Add Shipping
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Shipping Start Here -->
        <div class="breadcrumbs-area">
            <h3>Add Shipping</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Shipping</li>
            </ul>
        </div>
        <!-- Breadcubs Shipping End Here -->
        <!-- Admit Form Shipping Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add Shipping</h3>
                    </div>
                </div>
                <hr>
                <h3 class="text-center text-success"></h3>

                <form action="{{ route('new-shipping') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Name <span style="color: red"><b>*</b></span></label>
                            <input type="text" placeholder="" name="name" class="form-control">
                        </div>

                        <div class="col-xl-12 col-lg-12 col-12 form-group">
                            <label>Price <span style="color: red"><b>*</b></span></label>
                            <input type="number" oninput="this.value = Math.abs(this.value)" min="0" step="0.01" name="price" class="form-control">
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



