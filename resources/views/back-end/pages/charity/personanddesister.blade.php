@extends('back-end.layouts.master')
@section('title', 'Show list')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Show List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Courses</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Member ID</th>
                        <th>Reason</th>
                        <th>Expected Amount</th>
                        <th>Document Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($personFamilies as $personFamily)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $personFamily->name }}</td>
                            <td>{{ $personFamily->member_id }}</td>
                            <td>{{ $personFamily->reason }}</td>
                            <td>${{ number_format($personFamily->expected_amount, 2) }}</td>
                            <td>
                                @if ($personFamily->document_image)
                                    <a href="{{ Storage::url($personFamily->document_image) }}" target="_blank">
                                        <img src="{{ Storage::url($personFamily->document_image) }}" alt="Document Image"
                                            style="max-width: 100px; max-height: 100px;">
                                    </a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                {{-- <a href="{{ route('personfamilies.edit', $personFamily->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                {{-- <form action="{{ route('personfamilies.destroy', $personFamily->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No requests found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            {{ $personFamilies->links() }}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#side-courses").addClass('active');
        });
    </script>
@endsection
