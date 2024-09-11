@extends('back-end.layouts.master')
@section('title','Create Union')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Union</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Union</li>
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
                            <h3 class="card-title">Create Union</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('union.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn">
                                </div>
                                <div class="form-group">
                                    <label for="upazila_id">Select Upazila <span class="text-danger">*</span></label>
                                    <select id="upazila_id" class="select2 form-select form-control @error('upazila_id') is-invalid @enderror" name="upazila_id" required>
                                        <option value="">Please select a upazila</option>
                                        @foreach ($upazila as $data)
                                            <option value="{{$data->id}}">{{$data->name_en}}</option>
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
