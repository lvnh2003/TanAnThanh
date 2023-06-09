@extends('admin.layout.main')
@push('css')
    <style>
       tbdoy td{
            padding: 20px
            border:1px solid black;
        }
        thead{
            border-bottom: 1px solid black
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">  
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                      <a class="btn btn-primary" href="{{route('post')}}">Đăng bài</a>
                    </section>
                   
                  
                    <!-- right col -->
                </div>
                
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
            <h1>Tất cả bài đăng</h1>
            <table  id="datatables" style="width: 100%;background-color: white">
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
        var table = new DataTable('#datatables', {
            responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('list') }}",
                columns:[
                    {
                        data:'title',
                        name:'title',
                    },
                    {
                        data:'image',
                        name:'image',
                        render:function(data)
                        {
                            return `<img src="${data}" width="150px">`;
                        }
                    },
                    {
                        data:'created',
                        name:'created',
                    },
                    {
                        data:'action',
                        name:'action',
                    }
                ]
        });
    </script>
@endpush
