<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- preloader -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div id="loader-wrapper">
        <!-- <div id="loader"></div> -->
        <div id="box"></div>
        <div id="shadow"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Codosa<span> Game</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="username" name="user"><br>
        <input type="password" placeholder="password" name="password"><br><br>
        <div id="form-group" class="flex-container">
            <div class="row">
                <div class="col-md-6 col-12 text-center text-sm-left">
                    <fieldset>
                        <input type="checkbox" id="remember-me" class="chk-remember">
                        <label for="remember-me" style="color: #006899"> Remember</label>
                    </fieldset>
                </div>
                <div class="col-md-6 col-12 text-center text-sm-right">
                    <a href="resetPass.php" class="card-link">Forgot Password</a>
                </div>
            </div>
        </div>
        <input type="button" value="Login"><br><br>
        <p style="display: flex; justify-content: center;"><a style="float: right;" href="register.php"> Don't have an account?</a></p>
    </div>

    <div class="clear"></div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/style.js"></script>
</body>

</html> 