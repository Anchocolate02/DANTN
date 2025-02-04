<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>

            <form method="POST" class="m-t" role="form" action="{{route('auth.login')}}">

                @csrf

                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    @if ($errors->has('email'))
                    <span class="error-message">*
                        {{ $errors->first('email') }}
                    </span>
                    @endif

                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="error-message">*
                        {{ $errors->first('password') }}
                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                <a href="login.html#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>