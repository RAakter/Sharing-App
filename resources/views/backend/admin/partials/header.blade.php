<div class="navbar navbar-expand-md header-menu-one bg-white" style="background-image: url({{ asset('assets/backend/img/bg-pattern.png') }})">
    <div class="nav-bar-header-one">
{{--        @if(Auth::user()->type == 1)--}}
            <div class="header-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/backend/img/logo.jpg') }}" class="rounded-circle" alt="logo" style="height: 62px;width: 70px">
                </a>
            </div>
{{--        @endif--}}
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="navbar-item header-search-bar">
                <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                </button>
                            </span>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown mr-5">
{{--                <a href="{{ url('/') }}" target="_blank" class="nav-link btn btn-lg btn-success ">Visit Site</a>--}}
            </li>

            <li class="navbar-item dropdown header-admin ml-5">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <div class="admin-title mr-5">
                        <h5 class="item-title mr-2"><img src="{{ asset('assets/backend/img/figure/admin.jpg') }}" alt="Admin" class="rounded-circle mr-3">{{ Auth::guard('admin')->user()->name }}</h5>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                    </div>
                    <div class="item-content">
{{--                        @if(Auth::user()->type == 1)--}}
                        <ul class="settings-list">
                            <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
{{--                            <li><a href="{{ route('admin.register') }}"><i class="fa fa-registered"></i>Registration</a></li>--}}
                            <li><a href="{{ route('admin.change.password') }}"><i class="fa fa-passport"></i>Change Password</a></li>
                            <li><a href="{{ route('admin.logout') }}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                        </ul>
{{--                        @endif--}}
{{--                        @if(Auth::user()->type == 2)--}}
{{--                            <ul class="settings-list">--}}
{{--                                <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>--}}
{{--                                <li><a href="{{ route('admin2.logout') }}"><i class="flaticon-turn-off"></i>Log Out</a></li>--}}
{{--                            </ul>--}}
{{--                        @endif--}}
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
