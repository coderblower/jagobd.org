@extends('back-end.layouts.master')
@section('title','Social Links')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Social Links</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Site Settings</li>
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
                            <h3 class="card-title">Create Social Link </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10%">Social Media</th>
                                <th style="width: 58%">Link</th>
                                <th style="width: 8%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($social_links as $value)
                                <form action="{{route('social-link.store')}}" method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            <input name="name" type="text" readonly  class="form-control" value="{{$value->name}}">
                                            <input name="id" type="hidden" readonly  class="form-control" value="{{$value->id}}">
                                        </td>
                                        <td>
                                            <input required name="link" type="text" class="form-control" value="{{$value->link}}">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="fa fa-check"></i> update
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-settings").addClass('active');
            $("#side-sosial").addClass('active');
            $("#side-sosial").addClass('active-sidebar');
        });
    </script>
@endsection
