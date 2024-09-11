@extends('back-end.layouts.master')
@section('title','Update Slider')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Sliders</li>
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
                            <h3 class="card-title">Slider Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title (EN)</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_en" value="{{$slider->title_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title (BN)</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_bn" value="{{$slider->title_bn}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputSubtitle">Description (EN)</label>
                                    <input type="text" class="form-control" id="exampleInputSubtitle" name="description_en" value="{{$slider->description_en}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSubtitle">Description (BN)</label>
                                    <input type="text" class="form-control" id="exampleInputSubtitle" name="description_bn" value="{{$slider->description_bn}}">
                                </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="exampleInputFile" name="image" value="{{$slider->image}}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('slider.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-slider").addClass('active');
        });

    </script>
@endsection
