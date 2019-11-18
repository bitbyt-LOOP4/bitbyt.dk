<?php
$page = 'Oprettelse af legetøj';
require_once('includes/header.php');



require_once('conn.php');
    
/*husk at fjerne parrentes og tuborgklamme efter toytitle */
     if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['category_name']) && isset($_POST['product_condition'])) {
         
         
    $product_name = get_post($con, 'product_name');
    $description = get_post($con, 'description');
    $price = get_post($con, 'price');
    $category_name = get_post($con, 'category_name');
    $product_condition = get_post($con, 'product_condition');

         
         
          $q_con ="INSERT INTO product_con(product_condition) VALUES('$product_condition')" ;
             $r_con = mysqli_query($con, $q_con);
         if(!$r_con) die(mysqli_error($con));

         
          $q_cat ="INSERT INTO product_cat(category_name) VALUES('$category_name')";
             $r_cat = mysqli_query($con, $q_cat);
         if(!$r_cat) die(mysqli_error($con));
         
         
         
         $q_prod ="INSERT INTO product(product_name, description, price, timestamp) VALUES('$product_name', '$description', '$price', NOW())" ;
             $r_prod = mysqli_query($con, $q_prod);
         if(!$r_prod) die(mysqli_error($con));
         else {
             echo "Nu skal din mor eller far blot udfylde sine informationer";
         }
     }





?>




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

                      <!--  <div class="col-md-8 mb-4" ->
                            <label>Produktets stand</label>
                            <td class="col-md-1"><select name="product_con" class="custom-select">
                                    <option selected value="">Angiv standen på dit produkt</option>

                                    <?php /*
                        $query = "SELECT * from product_con";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_array($result)):;
                                ?>
                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                                    </option>


                                    <?php
                                endwhile;
                                ?>
                                </select>

                            </td>
                        </div> -->


                       <!-- <td class="col-md-8 mb-4">Kategorier</td> -->
                      <!--  <div class="col-md-8 mb-4"><select name="product_cat" class="custom-select">
                                <option selected value="">Vælg en kategori</option>
                                <?php /*
                        $query = "SELECT * from product_cat ORDER BY category_name";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_array($result)):;
                                ?>
                                <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                                </option>


                                <?php
                                endwhile;
                                ?>
                            </select>

                         <?php
                        /*  include_once'upload.php';     */ 
                        ?> 
                        </div> -->
        

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
