<div class="sidebar-main sidebar-menu-one sidebar-expand-md text-white" style="background-color: black">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/backend/img/logo.jpg') }}" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">

{{--            @if(Auth::user()->type == 1)--}}
            <li class="nav-item ">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                    class="fa fa-home"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="fa fa-clipboard-list"></i><span>Division</span></a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/division/add-division') style="display: block"
                    @elseif(request()->path() == 'admin/division/manage-division') style="display: block"
                    @endif>
                    <li class="nav-item">
                        <a href="{{ route('add-division') }}" class="nav-link @if(request()->path() == 'admin/division/add-division') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Add Division</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manage-division') }}" class="nav-link @if(request()->path() == 'admin/division/manage-division') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Manage Division</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="fa fa-th-list"></i><span>District</span></a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/district/add-district') style="display: block"
                    @elseif(request()->path() == 'admin/district/manage-district') style="display: block"
                    @endif>
                    <li class="nav-item">
                        <a href="{{ route('add-district') }}" class="nav-link @if(request()->path() == 'admin/district/add-district') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Add District</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manage-district') }}" class="nav-link @if(request()->path() == 'admin/district/manage-district') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Manage District</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="fa fa-list"></i><span>Area</span></a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/area/add-area') style="display: block"
                    @elseif(request()->path() == 'admin/area/manage-area') style="display: block"
                    @endif>
                    <li class="nav-item">
                        <a href="{{ route('add-area') }}" class="nav-link @if(request()->path() == 'admin/area/add-area') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Add Area</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manage-area') }}" class="nav-link @if(request()->path() == 'admin/area/manage-area') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Manage Area</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-sliders-h"></i><span>Promotional Banner</span>
                </a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/add/promotional/banner') style="display: block;"
                    @elseif(request()->path() == 'admin/manage/promotional/banner') style="display: block;"
                    @endif>

                    <li class="nav-item">
                        <a href="{{ route('add.promotional.banner') }}" class="nav-link text-white @if(request()->path() == 'admin/add/promotional/banner') bg-primary @endif"><i class="fas fa-angle-right"></i>Add Promotional Banner</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manage.promotional.banner') }}" class="nav-link text-white @if(request()->path() == 'admin/manage/promotional/banner') bg-primary @endif"><i class="fas fa-angle-right"></i>Manage Promotional Banner</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-sliders-h"></i><span>Deals Product</span>
                </a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/add/deal/product') style="display: block;"
                    @elseif(request()->path() == 'admin/manage/deal/product') style="display: block;"
                    @endif>

                    <li class="nav-item">
                        <a href="{{route('add.deal.product')}}" class="nav-link text-white @if(request()->path() == 'admin/add/deal/product') bg-primary @endif"><i class="fas fa-angle-right"></i>Add Deals Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('manage.deal.product')}}" class="nav-link text-white @if(request()->path() == 'admin/manage/deal/product') bg-primary @endif"><i class="fas fa-angle-right"></i>Manage Deals Product</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-sliders-h"></i><span>Wastage Product</span>
                </a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/add/wastage/product') style="display: block;"
                    @elseif(request()->path() == 'admin/manage/wastage/product') style="display: block;"
                    @endif>

                    <li class="nav-item">
                        <a href="{{route('add.wastage.product')}}" class="nav-link text-white  @if(request()->path() == 'admin/add/wastage/product') bg-primary @endif"><i class="fas fa-angle-right"></i>Add Wastage Product</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('manage.wastage.product')}}" class="nav-link text-white  @if(request()->path() == 'admin/manage/wastage/product') bg-primary @endif"><i class="fas fa-angle-right"></i>Manage Wastage Product</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="fa fa-list"></i><span>Shipping</span></a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/shipping/add-shipping') style="display: block"
                    @elseif(request()->path() == 'admin/shipping/manage-shipping') style="display: block"
                    @endif>
                    <li class="nav-item">
                        <a href="{{ route('add-shipping') }}" class="nav-link @if(request()->path() == 'admin/shipping/add-shipping') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Add Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manage-shipping') }}" class="nav-link @if(request()->path() == 'admin/shipping/manage-shipping') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Manage Shipping</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('customer-list')}}" class="nav-link"><i
                        class="fa fa-list"></i><span>Customer List</span></a>
            </li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="fa fa-list"></i><span>Orders</span></a>
                <ul class="nav sub-group-menu"
                    @if(request()->path() == 'admin/deals-product-order-list') style="display: block"
                    @elseif(request()->path() == 'admin/wastage-product-order-list') style="display: block"
                    @endif>
                    <li class="nav-item">
                        <a href="{{ route('deals-product-order-list') }}" class="nav-link @if(request()->path() == 'admin/deals-product-order-list') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Deals Product Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('wastage-product-order-list') }}" class="nav-link @if(request()->path() == 'admin/wastage-product-order-list') bg-primary @endif"><i
                                class="fas fa-angle-right"></i>Wastage Product Orders</a>
                    </li>
                </ul>
            </li>

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-search-location"></i><span>Location & Designation</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/location') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/location/area') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/hospital') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/hospital/time/slot') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/doctor/designation') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/medical/designation') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.location') }}" class="nav-link  @if(request()->path() == 'admin/add/location') bg-success @endif"><i class="fas fa-location-arrow"></i>Add Location</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.location.area') }}" class="nav-link  @if(request()->path() == 'admin/add/location/area') bg-success @endif"><i class="fas fa-search-location"></i>Add Location Area</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.hospital') }}" class="nav-link  @if(request()->path() == 'admin/add/hospital') bg-success @endif"><i class="fas fa-hospital"></i>Add Hospital</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.hospital.time.slot') }}" class="nav-link  @if(request()->path() == 'admin/add/hospital/time/slot') bg-success @endif"><i class="fas fa-times-circle"></i>Add Time Slot</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.doctor.designation') }}" class="nav-link  @if(request()->path() == 'admin/add/doctor/designation') bg-success @endif"><i class="fas fa-mandalorian"></i>Add Specialist (Designation)</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.medical.designation') }}" class="nav-link  @if(request()->path() == 'admin/add/medical/designation') bg-success @endif"><i class="fas fa-mandalorian"></i>Add Designation (Medical)</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-home"></i><span>Doctor Home Page</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/doctor/add/banner') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/doctor/add/section') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/doctor/add/feature') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.add.banner') }}" class="nav-link  @if(request()->path() == 'admin/doctor/add/banner') bg-success @endif"><i class="fa fa-flag"></i>Add Banner</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.add.section') }}" class="nav-link  @if(request()->path() == 'admin/doctor/add/section') bg-success @endif"><i class="fa fa-list-alt"></i>Add Section</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.add.feature') }}" class="nav-link  @if(request()->path() == 'admin/doctor/add/feature') bg-success @endif"><i class="fa fa-feather-alt"></i>Add Feature</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-list-alt"></i><span>Medicine Order </span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/show/order') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/order/product') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/dynamic_pdf') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/invoice/order') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/order/history') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/delivered/history') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/return/history') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/cancel/history') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.order') }}" class="nav-link  @if(request()->path() == 'admin/show/order') bg-success @endif"><i class="fas fa-angle-right"></i>Pending Order</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('order.product') }}" class="nav-link  @if(request()->path() == 'admin/order/product') bg-success @endif"><i class="fas fa-angle-right"></i>Order Product</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('invoice.order') }}" class="nav-link  @if(request()->path() == 'admin/invoice/order') bg-success @endif"><i class="fas fa-angle-right"></i>Order Invoice List</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a target="_blank" href="{{ route('convert.pdf') }}" class="nav-link  @if(request()->path() == 'admin/dynamic_pdf') bg-success @endif"><i class="fas fa-angle-right"></i>Order Invoice (Print)</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('order.history') }}" class="nav-link  @if(request()->path() == 'admin/order/history') bg-success @endif"><i class="fas fa-angle-right"></i>Order History</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('delivered.history') }}" class="nav-link  @if(request()->path() == 'admin/delivered/history') bg-success @endif"><i class="fas fa-angle-right"></i>Delivered History</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('return.history') }}" class="nav-link  @if(request()->path() == 'admin/return/history') bg-success @endif"><i class="fas fa-angle-right"></i>Return History</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('cancel.history') }}" class="nav-link  @if(request()->path() == 'admin/cancel/history') bg-success @endif"><i class="fas fa-angle-right"></i>Cancel Order History</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fab fa-product-hunt"></i><span>Product</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/product') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.product') }}" class="nav-link  @if(request()->path() == 'admin/add/product') bg-success @endif"><i class="fas fa-angle-right"></i>Add Product</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            --}}
{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-mobile-alt"></i><span>TeleMedicine</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/book/telemedicine') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/telemedicine/dynamic') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/telemedicine/terms') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/show/book/telemedicine') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/show/waiting/book/telemedicine') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/show/complete/book/telemedicine') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/show/cancel/book/telemedicine') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.book.telemedicine') }}" class="nav-link  @if(request()->path() == 'admin/add/book/telemedicine') bg-success @endif"><i class="fas fa-angle-right"></i>Add TeleMedicine</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.telemedicine.dynamic') }}" class="nav-link  @if(request()->path() == 'admin/add/telemedicine/dynamic') bg-success @endif"><i class="fas fa-angle-right"></i>Dynamic Page</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.telemedicine.terms') }}" class="nav-link  @if(request()->path() == 'admin/add/telemedicine/terms') bg-success @endif"><i class="fas fa-angle-right"></i>Terms & Conditions</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.book.telemedicine') }}" class="nav-link  @if(request()->path() == 'admin/show/book/telemedicine') bg-success @endif"><i class="fas fa-angle-right"></i>Pending Booking</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.waiting.book.telemedicine') }}" class="nav-link  @if(request()->path() == 'admin/show/waiting/book/telemedicine') bg-success @endif"><i class="fas fa-angle-right"></i>Waiting Booking</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.complete.book.telemedicine') }}" class="nav-link  @if(request()->path() == 'admin/show/complete/book/telemedicine') bg-success @endif"><i class="fas fa-angle-right"></i>Complete</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.cancel.book.telemedicine') }}" class="nav-link  @if(request()->path() == 'admin/show/cancel/book/telemedicine') bg-success @endif"><i class="fas fa-angle-right"></i>Cancel Booking</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-tools"></i><span>General Setting</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/delivery/associate') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/privacy/title') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/privacy') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/terms/title') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/terms') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/footer') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/meta') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/social') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('delivery.associate') }}" class="nav-link  @if(request()->path() == 'admin/delivery/associate') bg-success @endif"><i class="fas fa-angle-right"></i>Deliver Associate</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.privacy.title') }}" class="nav-link  @if(request()->path() == 'admin/add/privacy/title') bg-success @endif"><i class="fas fa-angle-right"></i>Privacy Policy Title</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.privacy') }}" class="nav-link  @if(request()->path() == 'admin/add/privacy') bg-success @endif"><i class="fas fa-angle-right"></i>Privacy Policy</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.terms.title') }}" class="nav-link  @if(request()->path() == 'admin/add/terms/title') bg-success @endif"><i class="fas fa-angle-right"></i>Terms & Condition Title</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.terms') }}" class="nav-link  @if(request()->path() == 'admin/add/terms') bg-success @endif"><i class="fas fa-angle-right"></i>Terms & Condition</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.footer') }}" class="nav-link  @if(request()->path() == 'admin/add/footer') bg-success @endif"><i class="fas fa-angle-right"></i>Top & Footer</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.meta') }}" class="nav-link  @if(request()->path() == 'admin/add/meta') bg-success @endif"><i class="fas fa-angle-right"></i>Meta Tag</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.social') }}" class="nav-link  @if(request()->path() == 'admin/add/social') bg-success @endif"><i class="fas fa-angle-right"></i>Social Media</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-home"></i><span>Home Page</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/slider') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/section') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/map') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.slider') }}" class="nav-link  @if(request()->path() == 'admin/add/slider') bg-success @endif"><i class="fas fa-angle-right"></i>Add Slider</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.section') }}" class="nav-link  @if(request()->path() == 'admin/add/section') bg-success @endif"><i class="fas fa-angle-right"></i>Add Section</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.map') }}" class="nav-link  @if(request()->path() == 'admin/add/map') bg-success @endif"><i class="fas fa-angle-right"></i>Add Map</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-book-medical"></i><span>HealthCare/Cart (Dyna.)</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/medicine/dynamic') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/healthcare/dynamic') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/prescription/dynamic') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/add/cart/dynamic') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.medicine.dynamic') }}" class="nav-link  @if(request()->path() == 'admin/add/medicine/dynamic') bg-success @endif"><i class="fas fa-angle-right"></i>Add Medicine Content</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.healthcare.dynamic') }}" class="nav-link  @if(request()->path() == 'admin/add/healthcare/dynamic') bg-success @endif"><i class="fas fa-angle-right"></i>Add HealthCare Content</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.prescription.dynamic') }}" class="nav-link  @if(request()->path() == 'admin/add/prescription/dynamic') bg-success @endif"><i class="fas fa-angle-right"></i>Add Prescription Content</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.cart.dynamic') }}" class="nav-link  @if(request()->path() == 'admin/add/cart/dynamic') bg-success @endif"><i class="fas fa-angle-right"></i>Add Cart Content</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                            class="fa fa-user-cog"></i><span>All User</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/verify/visitor') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/unVerify/visitor') style="display: block;"--}}
{{--                        @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('verify.visitor') }}" class="nav-link  @if(request()->path() == 'admin/verify/visitor') bg-success @endif"><i class="fas fa-angle-right"></i>Verified User</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('unVerify.visitor') }}" class="nav-link  @if(request()->path() == 'admin/unVerify/visitor') bg-success @endif"><i class="fas fa-angle-right"></i>UnVerified User</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-mail-bulk"></i><span>Subscribe Email</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/show/subscribe') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('show.subscribe') }}" class="nav-link  @if(request()->path() == 'admin/show/subscribe') bg-success @endif"><i class="fas fa-angle-right"></i>Show Subscribe Email</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-mail-bulk"></i><span>Medicine Delivery Panel</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/medicine/account') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('add.medicine.account') }}" class="nav-link  @if(request()->path() == 'admin/add/medicine/account') bg-success @endif"><i class="fas fa-angle-right"></i>Add Account</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-medkit"></i><span>Add Medicine</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/add/medicine/admin') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/manage/medicine/admin') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/medicine/request') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.add.medicine') }}" class="nav-link  @if(request()->path() == 'admin/add/medicine/admin') bg-success @endif"><i class="fas fa-angle-right"></i>Add Medicine</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.manage.medicine') }}" class="nav-link  @if(request()->path() == 'admin/manage/medicine/admin') bg-success @endif"><i class="fas fa-angle-right"></i>Show Medicine</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.medicine.request') }}" class="nav-link  @if(request()->path() == 'admin/medicine/request') bg-success @endif"><i class="fas fa-angle-right"></i>Medicine Request</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fa fa-universal-access"></i><span>Pharmacy Request</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/pharmacy/request') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/pharmacy/accept') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/pharmacy/cancel') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('pharmacy.request') }}" class="nav-link  @if(request()->path() == 'admin/pharmacy/request') bg-success @endif"><i class="fas fa-angle-right"></i>Pharmacy Request</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('pharmacy.accept') }}" class="nav-link  @if(request()->path() == 'admin/pharmacy/accept') bg-success @endif"><i class="fas fa-angle-right"></i>Accepted Pharmacy</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('pharmacy.cancel') }}" class="nav-link  @if(request()->path() == 'admin/pharmacy/cancel') bg-success @endif"><i class="fas fa-angle-right"></i>Cancel Pharmacy</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

{{--            <li class="nav-item sidebar-nav-item">--}}
{{--                <a href="#" class="nav-link"><i--}}
{{--                    class="fas fa-user-md"></i><span>Doctor Request</span>--}}
{{--                </a>--}}
{{--                <ul class="nav sub-group-menu"--}}
{{--                    @if(request()->path() == 'admin/doctor/request') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/doctor/accept') style="display: block;"--}}
{{--                    @elseif(request()->path() == 'admin/doctor/cancel') style="display: block;"--}}
{{--                    @endif>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.request') }}" class="nav-link  @if(request()->path() == 'admin/doctor/request') bg-success @endif"><i class="fas fa-angle-right"></i>Doctor Request</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.accept') }}" class="nav-link  @if(request()->path() == 'admin/doctor/accept') bg-success @endif"><i class="fas fa-angle-right"></i>Accepted Doctor</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('doctor.cancel') }}" class="nav-link  @if(request()->path() == 'admin/doctor/cancel') bg-success @endif"><i class="fas fa-angle-right"></i>Cancel Doctor</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            @endif--}}

{{--            @if(Auth::user()->type == 2)--}}
{{--                    <li class="nav-item ">--}}
{{--                        <a href="{{ route('admin.dashboard') }}" class="nav-link"><i--}}
{{--                             class="fa fa-home"></i><span>Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item sidebar-nav-item">--}}
{{--                        <a href="#" class="nav-link"><i--}}
{{--                            class="fa fa-list-alt"></i><span>Medicine Order </span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav sub-group-menu"--}}
{{--                            @if(request()->path() == 'admin/show/order') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/order/product') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/dynamic_pdf') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/invoice/order') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/order/history') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/delivered/history') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/return/history') style="display: block;"--}}
{{--                            @elseif(request()->path() == 'admin/cancel/history') style="display: block;"--}}
{{--                                @endif>--}}

{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('show.order') }}" class="nav-link  @if(request()->path() == 'admin/show/order') bg-success @endif"><i class="fas fa-angle-right"></i>Pending Order</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('order.product') }}" class="nav-link  @if(request()->path() == 'admin/order/product') bg-success @endif"><i class="fas fa-angle-right"></i>Order Product</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('invoice.order') }}" class="nav-link  @if(request()->path() == 'admin/invoice/order') bg-success @endif"><i class="fas fa-angle-right"></i>Order Invoice List</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a target="_blank" href="{{ route('convert.pdf') }}" class="nav-link  @if(request()->path() == 'admin/dynamic_pdf') bg-success @endif"><i class="fas fa-angle-right"></i>Order Invoice (Print)</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('order.history') }}" class="nav-link  @if(request()->path() == 'admin/order/history') bg-success @endif"><i class="fas fa-angle-right"></i>Order History</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('delivered.history') }}" class="nav-link  @if(request()->path() == 'admin/delivered/history') bg-success @endif"><i class="fas fa-angle-right"></i>Delivered History</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('return.history') }}" class="nav-link  @if(request()->path() == 'admin/return/history') bg-success @endif"><i class="fas fa-angle-right"></i>Return History</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('cancel.history') }}" class="nav-link  @if(request()->path() == 'admin/cancel/history') bg-success @endif"><i class="fas fa-angle-right"></i>Cancel Order History</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                @endif--}}

        </ul>
    </div>
</div>


