<?php

require_once('conn.php');
    
/*husk at fjerne parrentes og tuborgklamme efter toytitle */
     if (isset($_POST['product_name'])) {
    $product_name = get_post($con, 'product_name');
    

         
         $query ="INSERT INTO product(product_name) VALUES('$product_name')";
             $result = mysqli_query($con, $query);
         if(!$result) die(mysqli_error($con));
         else {
             echo "Nu skal din mor eller far blot udfylde sine informationer";
         }
     }





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
					<input type="text" class="form-control" id="validationCustom01" placeholder="eks. lego super heros" name="product_name" required>
					
				</div>
                <div>
                
                
                </div>
                
                <br> 
            
          
				</div>
			
			<button class="btn btn-primary" type="submit">Upload</button>
            <div class="invalid-feedback"> Tryk "Upload" for at udbyde legetøj. </div>
           
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