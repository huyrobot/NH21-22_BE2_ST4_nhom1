@extends('admin.mainAdmin')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

    <form action="{{ url('admin/menus/updateUsers/'.$id.'/updateUsersExcute') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="id">ID</label>
                <input disabled name="id" class="form-control" id="id"  value="{{ $id }}" placeholder="Enter Username"></input>

            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input name="name" class="form-control" id="name"  value="{{ $name }}" placeholder="Enter Username"></input>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $email }}" placeholder="Enter Hastag"></input>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input  type="number" name="phone" class="form-control" id="phone" value="{{ $phone }}" placeholder="Enter Phone"></input>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $address }}" placeholder="Enter address"></input>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" value="{{ $city }}"  placeholder="Enter city"></input>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter new password"></input>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Update User</button>
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
