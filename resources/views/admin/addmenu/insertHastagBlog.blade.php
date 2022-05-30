@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')


    <form action="{{ url('admin/menus/insert-HastagBlog') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="blogID">ID Blog</label>
                <select class="form-control" name="blogID" id="blogID">
                    @foreach($idBlog as $key){
                        @foreach($key as $id){

                        <option value="{{$id}}">{{$id}}</option>
                        }
                        @endforeach
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="hastagName">Hastag Name</label>
                <input name="hastagName" class="form-control" id="hastagName" placeholder="Enter Hastag"></input>
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add Hastag</button>
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
