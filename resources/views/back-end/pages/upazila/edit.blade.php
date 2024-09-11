@extends('back-end.layouts.master')
@section('title','Update upazila')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update upazila</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">upazilas</li>
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
                            <h3 class="card-title">upazilas Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('upazila.update', $upazila->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en" value="{{$upazila->name_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn" value="{{$upazila->name_bn}}">
                                </div>
                                <div class="form-group">
                                    <label for="district_id">Select district <span class="text-danger">*</span></label>
                                    <select id="district_id"
                                        class="select2 form-select form-control @error('district_id') is-invalid @enderror"
                                        name="district_id" required>
                                        <option value="">Please select a district</option>
                                        @foreach ($district as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('district_id') ?? $upazila->district_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTitle">URL</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="url" value="{{$upazila->url}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('upazila.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-upazila").addClass('active');
        });

    </script>
@endsection
