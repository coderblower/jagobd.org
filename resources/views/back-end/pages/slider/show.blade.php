@extends('back-end.layouts.master')
@section('title', 'Slider View')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Slider View</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Slider View</li>
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
                            <h3 class="card-title">Slider Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="{{ asset($slider->image) }}" alt=""
                                    class="img-fluid rounded img-thumbnail mt-2" style="width: auto; height: 200px">

                            </div>
                            <h4 class="text-primary"> Status : <span>{{ $slider->status == 1 ? 'Active' : 'Inactive' }}</span></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title EN</label>
                                        <p>{{ $slider->title_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title BN</label>
                                        <p>{{ $slider->title_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description EN</label>
                                        <p>{{ $slider->description_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description BN</label>
                                        <p>{{ $slider->description_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('slider.index') }}" class="btn btn-primary float-right">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#side-slider").addClass('active');
        });
    </script>
@endsection
