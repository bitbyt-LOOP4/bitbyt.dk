<?php
$page = 'Log ind';
require_once('includes/header.php');
?>


<div class="container col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4">
    <form class="form-signin">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Log ind</h1>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Husk mig
            </label>
        </div>
        <button class="btn-submit btn btn-lg btn-primary btn-block" type="submit">Log ind</button>
        <p class="mt-5 mb-3 text-muted">&copy; bitbyt.dk</p>
    </form>
</div>

<?php
require_once('includes/footer.php');
?>
