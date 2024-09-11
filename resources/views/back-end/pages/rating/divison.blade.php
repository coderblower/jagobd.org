@extends('back-end.layouts.master')
@section('title','Division Committee Rating Event')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">
                @if (app()->getLocale() == 'bn')
                    বিভাগ কমিটির জন্য আবেদন ফর্ম খুলুন
                @else
                    Open Application Form for the Division Committee
                @endif
            </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">
                    @if (app()->getLocale() == 'bn')
                        বিভাগ কমিটির জন্য আবেদন ফর্ম খুলুন
                    @else
                        Open Application Form for the Division Committee
                    @endif
                </li>
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
                            <h3 class="card-title">
                                @if (app()->getLocale() == 'bn')
                                    বিভাগ কমিটির জন্য আবেদন ফর্ম খুলুন
                                @else
                                    Open Application Form for the Division Committee
                                @endif
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('rating_event_division_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="division">
                                        @if (app()->getLocale() == 'bn')
                                            বিভাগ
                                        @else
                                            Division
                                        @endif
                                    </label>
                                    <select class="form-control" id="division" name="division_id">
                                        @foreach($division as $division)
                                            <option value="{{ $division->id }}">
                                                @if (app()->getLocale() == 'bn')
                                                    {{ $division->name_bn }}
                                                @else
                                                    {{ $division->name_en }}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="organization">
                                        @if (app()->getLocale() == 'bn')
                                            সংস্থা
                                        @else
                                            Organization
                                        @endif
                                    </label>
                                    <select class="form-control" id="organization" name="organization_id">
                                        @foreach($organization as $organization)
                                            <option value="{{ $organization->id }}">
                                                @if (app()->getLocale() == 'bn')
                                                    {{ $organization->name_bn }}
                                                @else
                                                    {{ $organization->name_en }}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default float-right">Cancel</button>
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
            $("#side-ratings").addClass('active');
        });
    </script>
@endsection
