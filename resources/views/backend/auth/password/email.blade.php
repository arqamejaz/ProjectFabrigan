<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabrigan | Forget Password</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href={{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('backend/dist/css/adminlte.min.css') }}>
</head>

<body class="hold-transition login-page">
    @include('backend.layouts.sessionmsg')
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>FABRIGAN</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter email to reset">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src={{ asset('backend/plugins/jquery/jquery.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('backend/dist/js/adminlte.min.js') }}></script>
</body>

</html>
