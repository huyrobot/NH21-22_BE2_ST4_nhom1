@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

    <form action="{{ url('admin/menus/updateHastagBlog/'.$id.'/updateHastagBlogExcute') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="id">ID Hastag</label>
                <input disabled type="text" name="id" class="form-control" id="id" value="{{ $id }}" placeholder="Nhập tên của sản phẩm">

            </div>

            <div class="form-group">
                <label for="blog_id">Blog ID</label>
                <select class="form-control" name="blog_id" id="blog_id">
                    @foreach($idBlog as $key){
                    @foreach($key as $id){

                    <option value="{{$id}}">{{$id}}</option>
                    }
                    @endforeach
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="hastag_blog">Hastag Blog</label>
                <input type="text" name="hastag_blog" class="form-control" id="hastag_blog" value="{{ $hastag_blog }}" placeholder="Nhập giá của sản phẩm">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Update</button>
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
