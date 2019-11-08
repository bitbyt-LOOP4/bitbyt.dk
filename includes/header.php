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
    <!-- Bootstrap CSS -------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Kilde til icon biblotek fra bootstrap 4 ------------------------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Link til jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Link til Javascript -->
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!--Jesper/ Det her er til top navigationen på computeren ------------------------------------------>
    <div class=" d-none d-md-block">
        <nav class="navbar navbar-expand-sm bg-bitbyt">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="images/logo_transparent1.png" alt="logo" class="logo">
            </a>

        <!-- Links -->
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link purple-bitbyt" href="#">Sådan virker det</a>
            </li>
            <li class="nav-item">
                <a class="nav-link purple-bitbyt" href="#">Log ind</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn btn-info btn-registrer" role="button">Registrer</a>
            </li>
        </ul>
    </nav>
    </div>
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


