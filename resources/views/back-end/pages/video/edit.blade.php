@extends('back-end.layouts.master')
@section('title', 'Update Video')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update Video</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Video</li>
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
                            <h3 class="card-title">Video Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('video.update', $video->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_en"
                                        value="{{ $video->title_en }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_bn"
                                        value="{{ $video->title_bn }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Description EN</label>
                                    <textarea class="form-control" rows="3" name="description_en" >{{ $video->description_en ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Description BN</label>
                                    <textarea class="form-control" rows="3" name="description_bn" >{{ $video->description_bn ?? '' }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="videoEmbedSrc">Video Embed SRC Link</label>
                                            <textarea class="form-control" id="videoEmbedSrc" name="video_embed_src" required>{{ $video->video_embed_src }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="youtubeUrl">YouTube Full URL</label>
                                            <textarea class="form-control" id="youtubeUrl" name="youtube_url" required>{{ $video->youtube_url }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dateEn">Date</label>
                                                <input type="text" class="form-control datepicker" id="dateEn"
                                                    name="date"
                                                    value="{{ \Carbon\Carbon::parse($video->date)->format('Y-m-d') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('video.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-video").addClass('active');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd' // Ensure the date format is consistent with your value attribute
            });
        });
    </script>
@endsection
