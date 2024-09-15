@extends('back-end.layouts.master')
@section('title', 'Update About Items')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Update About Items</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">About Itemss</li>
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
                            <h3 class="card-title">About Items Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('about-items.update', $about_item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name EN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_en"
                                        value="{{ $about_item->name_en }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name BN</label>
                                    <input type="text" class="form-control" id="exampleInputTitle" name="name_bn"
                                        value="{{ $about_item->name_bn }}">
                                </div>
                                <div class="form-group" id="">
                                    <label for="exampleInputSubtitle">Description EN</label>
                                    <textarea class="form-control" rows="3" name="description_en" required>{{ $about_item->description_en ?? '' }}</textarea>
                                </div>
                                <div class="form-group" id="">
                                    <label for="exampleInputSubtitle" >Description BN</label>
                                    <textarea class="form-control" id="cutom" rows="3" name="description_bn" required>{{ $about_item->description_bn ?? '' }}</textarea>
                                </div>
                                <div>
                                    <div class="hello" id="editor"  >

                                    </div>
                                </div>

                                    <textarea name="" id="ss" cols="30" rows="10"></textarea>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="exampleInputFile" name="image"
                                            value="{{ $about_item->image }}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
  quill.on('text-change', (x)=>{
    console.log(quill.root.innerHTML)
    $('#cutom').html(quill.root.innerHTML);
  } )
</script>
    <script>
        $(document).ready(function() {
            $("#side-abouts").addClass('active');
        });
    </script>
@endsection
