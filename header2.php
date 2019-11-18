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

<!-- Script som får nav-bar til at skifte farve ved scroll --->
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
    <!--Jesper/ Det her er til top navigationen på computeren når de ikke er logget ind-------------->
    <nav class="navbar sticky-top navbar-light bg-bitbyt navbar-default d-none d-md-block">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.php">
                    <img src="images/logo_transparent1.png" alt="logo" class="logo">
                </a>
            </div>
            <ul class="nav navbar-right">
                <li>
                    <a href="index.php" class="nav-link my-2 icon-navbar icon_text"><i class="fas fa-home bottom_icons icon-color"></i><br>
                        Hjem</a>
                </li>
                <li>
                    <a href="*" class="nav-link my-2 icon-navbar icon_text"><i class="fas fa-search bottom_icons icon-color"></i><br>
                        Søg</a>
                </li>
                <li>
                    <a href="" class="nav-link my-2 icon-navbar icon_text"><i class="fas fa-comment-dots bottom_icons icon-color"></i><br>
                        Beskeder</a>
                </li>
                <li>
                    <a href="profil.php" class="nav-link my-2 icon-navbar icon_text"><i class="fas fa-user bottom_icons icon-color"></i><br>
                        Profil</a>
                </li>
                <li>
                    <a href="logout.php" class="nav-link my-2 icon-navbar icon_text"><i class="fas fa-sign-out-alt bottom_icons icon-color"></i><br>
                        Log ud</a>
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
