@extends('back-end.layouts.master')

@section('title', 'Create Bnmtv')

@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Add New Bnmtv</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('bnmtv.index') }}">Bnmtv</a></li>
                <li class="breadcrumb-item active">Add New</li>
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
                            <h3 class="card-title">Add New Bnmtv</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('bnmtv.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="title_en">Title (EN)</label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Enter English Title">
                                </div>

                                <div class="form-group">
                                    <label for="title_bn">Title (BN)</label>
                                    <input type="text" class="form-control" id="title_bn" name="title_bn" placeholder="Enter Bengali Title">
                                </div>

                                <div class="form-group">
                                    <label for="description_en">Description (EN)</label>
                                    <textarea class="form-control" id="description_en" name="description_en" rows="3" placeholder="Enter English Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description_bn">Description (BN)</label>
                                    <textarea class="form-control" id="description_bn" name="description_bn" rows="3" placeholder="Enter Bengali Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="video_url">Video URL</label>
                                    <input type="text" class="form-control" id="video_url" name="video_url" placeholder="Enter Video URL">
                                </div>

                                <div class="form-group">
                                    <label for="video_path">Video Path</label>
                                    <input type="text" class="form-control" id="video_path" name="video_path" placeholder="Enter Video Path">
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail_url">Thumbnail URL</label>
                                    <input type="text" class="form-control" id="thumbnail_url" name="thumbnail_url" placeholder="Enter Thumbnail URL">
                                </div>

                                <div class="form-group">
                                    <label for="like">Likes</label>
                                    <input type="number" class="form-control" id="like" name="like" placeholder="Enter Number of Likes">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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
