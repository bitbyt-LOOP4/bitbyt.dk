<?php
session_start();
require_once('conn.php');
$page = 'Oprettelse af legetøj';
require_once('includes/header.php');


print_r($_POST);

    
/*husk at fjerne parrentes og tuborgklamme efter toytitle */
     if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['product_cat']) && isset($_POST['product_con'])) {
         
         
    $product_name = get_post($con, 'product_name');
    $description = get_post($con, 'description');
    $price = get_post($con, 'price');
    $cat_id = get_post($con, 'product_cat');
    $con_id = get_post($con, 'product_con');
   

         
         
       
         
         
         $q_prod ="INSERT INTO product(product_name, description, price, cat_id, con_id, timestamp) VALUES('$product_name', '$description', '$price', '$cat_id', '$con_id', NOW())" ;
             $r_prod = mysqli_query($con, $q_prod);
         if(!$r_prod) die(mysqli_error($con));
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
              <!--  <h1 class="col-12 col-md-11">Oprettelse af legetøj</h1> -->

            </div>
        </div>

        
    </header>
    <div class="container">
        <fieldset>
            <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <div class="form-row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-md-8 col-12">
                        <h2 class="col-12 col-md-8">Opret legetøj</h2>
                        <div class="col-12 col-md-8 mb-4">
                            <label for="validationCustom01">Titel på legetøj</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="eks. lego super heros" name="product_name" required>

                        </div>
                        <br>
                        <div class="col-md-8 mb-4">
                            <label for="validationCustom01">Beskrivelse</label>
                            <textarea type="textbox" rows="5" class="form-control" id="validationCustom02" placeholder="eks. superhelte i god stand.." name="description" required></textarea>


                        </div>

                        <div class="col-md-8 mb-4">
                            <label for="validationCustom01">Pris</label>
                            <input type="number" class="form-control" id="validationCustom02" placeholder="100" name="price" required>

                        </div>

                     <td class="col-md-8 mb-4">Kategorier</td> 
                       <div class="col-md-8 mb-4"><select name="product_cat" class="custom-select">
                                <option selected value="">Vælg en kategori</option>
                                <?php 
                        $query = "SELECT * from product_cat ORDER BY category_name";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_assoc($result)) {
                                    $cat_id = $row1['cat_id'];
                                    $cat_name = $row1['category_name'];
                                ?>
                                <option value="<?php echo $cat_id;?>"><?php echo $cat_name;?>
                                </option>


                                <?php
                                }
                                ?>
                            </select>

                         
                        </div>
                        
                     <td class="col-md-8 mb-4">Stand</td> 
                       <div class="col-md-8 mb-4"><select name="product_con" class="custom-select">
                                <option selected value="">Angiv standen på produktet</option>
                                <?php 
                        $query = "SELECT * from product_con ORDER BY product_condition";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_assoc($result)) {
                                    $con_id = $row1['con_id'];
                                    $product_con = $row1['product_condition'];
                                ?>
                                <option value="<?php echo $con_id;?>"> <?php echo $product_con;?>
                                </option>


                                <?php
                                }
                                ?>
                            </select>

                         
                        </div>
                        
                        
        

                    </div>
                </div>
                <div class="col-md-2"></div>
                <br>

                <button class="btn btn-primary" type="submit">Upload</button>
                <div class="invalid-feedback"> Tryk "Upload" for at udbyde legetøj. </div>

            </form>
            <br><br>

        </fieldset>
    </div>

</body>

</html>
<?php

function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
?>
<?php
require_once('includes/footer.php');
?>
