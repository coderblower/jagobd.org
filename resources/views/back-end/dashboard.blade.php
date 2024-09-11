@php
    $site_info = \Illuminate\Support\Facades\DB::table('site_settings')->first();
@endphp
@extends('back-end.layouts.master')
@section('title','Dashboard')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row px-2">
        <div class="col-md-12">
            <h2 class="text-center">{{ $site_info ? $site_info->site_name_en: '' }}</h2>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-dashboard").addClass('active');
        });

    </script>
@endsection
