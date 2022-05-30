
<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.headAdmin')
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top: 100px">

    <!-- /.login-logo -->
    <div style="text-align: center;">
        <img src="{{ asset('/images') }}/newLogo.jpg" width="200px" height="200px" style="border-radius: 20px">
    </div>
    <div style="text-align: center;">
        <img src="{{ asset('/images/icons') }}/logo-01.png" width="150px" style="margin-top: 20px;margin-left: auto;margin-right: auto">
    </div>
    <div style="margin-top: 40px;margin-bottom: 40px" class="login-logo">
        <a href="#"><b></b></a>
    </div>
    <div class="card" style="margin-bottom: 200px;">
        <div  class="card-body login-card-body rounded">
            <p class="login-box-msg">Register Account</p>

            @include('admin.alert')
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-user-circle-o"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-map-marker"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="city" class="form-control" id="city" placeholder="City">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="	fa fa-building-o"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm" placeholder="Confirm Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">

                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-success btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                @csrf

            </form>


        </div>

        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->

@include('admin.footerAdmin')
</body>
</html>
