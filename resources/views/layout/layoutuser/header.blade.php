<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href={!! asset("assetuser/css/font-awesome.css") !!} rel="stylesheet">
    <link href={!! asset("assetuser/css/bootstrap.min.css") !!} rel="stylesheet">
    <link href={!! asset("assetuser/css/animate.min.css") !!} rel="stylesheet">
    <link href={!! asset("assetuser/css/owl.carousel.css") !!} rel="stylesheet">
    <link href={!! asset("assetuser/css/owl.theme.css") !!} rel="stylesheet">

    <!-- theme stylesheet -->
    <link href={!! asset("assetuser/css/style.default.css") !!} rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href={!! asset("assetuser/css/custom.css") !!}  rel="stylesheet">

    <script src={!! asset("assetuser/js/respond.min.js") !!} ></script>

    <!-- sweetalert -->
    <link href={!! asset("assetuser/css/sweetalert.css") !!}  rel="stylesheet">

    <link rel="shortcut icon" href="favicon.png">

    @yield('css')

</head>

<body>

    <!-- *** TOPBAR ***
 ________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-12" data-animate="fadeInDown">
                <ul class="menu">
                    @if(Auth::check())
                        <li><a href="#">Profile</a>
                        </li>
                        <li><a href="register.html">Logout</a>
                        </li>
                    @else

                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li><a href="register.html">Register</a>
                        </li>
                        <li><a href="{!! route('logout')!!}">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a></p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->


    