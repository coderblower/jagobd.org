@extends('back-end.layouts.master')
@section('title','BreakingNews')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">BreakingNews List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">BreakingNews</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{route("breakingNews.create")}}" class="btn btn-primary mb-2" style="float:right;">Add BreakingNews</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title">BreakingNews List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr class="" style="text-align:center; ">
                                    <th style="width: 5%">SL</th>
                                    <th style="width: 10%">Name EN</th>
                                    <th style="width: 10%">Name BN</th>
                                    <th style="width: 10%">Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-breakingNews").addClass('active');
        });

    </script>
    <script>
        var datatable = $('.data-table').DataTable({
            order: [],
            lengthMenu: [[10, 20, 30, 50, 100, -1], [10, 20, 30, 50, 100, "All"]],
            processing: true,
            responsive: true,
            serverSide: true,
            language: {
                processing: '<i class="ace-icon fa fa-spinner fa-spin bigger-500" style="font-size:60px;"></i>'
            },
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",

            ajax: {
                url: "{{route('breakingNews.index')}}",
                type: "get",
            },

            columns: [
                {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false,},
                {data: 'name_en', name: 'name_en', orderable: true,},
                {data: 'name_bn', name: 'name_bn', orderable: true,},
                {data: 'status', name: 'status', orderable: true},
                {data: 'action', searchable: false, orderable: false}
            ],
        });
        function StatusChange(id) {
            event.preventDefault();
            swal({
                title: `Are you sure?`,
                text: "Change Status",
                buttons: true,
                dangerMode: true,
            }).then((statusChange) => {
                if (statusChange) {
                    statusChanges(id);
                }
            });
        };

        function statusChanges(id) {
            let status = $('#status-' + id).find(":selected").val()
                $.ajax({
                    type:'GET',
                    url:"{{ route('breakingNews_status_change') }}",
                    data:{
                        id:id,
                        status:status
                    },
                    // success:function(data){
                    //     toastr.success("Status Change successfully");
                    // }
                    success: function (data) {
                        console.log(data);
                        // Reloade DataTable
                        $('#table').DataTable().ajax.reload();
                            // show toast message
                            toastr.success("Status Change successfully");
                    }, // success end
                });
        }

        // delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    deleteItem(id);
                }
            });
        };

        // Delete Button
        function deleteItem(id) {

            var url = '{{ route("breakingNews.destroy",":id") }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                success: function (resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function (error) {
                    location.reload();
                } // Error
            })
        }

    </script>
@endsection
