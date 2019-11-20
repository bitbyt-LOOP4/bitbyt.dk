<?php 

            
          if(isset($_POST['btn-submit'])){     
                echo "submit";  
             }
          


if(isset($_POST["product_id"]))  
 {  

      require_once('conn.php');  
     $query = "SELECT * FROM product WHERE product_id = '".$_POST["product_id"]."'";  

      $result = mysqli_query($con, $query);  

      while($row = mysqli_fetch_array($result))  
      {  
            $product_name = $row['product_name'];
			$description = $row['description'];
			$image_link = $row['image_link'];
			$price = $row['price'];
            $product_id = $row['product_id'];
          ?>
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-left" product="<?php echo $product_id ?>"><?php echo $product_name?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $image_link?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">
                <p><?php echo $description?></p>
                
            </div>
            <div class="modal-footer">
                
                
                
                
                
                
<div class="col-md-8 mb-4"><select name="product_cat" class="custom-select">
                                <option selected value="">Vælg en vare du vil bytte</option>
                                <?php 
                        $kid1_id = $_POST["user_id"];
                        $query = "SELECT * From product WHERE kid_id = '".$_POST["user_id"]."'";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_assoc($result)) {
                                    $product1_id = $row1['product_id'];
                                    $product1_name = $row1['product_name'];
                                    $kid2_id = $row1['kid_id'];
                                ?>
                                <option value="<?php echo $product1_id;?>"><?php echo $product1_name;?>
                                </option>


                                <?php
                                }
                                ?>
                            </select>

                         
                        </div>
                
                
                
                
                
                
                
                <button class="btn btn-primary .btn" name="btn-submit" type="submit">Anmod om byttehandel</button>
        

                

          
            
                
                
                

                
                
                
                
                
            </div>
        </div>
          
        <?php  
      }


 }



 ?>
