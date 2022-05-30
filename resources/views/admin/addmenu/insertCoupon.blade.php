@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')


    <form action="" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="maGiamGia">Mã giảm giá</label>
                <input type="text" name="maGiamGia" class="form-control" id="maGiamGia" placeholder="Nhập mã giảm giá mới">
            </div>
            <div class="form-group">
                <label for="giaTri">Giá trị</label>
                <input type="number" name="giaTri" class="form-control" id="giaTri" placeholder="Nhập giá trị">
            </div>
            </div>


        <div class="card-footer">
            <button type="submit" class="btn btn-success">Thêm</button>
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
