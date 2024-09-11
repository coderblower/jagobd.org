<!-- resources/views/back-end/eshowcase/edit.blade.php -->

@extends('back-end.layouts.master')
@section('title', 'Update Eshowcase')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update Eshowcase</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Eshowcase</li>
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
                            <h3 class="card-title">Eshowcase Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('eshowcase.update', $eshowcase->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nameEn">Name EN</label>
                                            <input type="text" class="form-control" id="nameEn" name="name_en" value="{{ $eshowcase->name_en }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nameBn">Name BN</label>
                                            <input type="text" class="form-control" id="nameBn" name="name_bn" value="{{ $eshowcase->name_bn }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="descriptionEn">Description EN</label>
                                            <textarea class="form-control" rows="3" name="description_en" required>{{ $eshowcase->description_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="descriptionBn">Description BN</label>
                                            <textarea class="form-control" rows="3" name="description_bn" required>{{ $eshowcase->description_bn }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ $eshowcase->price }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="exampleInputFile" name="image">
                                            </div>
                                            @if($eshowcase->image)
                                                <img src="{{ asset('storage/' . $eshowcase->image) }}" alt="Current Image" class="mt-2" width="100">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="productImages">Product Images</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="productImages" name="product_images[]" multiple>
                                            </div>
                                            @if($eshowcase->product_images)
                                                @php
                                                    $productImages = json_decode($eshowcase->product_images, true);
                                                @endphp
                                                <div class="mt-2">
                                                    
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('eshowcase.index') }}" class="btn btn-primary float-right">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#side-eshowcase").addClass('active');
        });
    </script>
@endsection
