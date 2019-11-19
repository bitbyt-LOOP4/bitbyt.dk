<?php
$page = 'bitbyt';
require_once('includes/header.php');
if (isset($_SESSION['user_id'])) {
$user_id = $_SESSION['user_id'];
?>

<!-- container der indeholder artikler -->
<div class="container">
    <div class="row">
        <!-- LOOP der genere artikler -->
        <?php
         
            
            
              $query = "SELECT * FROM `product` ORDER BY RAND() LIMIT 30";
	$result = mysqli_query($con, $query);
	if (!$result) die(mysqli_error($con));
	else ($rows = mysqli_num_rows($result));

            
            
            
            
           	 if ($rows > 0) { 
		while($row = mysqli_fetch_array($result)) {
			$product_name = $row['product_name'];
			$description = $row['description'];
			$image_link = $row['image_link'];
			$price = $row['price'];
            $ID = $row['product_id'];

            echo '<div class="col-md-4 col-lg-3">';
            echo '<div class="card mb-4 shadow-sm">';
            
            echo "<h4> $product_name </h4>";

            echo '<img src="';
            echo "$image_link";
            echo ' "class="bd-placeholder-img card-img-top" width="100%" height="225" alt="test">';
            echo '<div class="card-body">';
            echo '<p class="card-text">';
            echo $description . " " . $ID;  
            echo '</p>';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<div class="btn-group">';
            echo '<button type="button" class="btn btn-sm btn-outline-secondary view_data" data-toggle="modal" data-target="#myModal" id="';
            echo $row["product_id"];
            echo '">Se vare</button>';
            echo '<input type="button" name="view" value="view" id="11" class="btn btn-info btn-xs view_data" />';
            echo '</div>';
            echo '<small class="text-muted">AUH-HUB</small>';
            
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
        }
    } 

    ?>



    </div>
    <button type="submit" class=" align-self-end btn btn-primary btn-block" onClick="window.location.reload();">Indlæs flere..</button>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-left">Blandet LEGO</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="./images/lego.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">
                <p>#LEGO #Blandet #Farver #Kreativ</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-block">Anmod om byttehandel</button>
            </div>
        </div>


    <!-- Modal content-->
    <div class="modal-content" id="dataModal">
      <div class="modal-header">
          <h4 class="modal-title text-left">Blandet LEGO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="modalMain">
          <img src="./images/lego.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">
        <p>#LEGO #Blandet #Farver #Kreativ</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-block">Anmod om byttehandel</button>
      </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
die();
}
/* Hvis ikke brugeren er logget ind vil siden ikke være tilgængelig */
elseif (!isset($_SESSION['user_id'])) {
	?>
<div class="container pt-5">
    <div class=jumbotron>
        <h1>Du har ikke adgang til denne side. Venligst log ind først.</h1>
    </div>
</div>
<?php
}
require_once('includes/footer.php');
die();
?>