@extends('back-end.layouts.master')
@section('title', 'News View')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">News View</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">News View</li>
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
                            <h3 class="card-title">News Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="{{ asset($news->image) }}" alt=""
                                    class="img-fluid rounded img-thumbnail mt-2" style="width: auto; height: 200px">

                            </div>
                            <h4 class="text-primary"> Status : <span>{{ $news->status == 1 ? 'Active' : 'Inactive' }}</span></h4>
                            <p class="text-primary"> Date : <span>{{ $news->date }}</span></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">title EN</label>
                                        <p>{{ $news->title_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">title BN</label>
                                        <p>{{ $news->title_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description EN</label>
                                        <p>{{ $news->description_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description BN</label>
                                        <p>{{ $news->description_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('news.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-news").addClass('active');
        });
    </script>
@endsection
