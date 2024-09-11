@extends('back-end.layouts.master')
@section('title', 'Video View')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Video View</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Video View</li>
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
                            <h3 class="card-title">Video Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <iframe width="560" height="315"
                                    src="{{$video->video_embed_src}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <h4 class="text-primary"> Status :
                                <span>{{ $video->status == 1 ? 'Active' : 'Inactive' }}</span></h4>
                            <p class="text-primary"> Date : <span>{{ $video->date }}</span></p>
                            <div class="form-group">
                                <label for="exampleInputTitle">Youtube Url</label>
                                <p>{{ $video->youtube_url ?? '' }}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title EN</label>
                                        <p>{{ $video->title_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title BN</label>
                                        <p>{{ $video->title_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description EN</label>
                                        <p>{{ $video->description_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description BN</label>
                                        <p>{{ $video->description_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('video.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-video").addClass('active');
        });
    </script>
@endsection
