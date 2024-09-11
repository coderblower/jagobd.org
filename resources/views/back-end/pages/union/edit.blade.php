@extends('back-end.layouts.master')
@section('title','Update union')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update union</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">union</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Union Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('union.update', $union->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en" value="{{$union->name_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn" value="{{$union->name_bn}}">
                                </div>
                                <div class="form-group">
                                    <label for="upazila_id">Select upazila <span class="text-danger">*</span></label>
                                    <select id="upazila_id"
                                        class="select2 form-select form-control @error('upazila_id') is-invalid @enderror"
                                        name="upazila_id" required>
                                        <option value="">Please select a upazila</option>
                                        @foreach ($upazila as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('upazila_id') ?? $union->upazila_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('upazila_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('union.index') }}" class="btn btn-primary float-right">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-union").addClass('active');
        });

    </script>
@endsection
