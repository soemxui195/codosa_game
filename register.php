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
    <title>Register</title>
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
        <input type="text" required name="full_name" placeholder="full name"><br>
        <input type="text" required name="email" placeholder="email"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="password" required name="password_confirmation" placeholder="repeat password"><br>

        <input type="button" value="Submit"><br><br>
        <p style="display: flex; justify-content: center;"><a style="float: right;" href="login.php"> Do you have an account?</a></p>
    </div>

    <div class="clear"></div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/style.js"></script>
</body>

</html> 