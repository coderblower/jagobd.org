@extends('back-end.layouts.master')
@section('title','Project details')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Project Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-12">
                    <a href="{{route("project.create")}}" class="btn btn-primary mb-2" style="float:right;">Add Project</a>
                </div> --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projecet Details</h3>
                            <a href="{{route('project.index')}}" class="btn btn-primary float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 class="mb-5">{{$projects->title}}</h2>
                            <div class="">
                                <img src="{{ asset($projects->image) }}" class="img-fluid w-100 rounded" alt="" style="height: 30rem">
                            </div>
                                <div class="col-md-12 col-lg-12">    
                                  <p>{!!$projects->description!!}</p>
                                    </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
            $("#side-project").addClass('active');
        });

    </script>
@endsection


