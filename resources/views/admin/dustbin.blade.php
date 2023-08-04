@extends('admin.layout.main')
@push('css')
    <style>
        tbdoy td {
            padding: 20px border:1px solid black;
        }

        thead {
            border-bottom: 1px solid black
        }
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Thùng rác</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section>
                        <button class="btn btn-danger" onclick="deleteAll()"> <i class="fa fa-trash"></i> Xóa tất
                            cả</button>
                    </section>

                    <!-- right col -->
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <h1>Tất cả bài đăng</h1>
            <table id="datatables" style="width: 100%;background-color: white;text-align: center">
                <thead>
                    <tr>
                        <td style="width: 400px;padding: 10px">Tiêu đề</td>
                        <td>Ảnh</td>
                        <td>Ngày tạo</td>
                        <td>Hành động</td>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('js')
    <script
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.1/fc-4.2.2/fh-3.3.2/r-2.4.1/rg-1.3.1/sc-2.1.1/sl-1.6.2/datatables.min.js">
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = new DataTable('#datatables', {
            responsive: true,
            processing: true,
            serverSide: true,
            pageLimit: 1,
            ajax: "{{ route('listBin') }}",
            columns: [{
                    data: 'title',
                    name: 'title',
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data) {
                        return `<img src="${data}" width="150px">`;
                    }
                },
                {
                    data: 'created',
                    name: 'created',
                },
                {
                    data: 'action',
                    name: 'action',
                },
            ]
        });

        function deleteAjax(url) {
            var confirm = window.confirm(
                'Bạn có muốn xóa dòng dữ liệu này! Sau khi xóa dữ liệu không thể khôi phục lại! Cẩn thận!');
            if (confirm) {
                var ajax = $.ajax({
                    url: url,
                    data: {
                        _method: 'delete'
                    },
                    method: 'delete',
                    typeData: 'json',
                    success: function(response) {
                        var status = response.statusCode;
                            switch (status) {
                                case 200:
                                    $('#datatables').DataTable().clear().draw(true);
                                    $(document).Toasts('create', {
                                        title: 'Thông báo',
                                        autohide: true,
                                        delay: 2000,
                                        body: 'Xóa nội dung thành công',
                                        class: 'bg-success',
                                    })
                                    break;
                                default:
                                    alert("Có một số vấn đề ở đây");
                                    break;
                            
                        }
                    }
                });
            }
        }

        function deleteAll() {
            var confirm = window.confirm('Bạn có chắc chắn xóa tất cả bài viết \n Dữ liệu sẽ không thể phục hồi');
            if (confirm) {
                var ajax = $.ajax({
                    url: '{{ route('removeAll') }}',
                    data: {
                        _method: 'delete'
                    },
                    method: 'delete',
                    typeData: 'json',
                    success: function(response) {
                        var status = response.statusCode;
                        if (ajax.status == 500) {
                            toastMessageDanger('Trường đang xóa liên quan đến các dữ liệu khác trong DB!');
                        } else {
                            switch (status) {
                                case 200:
                                    $('#datatables').DataTable().clear().draw(true);
                                    $(document).Toasts('create', {
                                        title: 'Thông báo',
                                        autohide: true,
                                        delay: 2000,
                                        body: 'Xóa tất cả nội dung thành công',
                                        class: 'bg-success',
                                    })
                                    break;
                                default:
                                    alert("Có một số vấn đề ở đây");
                                    break;
                            }
                        }
                    }

                });

            }


        }
    </script>
    @if (Session::has('success'))
        <script>
            $(function() {
                $(document).Toasts('create', {
                    title: 'Thông báo',
                    autohide: true,
                    delay: 2000,
                    body: '{{ Session::get('success') }}',
                    class: 'bg-success',
                })

            });
        </script>
    @endif
@endpush
