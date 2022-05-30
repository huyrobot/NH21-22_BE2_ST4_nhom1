@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')


    <form action="{{ url('admin/menus/insert-blog') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="tieuDeBlog">Title</label>
                <input type="text" name="tieuDeBlog" class="form-control" id="tieuDeBlog" placeholder="Enter Blog title">
            </div>
            <div class="form-group">
                <label for="noiDungBlog">Nội dung</label>
                <textarea name="noiDungBlog" class="form-control" id="noiDungBlog" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="id_end_time">Date only:</label>
                <div class="input-group date" id="id_4">
                    <input name="timeBlog" type="date" id="timeBlog"  value="00/00/0000"  class="form-control" required="">


                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                            <input name="picture_Blog" type="file" class="custom-file-input" id="picture_Blog" accept="image/*" onchange="loadFile(event)">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>

                    </div>

                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>

                </div>
                <img style="width: 400px; border-radius: 10px; margin: 20px;margin-top: 50px" id="output"/>
                <script>
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                        }
                    };
                </script>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add blog</button>
        </div>
    </form>


@endsection
@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'contentArea' );
    </script>
@endsection
