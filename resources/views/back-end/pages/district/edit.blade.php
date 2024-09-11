@extends('back-end.layouts.master')
@section('title','Update district')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update district</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">district</li>
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
                            <h3 class="card-title">district Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('district.update', $district->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en" value="{{$district->name_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn" value="{{$district->name_bn}}">
                                </div>
                                <div class="form-group">
                                    <label for="division_id">Select division <span class="text-danger">*</span></label>
                                    <select id="division_id"
                                        class="select2 form-select form-control @error('division_id') is-invalid @enderror"
                                        name="division_id" required>
                                        <option value="">Please select a division</option>
                                        @foreach ($division as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('division_id') ?? $district->division_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTitle">URL</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="url" value="{{$district->url}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Lat</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="lat" value="{{$district->lat}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Lon</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="lon" value="{{$district->lon}}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('district.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-district").addClass('active');
        });

    </script>
@endsection
