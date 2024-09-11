@extends('back-end.layouts.master')

@section('title', 'View Bnmtv')

@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">View Bnmtv</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('bnmtv.index') }}">Bnmtv</a></li>
                <li class="breadcrumb-item active">View</li>
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
                            <h3 class="card-title">View Bnmtv</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Title (EN):</strong>
                                    <p>{{ $bnmtv->title_en }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Title (BN):</strong>
                                    <p>{{ $bnmtv->title_bn }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Description (EN):</strong>
                                    <p>{{ $bnmtv->description_en }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Description (BN):</strong>
                                    <p>{{ $bnmtv->description_bn }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Video URL:</strong>
                                    <p>{{ $bnmtv->video_url }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Video Path:</strong>
                                    <p>{{ $bnmtv->video_path }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Thumbnail URL:</strong>
                                    <p>{{ $bnmtv->thumbnail_url }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Likes:</strong>
                                    <p>{{ $bnmtv->like }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Status:</strong>
                                    <p>{{ $bnmtv->status == 1 ? 'Active' : 'Inactive' }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('bnmtv.index') }}" class="btn btn-default">Back</a>
                        </div>
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
