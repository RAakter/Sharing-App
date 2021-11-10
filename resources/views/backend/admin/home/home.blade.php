@extends('backend.admin.master')
@section('title')
    ADMIN | Home
@endsection

@section('content')
    <div class="breadcrumbs-area">
            <h4><strong>Admin Dashboard</strong></h4>
            <ul>
                <li>
                    <a href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>Dashboard</li>
            </ul>

    </div>
@endsection

