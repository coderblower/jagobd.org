@extends('back-end.layouts.master')
@section('title', 'About Us')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create About us</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Site About</li>
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
                            <h3 class="card-title">Create About Us</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title EN</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="title_en" required value="{{ $about->title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title BN</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="title_bn" required value="{{ $about->title_bn ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>About Description EN</label>
                                            <textarea class="form-control" rows="3" placeholder="Site About Short Description ..."
                                                name="description_en" required>{{ $about->description_en ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>About Description BN</label>
                                            <textarea class="form-control" rows="3" placeholder="Site About Short Description ..."
                                                name="description_bn" required>{{ $about->description_bn ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">About Image 1</label>
                                        {{-- <span style="font-weight: bold; color: red">*</span> --}}
                                        <input name="image1" type="file" class="form-control">
                                        @if ($about)
                                            @if ($about->image1)
                                                <img src="{{ asset($about->image1) }}" alt=""
                                                    class="img-fluid rounded img-thumbnail mt-2"
                                                    style="width: auto; height: 200px">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">About Image 2</label>
                                        {{-- <span style="font-weight: bold; color: red"> *</span> --}}
                                        <input name="image2" type="file" class="form-control">
                                        @if ($about)
                                            @if ($about->image2)
                                                <img src="{{ asset($about->image2) }}" alt=""
                                                    class="img-fluid rounded img-thumbnail mt-2"
                                                    style="width: auto; height: 200px">
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
            $("#side-abouts").addClass('active');
        });

    </script>
@endsection
