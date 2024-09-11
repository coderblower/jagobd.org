@extends('back-end.layouts.master')
@section('title','Create formPdf')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">FormPdf Counter</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">FormPdf</li>
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
                            <h3 class="card-title">Create FormPdf</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('formPdf.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_en" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="title_bn" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputTitle">PDF</label>
                                    <input type="file" accept=".pdf" class="form-control" id="exampleInputTitle" name="pdf" required>
                                </div>                                
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('formPdf.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-formPdf").addClass('active');
        });

    </script>
@endsection
