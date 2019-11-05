<?php
    $menu = '
		<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="faq.php">
							Hvordan virker det?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="register.php">
							Registrer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="index.php">
							Login</a>
						</li>
						</ul>
	
	';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Oliver B. Joergensen">
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-bitbyt fixed-top" id="topNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="../images/logo_transparent1.png" class="logo rounded">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link purple-bitbyt" href="faq.php">
                            <p class="purple-bitbyt">Hvordan virker det?</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">
                            Registrer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link purple-bitbyt" href="index.php">
                            Login</a>
                    </li>
                </ul>
            </a>
        </div>
    </nav>

    <div class="container-fluid fixed-bottom d-lg-none">
        <div class="row">
            <div class="col">
                <!-- Style skal flyttes til CSS fil-->
                <i class="fas fa-home purple-bitbyt" style="font-size:3em;"></i>
                <p>HOME</p>
            </div>
            <div class="col">
                <i class="fas fa-search" style="font-size:3em; color:black;"></i>
            </div>
            <div class="col">
                <i class="fas fa-plus-circle" style="font-size:3em; color:black;"></i>
            </div>
            <div class="col">
                <i class="far fa-comment-dots" style="font-size:3em; color:black;"></i>
            </div>
            <div class="col">
                <i class="fas fa-user" style="font-size:3em; color:black;"></i>
            </div>
        </div>
    </div>



</body>
