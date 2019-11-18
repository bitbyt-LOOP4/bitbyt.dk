<?php
session_start();
require_once('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="bitbyt.dk">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Kilde til icon biblotek fra bootstrap 4 -->

    <title>
        <?php echo $page;?>
    </title>
    <!-- Link til jquery og js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Link til Javascript -->
    <!-- Bootstrap CSS -------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <!-- Kilde til icon biblotek fra bootstrap 4 ------------------------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google fonts ----->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Mono&display=swap" rel="stylesheet">
</head>

<script type="text/javascript">
    //<![CDATA[

    window.onload = function() {

        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

    }

    //]]>

</script>

<body>
    <!--Jesper/ Det her er til top navigationen på computeren ------------------------------------------>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-bitbyt navbar-default">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- Centrerer logo på mobil --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="./index.php">
                <img src="images/logo_transparent1.png" alt="logo" class="logo">
            </a>
            <!-- Placerer logo i midten på små skærme -->
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="./index.php">
                <img src="images/logo_transparent1.png" alt="logo" class="logo">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="faq.php" class="nav-link m-2 menu-item nav-active">Sådan virker det</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php" class="nav-link m-2 menu-item">Log ind</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item btn btn-info btn-registrer">Registrer</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Det her er til navigation på tablet og mobil -------------------------------------------------->
    <!-- Oliver Bootstrap er benyttet til det meste af designet, dernæst overskrevet af CSS -->
    <div class="container-fluid fixed-bottom d-md-none container_head">
        <div class="row">
            <div class="col-2 bottom_links text-center">
                <a class="icon_text" href="*">
                    <i class="fas fa-home bottom_icons"></i><br>
                    Hjem
                </a>

            </div>

            <div class="col-2 bottom_links text-center">
                <a class="icon_text" href="*">
                    <i class="fas fa-search bottom_icons"></i><br>
                    Søg
                </a>
            </div>
            <div class="col-4 bottom_links" id="upload">
                <a class="icon_text" href="*">
                    <i class="fas fa-plus-circle bottom_icons"></i><br>
                    Upload
                </a>
            </div>
            <div class="col-2 bottom_links text-center">
                <a class="icon_text" href="*">
                    <i class="fas fa-comment-dots bottom_icons"></i><br>
                    Beskeder
                </a>
            </div>

            <div class="col-2 bottom_links text-center">
                <a class="icon_text" href="profil.php">
                    <i class="fas fa-user bottom_icons"></i><br>
                    Profil
                </a>
            </div>
        </div>
    </div>
