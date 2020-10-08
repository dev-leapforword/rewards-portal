<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeapForWord | Student</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-theme10.css') }}">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="../studentMain">
                                <div class="logo">
                                    <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Welcome to LeapForWord.</h3>
                        <p>Login as a Student or a Teacher.</p>
                        <div class="page-links">
                            <a href="../studentMain" class="active">Student</a><a href="../teacherMain">Teacher</a>
                        </div>
                        <!-- <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address"
                                required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form> -->
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn"><a href="../studentLogin">Login as a
                                    Student</a></button>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn"><a href="../studentRegister">Register as a
                                    Student</a></button>
                        </div>
                        <div class="other-links">
                            <span></span><a href="#">Forgot Roll No.?</a><a href="#"></a>
                        </div>
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
