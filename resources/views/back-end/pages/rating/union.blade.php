@extends('back-end.layouts.master')
@section('title','Union Committee Rating Event')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Open Application Form for the Union Committee</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Open Application Form for the Union Committee</li>
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
                            <h3 class="card-title">Open Application Form for the Union Committee</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('rating_event_union_store') }}" method="post" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <label for="upazila">Upazila</label>
                                    <select class="form-control" id="upazila" name="upazila_id" disabled>
                                        <option value="">Select Upazila</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="union">Union</label>
                                    <select class="form-control" id="union" name="union_id[]" multiple="multiple" disabled>
                                        <option value="">Select Union</option>
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
                            $('#upazila').prop('disabled', true);
                            $('#union').prop('disabled', true);
                        }
                    });
                } else {
                    $('#district').empty();
                    $('#district').append('<option value="">Select District</option>');
                    $('#district').prop('disabled', true);
                    $('#upazila').prop('disabled', true);
                    $('#union').prop('disabled', true);
                }
            });

            $('#district').change(function () {
                var districtID = $(this).val();
                if (districtID) {
                    $.ajax({
                        url: '/getUpazilas/' + districtID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#upazila').empty();
                            $('#upazila').append('<option value="">Select Upazila</option>');
                            $.each(data, function (key, value) {
                                $('#upazila').append('<option value="' + value.id + '">' + value.name_en + '</option>');
                            });
                            $('#upazila').prop('disabled', false);
                            $('#union').prop('disabled', true);
                        }
                    });
                } else {
                    $('#upazila').empty();
                    $('#upazila').append('<option value="">Select Upazila</option>');
                    $('#upazila').prop('disabled', true);
                    $('#union').prop('disabled', true);
                }
            });

            $('#upazila').change(function () {
                var upazilaID = $(this).val();
                if (upazilaID) {
                    $.ajax({
                        url: '/getUnions/' + upazilaID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#union').empty();
                            $('#union').append('<option value="">Select Union</option>');
                            $.each(data, function (key, value) {
                                $('#union').append('<option value="' + value.id + '">' + value.name_en + '</option>');
                            });
                            $('#union').prop('disabled', false);
                        }
                    });
                } else {
                    $('#union').empty();
                    $('#union').append('<option value="">Select Union</option>');
                    $('#union').prop('disabled', true);
                }
            });
        });
    </script>
@endsection
