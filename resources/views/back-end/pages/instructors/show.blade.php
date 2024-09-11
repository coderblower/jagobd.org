@extends('back-end.layouts.master')
@section('title', 'Instructor Details')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Instructor Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Instructors</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Instructor Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $instructor->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $instructor->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $instructor->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $instructor->phone }}</td>
                        </tr>
                        <tr>
                            <th>Bio</th>
                            <td>{{ $instructor->bio }}</td>
                        </tr>
                        <tr>
                            <th>Profile Picture</th>
                            <td><img src="{{ asset('public/profile_pictures/' . $instructor->profile_picture) }}" alt="Profile Picture" width="50" height="50"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-instructors").addClass('active');
        });
    </script>
@endsection