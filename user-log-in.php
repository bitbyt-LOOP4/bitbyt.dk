<?php
$page = 'Log ind';
require_once('includes/header.php');
?>


<div class="container col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4">
    <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <br><br><br>
        <h1 class="h3 mb-3 font-weight-normal">Log ind</h1>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?php echo $email; ?>">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> Husk mig
            </label>
        </div>
        <button class="btn-submit btn btn-lg btn-primary btn-block" type="submit">Log ind</button>
    </form>
</div>

<?php
require_once('includes/footer.php');
?>
