<?php 
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
                <h4 class="modal-title text-left"><?php echo $product_name?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $image_link?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">
                <p><?php echo $description?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-block">Anmod om byttehandel</button>
            </div>
        </div>
          
        <?php  
      }  
 }  
 ?>
