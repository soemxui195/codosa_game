<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codosa Game</title>

    <!-- bootstrap 4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- preloader -->
    <link rel="stylesheet" href="assets/css/preloader.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">

    <link rel="stylesheet" href="assets/fonts">
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/login.css"> -->

</head>
<div id="loader-wrapper">
    <!-- <div id="loader"></div> -->
    <div id="box"></div>
    <div id="shadow"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<header id="header">
    <!-- START NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Site Logo -->
            <a id="logo" class="navbar-brand" href="index.php"><img class="img-fluid" src="assets/images/7eleven-white-trans.png" alt="site logo"></a>
            <!-- Dropdown Button -->
            <button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == "index.php"){ echo "current"; }?>" href="index.php"><i class="fas fa-igloo"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-wallet"></i> Deposit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-hourglass-end"></i> History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-ravelry"></i> Affiliate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == "faq.php"){ echo "current"; }?>" href="faq.php"><i class="fas fa-question-circle"></i> Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-door-open"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php"><i class="fas fa-chess-pawn"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

</header> 