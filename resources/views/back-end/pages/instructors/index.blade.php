@extends('back-end.layouts.master')
@section('title', 'Instructors')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Instructors</h1>
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
                    <h3 class="card-title">Instructors List</h3>
                    <a href="{{ route('instructors.create') }}" class="btn btn-sm btn-primary float-right">Create New Instructor</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Bio</th>
                                <th>Profile Picture</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($instructors as $instructor)
                                <tr>
                                    <td>{{ $instructor->id }}</td>
                                    <td>{{ $instructor->name }}</td>
                                    <td>{{ $instructor->email }}</td>
                                    <td>{{ $instructor->phone }}</td>
                                    <td>{{ $instructor->bio }}</td>
                                    <td><img src="{{ asset('public/profile_pictures/' . $instructor->profile_picture) }}" alt="Profile Picture" width="50" height="50"></td>
                                    <td>
                                        <a href="{{ route('instructors.show', $instructor->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('instructors.edit', $instructor->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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