@extends('back-end.layouts.master')

@section('title', 'Edit Bnmtv')

@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Bnmtv</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('bnmtv.index') }}">Bnmtv</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Bnmtv</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('bnmtv.update', $bnmtv->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group">
                                    <label for="title_en">Title (EN)</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $bnmtv->title_en }}" placeholder="Enter English Title">
                                </div>

                                <div class="form-group">
                                    <label for="title_bn">Title (BN)</label>
                                    <input type="text" class="form-control" id="title_bn" name="title_bn" value="{{ $bnmtv->title_bn }}" placeholder="Enter Bengali Title">
                                </div>

                                <div class="form-group">
                                    <label for="description_en">Description (EN)</label>
                                    <textarea class="form-control" id="description_en" name="description_en" rows="3" placeholder="Enter English Description">{{ $bnmtv->description_en }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description_bn">Description (BN)</label>
                                    <textarea class="form-control" id="description_bn" name="description_bn" rows="3" placeholder="Enter Bengali Description">{{ $bnmtv->description_bn }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="video_url">Video URL</label>
                                    <input type="text" class="form-control" id="video_url" name="video_url" value="{{ $bnmtv->video_url }}" placeholder="Enter Video URL">
                                </div>

                                <div class="form-group">
                                    <label for="video_path">Video Path</label>
                                    <input type="text" class="form-control" id="video_path" name="video_path" value="{{ $bnmtv->video_path }}" placeholder="Enter Video Path">
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail_url">Thumbnail URL</label>
                                    <input type="text" class="form-control" id="thumbnail_url" name="thumbnail_url" value="{{ $bnmtv->thumbnail_url }}" placeholder="Enter Thumbnail URL">
                                </div>

                                <div class="form-group">
                                    <label for="like">Likes</label>
                                    <input type="number" class="form-control" id="like" name="like" value="{{ $bnmtv->like }}" placeholder="Enter Number of Likes">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" {{ $bnmtv->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $bnmtv->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $("#side-bnmtv").addClass('active');
        });
    </script>
@endsection
