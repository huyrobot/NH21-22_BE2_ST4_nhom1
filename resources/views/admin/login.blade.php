
<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.headAdmin')
</head>
<body class="hold-transition login-page">
<div class="login-box">

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
    <div class="card">
        <div  class="card-body login-card-body rounded">
            <p class="login-box-msg">Login</p>

            @include('admin.alert')
            <form action="/admin/login/store" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-success btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>

                @csrf
            </form>


        </div>

        <!-- /.login-card-body -->
    </div>
    <div class="card">
        <div  class="card-body login-card-body rounded">
    <div class="row d-flex justify-content-center">
        <div class="icheck-primary">
            <a href="{{ asset('/register') }}" class="badge badge-Light">Register Account</a>

        </div>
    </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

@include('admin.footerAdmin')
</body>
</html>
