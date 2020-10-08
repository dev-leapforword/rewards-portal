<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-theme8.css') }}">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="../teacherMain">
                <div class="logo">
                    <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Welcome to LeapForWord.</h3>
                    <p></p>
                    <img src="{{ asset('images/teacher.png') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="../teacherMain">
                                <div class="logo">
                                    <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="info-holder">
                            <h3>Teacher</h3>
                        </div>
                        <div class="page-links">
                            <a href="../teacherLogin" class="active">Login</a>
                            <a href="../teacherRegister">Register</a>
                        </div>
                        <form action="../teacherLoginFrom" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (\Session::has('fail'))
                                <div class="alert alert-danger">
                                    <h5>{!! \Session::get('fail') !!}</h5>
                                </div>
                            @endif
                            <input class="form-control" type="number" name="wanumber" placeholder="Enter your Whatsapp No."
                                required>
                            <input class="form-control" type="password" name="panumber"
                                placeholder="Enter your Whatsapp No." required>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a
                                href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
