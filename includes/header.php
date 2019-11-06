<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="bitbyt.dk">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Kilde til icon biblotek fra bootstrap 4 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Link til jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Link til Javascript -->
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <!-- Det her er til top navigationen på computeren -------------------------------------------------->
    <nav class="navbar navbar-expand-sm bg-bitbyt">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="../images/logo_transparent1.png" alt="logo" class="logo">
        </a>

        <!-- Links -->
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Sådan virker det</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Log ind</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn btn-info" role="button">Registrer</a>
            </li>
        </ul>
    </nav>

    <!-- Det her er til navigation på tablet og mobil -------------------------------------------------->
    <div class="container-fluid fixed-bottom d-lg-none container_head">
        <div class="row">
            <div class="col-2 bottum_links text-center">

                <!-- Style skal flyttes til CSS fil-->
                <a class="icon_text" href="*">
                    <i class="fas fa-home bottum_icons"></i>
                    Hjem
                </a>

            </div>

            <div class="col-2 bottum_links text-center">
                <a class="icon_text" href="*">
                    <i class="fas fa-search bottum_icons"></i>
                    <p>Søg</p>
                </a>
            </div>
            <div class="col-4 bottum_links" id="upload">
                <a class="icon_text" href="*">
                    <i class="fas fa-plus-circle bottum_icons"></i>
                    <p>Upload</p>
                </a>
            </div>
            <div class="col-2 bottum_links text-center">
                <a class="icon_text" href="*">
                    <i class="far fa-comment-dots bottum_icons"></i>
                    <p>Beskeder</p>
                </a>
            </div>

            <div class="col-2 bottum_links text-center">
                <a class="icon_text" href="*">
                    <i class="fas fa-user bottum_icons"></i>
                    <p>Profil</p>
                </a>
            </div>
        </div>
    </div>
</body>
