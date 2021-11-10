@extends('backend.admin.master')

@section('title')
    ADMIN | Change Password
    @endsection
@section('body')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Profile</h3>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">Back</a>
            </li>
            <li> Change Password</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="card height-auto">
        <div class="card-body">
            <form action="{{ route('save.change.password') }}" method="POST" class="new-added-form">
                @csrf
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Current Password <span class="text-danger">*</span></label>
                        <input type="password" name="current_password" placeholder="" class="form-control">
                        <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>New Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" placeholder="" class="form-control">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="confirm_password" placeholder="" class="form-control">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

