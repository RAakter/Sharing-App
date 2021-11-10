<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
{{--<link rel="icon" href="{{ asset('assets/frontend/image/logo.png') }}">--}}
<head>
    <title>Admin</title>
    @include('backend.admin.partials.meta')
    @include('backend.admin.partials.style')
</head>

<body>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
@include('backend.admin.partials.header')
<!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->

    @include('backend.admin.partials.sidebar')

    <!-- Sidebar Area End Here -->
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <div class="container mt-4">
                @include('backend.admin.partials.notifications')
            </div>

        @yield('content')
        <!-- Footer Area Start Here -->
            <!-- Footer Area End Here -->
        </div>
        <!-- Page Area End Here -->
    </div>
</div>
<footer class="footer-wrap-layout1 bg-white text-center" style="background-image: url({{ asset('assets/backend/img/bg-pattern.png') }})">
    <div class="copyright text-center my-auto">© Copyrights {{ \Carbon\Carbon::now()->format('Y') }}. All rights reserved.
    </div>
</footer>
@include('backend.admin.partials.js')

<script>
    function getDistrict() {
        var id = document.getElementById('division_id').value;
        console.log(id);
        $('#district_id').find('option').remove();
        $.ajax({
            url: '{{ url('admin/get/district') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                $('.district_id').html(data)
            }
        });
    }

    function gDistrict() {
        var id = document.getElementById('d_id').value;
        $.ajax({
            url: '{{ url('admin/get/district') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                $('.dis_id').html(data)
            }
        })
    }
</script>
@yield('js')
</body>

</html>
