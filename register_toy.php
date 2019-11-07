<?php

require_once('conn.php');
    
/*husk at fjerne parrentes og tuborgklamme efter toytitle */
     if (isset($_POST['product_name']) && isset($_POST['category_name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['product_condition'])) {
    $product_name = get_post($con, 'product_name');
    $category_name = get_post($con, 'category_name');
    $description = get_post($con, 'description');
    $price = get_post($con, 'price');
    $product_condition = get_post($con, 'product_condition');
    
    
         
         
         $query ="INSERT INTO product_cat(category_name)
         VALUES('$category_name)";
          $result = mysqli_query($con, $query);
         if(!$result) die(mysqli_error($con)) 
         
            } 
      /*       
        $query2 ="INSERT INTO product_con(product_condition)
         VALUES('$product_condition)";
          $result = mysqli_query($con, $query2);
         if(!$result) die(mysqli_error($con));      
             */
     /*        
         $query3 ="INSERT INTO product(product_name, description, price, timestamp) VALUES('$product_name', '$description', '$price', NOW())";
             $result = mysqli_query($con, $query3);
         if(!$result) die(mysqli_error($con));
         else {
             echo "Nu skal din mor eller far blot udfylde sine informationer";
             */ 
         
     


/*indsæt category_name ind i product_cat*/


?>




<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <header class="toy_registration">
        <div class="container_registraion text-center">
            <div class="box-registration">
            <h1>oprettelse af legetøj</h1>
            
            </div>
        </div>
    
    </header>
    <fieldset>
    <legend>
        <h2>Opret legetøj</h2>
        </legend>
    <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<div class="form-row">
				<div class="col-md-6 mb-4">
					<label for="validationCustom01">Titel på legetøj</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="eks. lego super heros" name="toy_title" required>
					
				</div>
                <br> 
            
                <div class="col-md-6 mb-4">
					<label for="validationCustom03">Kategogi</label>
					<input type="text" class="form-action" id="validationCustom02" placeholder="eks. superhelte" name="category_name" required>
					
                    
				</div>
                
             
                <div class="col-md6 mb-4">
               
                    <label for="validationCustom02">Beskrivelse</label>
                    <!--<input type="text" class="form-action" id="validationCustom02" placeholder="legetøjet er næsten nyt og..." name="description" required>-->
                    <textarea name="produkt_beskrivelse" cols="50" rows="5" placeholder="legetøjet er næsten nyt og..." required>
                        
                    </textarea>
                               
                
                </div>
        
                
                <div class="col-md-6 mb-4">
					<label for="validationCustom04">Stand på legetøjet</label>
					<input type="product_condition" class="form-control" id="validationCustom02" placeholder="00" name="product_condition" required>
                    <div class="invalid-feedback"> Angiv venligst standen på dit stykke legetøj. </div>
					
				</div>
                <div class="col-md-6 mb-4">
						<label for="validationCustomPasword">Pris</label>
						<div class="input-group">
							<input type="price" class="form-control" id="validationCustomPassword" placeholder="prisen på produktet" name="price" required>
							<div class="invalid-feedback"> Indtast venligst et brugernavn. </div>
						</div>
					</div>
				
            <?php    
                include 'upload.php';
                    
                    ?>
					<!--<div class="col-md-6 mb-4">
						<label for="validationCustomPasword">Billeder</label>
						<div class="input-group">
							<input type="image_link" class="form-control" id="validationCustomPassword" placeholder="********"  name="image_link" required>
							<div class="invalid-feedback"> Indtast venligst et kodeord. </div>
                            
						</div>
					</div>-->
				</div>
			
			<button class="btn btn-primary" type="next">Upload</button>
            <div class="invalid-feedback"> Tryk "Upload" for at udbyde legetøj. </div>
            <botton onclick="window.location.href='/register_parrent.php'"></botton>
		</form>
		<br><br>    
    
    </fieldset>
</body>
</html>
		<?php

function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
?>