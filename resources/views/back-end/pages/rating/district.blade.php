@extends('back-end.layouts.master')
@section('title','District Committee Rating Event')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Open Application Form for the District Committee</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Open Application Form for the District Committee</li>
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
                            <h3 class="card-title">Open Application Form for the District Committee</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('rating_event_district_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="organization">Organization</label>
                                    <select class="form-control" id="organization" name="organization_id">
                                        @foreach($organizations as $organization)
                                            <option value="{{ $organization->id }}">{{ $organization->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="division">Division</label>
                                    <select class="form-control" id="division" name="division_id">
                                        <option value="">Select Division</option>
                                        @foreach($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <select class="form-control" id="district" name="district_id" disabled>
                                        <option value="">Select District</option>
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

            $('#division').change(function () {
                var divisionID = $(this).val();
                if (divisionID) {
                    $.ajax({
                        url: '/getDistricts/' + divisionID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#district').empty();
                            $('#district').append('<option value="">Select District</option>');
                            $.each(data, function (key, value) {
                                $('#district').append('<option value="' + value.id + '">' + value.name_en + '</option>');
                            });
                            $('#district').prop('disabled', false);
                        }
                    });
                } else {
                    $('#district').empty();
                    $('#district').append('<option value="">Select District</option>');
                    $('#district').prop('disabled', true);
                }
            });
        });
    </script>
@endsection
