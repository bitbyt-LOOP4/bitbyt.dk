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
               // Går ind i databasen og henter produkter fra vedkommende som har anmodet om et byt    
              $query = "SELECT Tilbud.* FROM `Product` Tilbud
                            JOIN `Transactions` T ON Tilbud.product_id = T.product1_id
                            JOIN `Product` Offer ON Offer.product_id = T.product2_id
                        WHERE Offer.kid_id = '$user_id'";
                     
    
                    /* Bruges hvis der sættes kid_id ind i transactions i databasen
                    
                    SELECT Tilbud.* FROM `Product` Tilbud
                           JOIN `Transactions` T ON Tilbud.product_id = T.product1_id  
                        WHERE T.kid2_id = '$user_id'  */
        
	$result = mysqli_query($con, $query);
	if (!$result) die(mysqli_error($con));
	else ($rows = mysqli_num_rows($result));

                     
           	 if ($rows > 0) { 
                while($row = mysqli_fetch_array($result)) {
                    $product_name = $row['product_name'];
                    $description = $row['description'];
                    $image_link = $row['image_link'];
                    $price = $row['price'];
                    $product_id = $row['product_id'];
        ?>
        <div class="col-md-4 col-lg-3">
            <div class="card mb-4 shadow-sm">

                <h4> <?php echo $product_name?> </h4>

                <img src="<?php echo $image_link;?> " class="bd-placeholder-img card-img-top" width="100%" height="225" alt="test">
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $description ?>

                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary view_data" id="<?php  echo $row['product_id']?>">Se vare</button>

                        </div>
                        <small class=" text-muted">AUH-HUB</small>


                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
    } 
    ?>

        <div id="dataModal" class="modal fade">
            <div class="modal-dialog" id="product_detail">
            </div>
        </div>

        <script>
            $(document).ready(function() {
                console.log("ready!");
                $('.view_data').click(function() {
                    var product_id = $(this).attr("id");
                    $.ajax({
                        url: "popup.php",
                        method: "post",
                        data: {
                            product_id: product_id
                        },
                        success: function(data) {
                            $('#product_detail').html(data);
                            $('#dataModal').modal("show");
                        }
                    });
                });
            });

        </script>

        <?php
require_once('includes/footer.php');
    ?>



        <?php
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
?>

        <?php
die();
?>
