<?php
$page = 'send besked';
require_once('includes/header.php');
$user_id=$_SESSION['user_id'];
?>
<?php
$query = "SELECT * FROM posts";
 $result = mysqli_query($con, $query);

if ($result->num_rows > 0){
    
    //viser data fra hver række
    
    while($row = $result->fetch_assoc()) {
        echo "" . $row["username"]. " " .":: " . $row["msg"]." --" .$row["date"]. "<br>"; 
    }
    
}



?>




<div>
<form method="post" action="send.php">
<textarea name="msg" placeholder="Skriv din besked her" class="form-control"></textarea><br>
<input type="submit" value="send">
</form>



    
</div>


<?php
require_once('includes/footer.php');
?>