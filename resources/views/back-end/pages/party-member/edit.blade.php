@extends('back-end.layouts.master')
@section('title', 'Update Party Member')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update Hire</h1>
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
                            <h3 class="card-title">Party Member Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('party-member.update', $partyMember->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en"
                                        value="{{ $partyMember->name_en }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn"
                                        value="{{ $partyMember->name_bn }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="exampleInputFile" name="image">
                                        @if ($partyMember->image)
                                            <img src="{{ asset($partyMember->image) }}" alt="Current Image"
                                                style="height: 50px; width: auto;">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="committee_id">Select Committee <span class="text-danger">*</span></label>
                                    <select id="committee_id"
                                        class="select2 form-select form-control @error('committee_id') is-invalid @enderror"
                                        name="committee_id" required>
                                        <option value="">Please select a Committee</option>
                                        @foreach ($committee as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('committee_id') ?? $partyMember->committee_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
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
                                    <select id="position_id"
                                        class="select2 form-select form-control @error('position_id') is-invalid @enderror"
                                        name="position_id" required>
                                        <option value="">Please select a position</option>
                                        @foreach ($position as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('position_id') ?? $partyMember->position_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
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
                                    <select id="organization_id"
                                        class="select2 form-select form-control @error('organization_id') is-invalid @enderror"
                                        name="organization_id" required>
                                        <option value="">Please select organization</option>
                                        @foreach ($organization as $item)
                                            <option value="{{ $item->id }}"
                                                {{ (old('organization_id') ?? $partyMember->organization_id) == $item->id ? 'selected' : '' }}>
                                                {{ $item->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('organization_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                
                                <div class="form-group">
                                    <label for="party_name">Party Name EN<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="party_name" name="party_name_en"
                                        value="{{ $partyMember->party_name_en }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="party_name">Party Name BN<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="party_name" name="party_name_bn"
                                        value="{{ $partyMember->party_name_bn }}" required>
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
        $(document).ready(function() {
            $("#side-party-member").addClass('active');
        });
    </script>
@endsection
