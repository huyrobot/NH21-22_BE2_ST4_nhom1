@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

    <form action="{{ url('admin/menus/updateHastagProduct/'.$id.'/updateHastagProductExcute') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="id">ID Hastag</label>
                <input disabled type="text" name="id" class="form-control" id="id" value="{{ $id }}" placeholder="Nhập tên của sản phẩm">

            </div>

            <div class="form-group">
                <label for="product_id">Product ID</label>
                <select class="form-control" name="product_id" id="product_id">
                    @foreach($idProduct as $key){
                    @foreach($key as $id){

                    <option value="{{$id}}">{{$id}}</option>
                    }
                    @endforeach
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="hastag_product">Hastag Product</label>
                <input type="text" name="hastag_product" class="form-control" id="hastag_product" value="{{ $hastag_product }}" placeholder="Nhập giá của sản phẩm">
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
