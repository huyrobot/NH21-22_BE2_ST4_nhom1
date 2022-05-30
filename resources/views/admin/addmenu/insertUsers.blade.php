@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')


    <form action="{{ url('admin/menus/insert-Users') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="name">Username</label>
                <input name="name" class="form-control" id="name"  value="exampleName" placeholder="Enter Username"></input>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="example@gmail.com" placeholder="Enter Hastag"></input>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input disabled type="number" name="role" class="form-control" id="role" value="0" placeholder="Enter Hastag"></input>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input  type="number" name="phone" class="form-control" id="phone" value="" placeholder="Enter Phone"></input>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address"  placeholder="Enter address"></input>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city"  placeholder="Enter city"></input>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password"></input>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add User</button>
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
