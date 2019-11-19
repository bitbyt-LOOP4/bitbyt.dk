<?php  
 if(isset($_POST["product_id"]))  
 {  
      $output = '';  
     /* include_once 'conn.php'; */
      $query = "SELECT * FROM product WHERE id = '".$_POST["product_id"]."'";  
      $result = mysqli_query($con, $query);  
  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["product_name"].'</td>  
            
   
                ';  
      }  
     
      echo $output;
     echo "popup kore";