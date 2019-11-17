<?php
$page = 'Log ind';
require_once('conn.php');
require_once('includes/header.php');
if(isset($_SESSION['user_id'])) {
    header('location:loggedin_front.php');
}
else{
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM kid WHERE username = '$username'";
        $result = mysqli_query($con, $query);
        if (!$result) die(mysqli_error);
        else {
            $rows = mysqli_num_rows($result);
            if ($rows == 0) {
                echo "Denne bruger eksiterer ikke";
            }
            else {
                if ($rows > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $username = $row['username'];
                        $database_password = $row['password'];
                        $kid_id = $row['kid_id'];
                        $token = password_verify('$password', '$database_password');
                        if ($token == $password) {
                            $_SESSION['kid_id'] = $kid_id;
                            echo "Velkommen " . $username . "!";
                        }
                    }
                }
            }
        }
    }
}
?>


<div class="container col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4">
    <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <br><br><br>
        <h1 class="h3 mb-3 font-weight-normal">Log ind</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus value="<?php echo $username; ?>">
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
