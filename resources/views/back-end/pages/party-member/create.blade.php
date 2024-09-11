@extends('back-end.layouts.master')
@section('title','Create Party Member')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Party Member</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Party Member</li>
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
                            <h3 class="card-title">Create Party Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('party-member.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                            <input type="file" class="form-control" id="exampleInputFile" name="image" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="committee_id">Select Committee <span class="text-danger">*</span></label>
                                    <select id="committee_id" class="select2 form-select form-control @error('committee_id') is-invalid @enderror" name="committee_id" required>
                                        <option value="">Please select a committee</option>
                                        @foreach ($committee as $data)
                                            <option value="{{$data->id}}">{{$data->name_en}}</option>
                                        @endforeach
                                    </select>
                                    @error('committee_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="position_id">Select Position <span class="text-danger">*</span></label>
                                    <select id="position_id" class="select2 form-select form-control @error('position_id') is-invalid @enderror" name="position_id" required>
                                        <option value="">Please select a Position</option>
                                        @foreach ($position as $data)
                                            <option value="{{$data->id}}">{{$data->name_bn}}</option>
                                        @endforeach
                                    </select>
                                    @error('position_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="organization_id">Select organization <span class="text-danger">*</span></label>
                                    <select id="organization_id" class="select2 form-select form-control @error('organization_id') is-invalid @enderror" name="organization_id" required>
                                        <option value="">Please select organization</option>
                                        @foreach ($organization as $data)
                                            <option value="{{$data->id}}">{{$data->name_en}}</option>
                                        @endforeach
                                    </select>
                                    @error('organization_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputTitle">Party Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="party_name_en" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Party Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="party_name_bn" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('party-member.index') }}" class="btn btn-primary float-right">Back</a>
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
            $("#side-party-member").addClass('active');
        });

    </script>
@endsection
