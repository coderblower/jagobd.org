@extends('back-end.layouts.master')
@section('title', 'Program View')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Program View</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Program View</li>
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
                            <h3 class="card-title">Program Info</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="{{ asset($program->image) }}" alt=""
                                    class="img-fluid rounded img-thumbnail mt-2" style="width: auto; height: 200px">

                            </div>
                            <h4 class="text-primary"> Status : <span>{{ $program->status == 1 ? 'Active' : 'Inactive' }}</span></h4>
                            <p class="text-primary"> Date: <span>{{ $program->date }}</span></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title EN</label>
                                        <p>{{ $program->title_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title BN</label>
                                        <p>{{ $program->title_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description EN</label>
                                        <p>{{ $program->description_en ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Description BN</label>
                                        <p>{{ $program->description_bn ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('program.index') }}" class="btn btn-primary float-right">Back</a>
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
