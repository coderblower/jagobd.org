@extends('back-end.layouts.master')
@section('title', 'Enrollments List')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Enrollments List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Enrollments</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Enrollments</h3>
            <div class="card-tools">
                <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-sm">Create Enrollment</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Enrollment Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $enrollment)
                        <tr>
                            <td>{{ $enrollment->id }}</td>
                            <td>{{ $enrollment->course->title }}</td>
                            <td>{{ $enrollment->user->name }}</td>
                            <td>{{ ucfirst($enrollment->status) }}</td>
                            <td>{{ $enrollment->enrollment_date}}</td>
                            <td>
                                <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-enrollments").addClass('active');
        });
    </script>
@endsection
