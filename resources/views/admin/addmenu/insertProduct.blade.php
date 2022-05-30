@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')


    <form action="{{ url('admin/menus/insert-product') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="tenSP">Product name</label>
                <input type="text" name="tenSP" class="form-control" id="tenSP" value="Default" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="giaSP">Price</label>
                <input type="number" name="giaSP" class="form-control" id="giaSP" value="000000" placeholder="Enter price of product">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select class="form-control" name="size" >
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                            <option value="xs">XS</option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="color">Color</label>
                        <select class="form-control" name="color" >

                            <option  value="White">White</option>
                            <option style="color: dodgerblue" value="Blue">Blue</option>
                            <option style="color: black" value="Black">Black</option>
                            <option style="color: springgreen" value="Green">Green</option>
                            <option style="color: yellow" value="Yellow">Yellow</option>
                            <option  style="color: orange" value="Orange">Orange</option>
                            <option style="color: hotpink" value="Pink">Pink</option>
                            <option style="color: grey" value="Gray">Gray</option>
                            <option style="color: red" value="Red">Red</option>
                            <option style="color: saddlebrown" value="Brown">Brown</option>
                            <option style="color: mediumpurple" value="Purple">Purple</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                        <label for="khoiLuong">Weight</label>
                        <input type="number" step="0.01" name="khoiLuong" value="000000" class="form-control" id="khoiLuong" placeholder="Enter weight product">
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tyLe">Dimensisons Product</label>
                        <input type="text" name="tyLe" value="00x00x00" class="form-control" id="tyLe" placeholder="Enter Dimensisons of Product">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="chatLieu">Materials Product</label>
                <input type="text" name="chatLieu" value="Default" class="form-control" id="chatLieu" placeholder="Enter Materials Product">
            </div>
            <div class="form-group">
                <label for="moTa">Description</label>
                <textarea name="moTa" class="form-control" id="contentArea" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie at elit blandit convallis. Phasellus cursus risus et tortor gravida, ...</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="picture_Product" type="file" class="custom-file-input" id="picture_Product" accept="image/*" onchange="loadFile(event)">
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
            <button type="submit" class="btn btn-success">Add Product</button>
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
