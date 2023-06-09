@extends('admin.layout.main')
@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 350px !important;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        .image-container img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .image-container .image-description {
            margin-top: 5px;
            font-size: 12px;
            color: gray;
        }

       
    </style>
@endpush

@section('content')
    <div class="container">
        <h1>Đăng bài viết</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form id="postForm" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <label for="title">Tiêu đề:</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Nội dung trong hiện thị:</label>
            <textarea id="content" name="content" required maxlength="250"></textarea>
            <label for="content">Nội dung trong demo:</label>
            <textarea id="content" name="description" required maxlength="500"></textarea>
            <label for="images">Ảnh: Tên ảnh đặt tên không có dấu chấm !!</label>
            <input type="file" id="images" name="images[]" multiple required>
            <br>

            <div id="imagePreview"></div>

            <button type="submit">Đăng bài</button>
        </form>
    </div>
    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#images').on('change', function(event) {
                    var files = event.target.files;
                    var imagePreview = $('#imagePreview');

                    for (var i = 0; i < files.length; i++) {
                        (function(file) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var image = $('<img>').attr('src', e.target.result);
                                
                                var descriptionInput = $('<input>')
                                    .addClass('form-control')
                                    .attr('name', 'description_' + file.name.split('.').slice(0, -1).join('.'))
                                    .attr('placeholder', 'Miêu tả hình ảnh...');
                                var contentInput = $('<textarea>')
                                    .addClass('form-control')
                                    .attr('name', 'content_' + file.name.split('.').slice(0, -1).join('.'))
                                    .attr('placeholder', 'Thêm nội dung ở dưới ảnh...');
                                var deleteButton = $('<span>')
                                    .addClass('btn btn-danger')
                                    .html('Delete')
                                    .addClass('delete-button');
                                deleteButton.on('click', function() {
                                    $(this).closest('.image-container').remove();
                                });

                                var container = $('<div>').addClass('image-container');
                                container.append(image, descriptionInput, contentInput, deleteButton);

                                imagePreview.append(container);
                            };

                            reader.readAsDataURL(file);
                        })(files[i]);
                    }
                });
            });
        </script>
    @endpush
@endsection
