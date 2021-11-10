@extends('backend.admin.master')

@section('title')
    ADMIN | Edit Product Deal
@endsection

@section('content')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit Product Deal</h3>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Product Deal</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Product Deal</h3>
                    </div>
                </div>
                <hr>
                <h3 class="text-center text-success"></h3>

                <form action="{{ route('update.deal.product') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12 form-group">
                            <label class="text-dark-medium">Image <span style="color: red"><b>*</b></span></label>
                            <input type="file" name="image" class="form-control-file">
                            <br>
                            <img src="{{ asset('assets/backend/images/product_deal_images/'.$deal->image) }}" alt="" height="100" width="100">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$deal->title}}" class="form-control">
                            <input type="hidden" name="id" value="{{$deal->id}}">
                        </div>


                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control">{{$deal->description}}</textarea>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Price (Taka)</label>
                            <input type="text" name="price" value="{{$deal->price}}" placeholder="For example: 550" class="form-control">
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Discount</label>
                                    <input type="text" name="discount" value="{{$deal->discount}}" placeholder="For example: 10" class="form-control">
                                </div>

                                <div class="col">
                                    <label>Discount Type</label>
                                    <select class="select2" name="discount_type">
                                        <option value="%"{{$deal->discount_type=='%' ? 'selected':''}}>%</option>
                                        <option value="TK"{{$deal->discount_type=='TK' ? 'selected':''}}>TK</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>Status <span style="color: red"><b>*</b></span></label>
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultchecked" {{ $deal->status == 1? 'checked' :'' }} value="1" name="status" >
                                <label class="custom-control-label" for="defaultchecked">Active</label>
                            </div>
                            <!-- Default checked -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultUnChecked" {{ $deal->status == 0? 'checked' :'' }} value="0" name="status">
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

