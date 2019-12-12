<?php
$page = 'Send';
require_once('includes/header.php');
?>
<?php

$msg=$_POST['msg'];
$user_id=$_SESSION['user_id'];

//$query1="SELECT * FROM `posts` WHERE user_id != '$username'";


$query="INSERT INTO posts(msg, username) VALUES('$msg', '$username')";
$result = mysqli_query($con, $query);


?>


  <?php    
                        $query = "SELECT `username` FROM `kid` WHERE `user_id` = '$user_id'"; 
                        $result = mysqli_query($con, $query);
                        if (!$result) die(mysqli_error($con));
                            else 
                                $row = mysqli_fetch_assoc($result);
                                $username = $row['username'];
                                echo $username;
                    ?>