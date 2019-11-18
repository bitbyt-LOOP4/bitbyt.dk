<?php
require_once('conn.php');
?>

<td class="col-md-8 mb-4">Kategorier</td> 
                       <div class="col-md-8 mb-4"><select name="product_cat" class="custom-select">
                                <option selected value="">Vælg en kategori</option>
                                <?php 
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

                         
                        </div>
<?php

if isset($_POST['category_name'])) {
$category_name = get_post($con, 'category_name');
    
    
 $q_cat ="INSERT INTO product_cat(category_name) VALUES('$category_name')";
             $r_cat = mysqli_query($con, $q_cat);
         if(!$r_cat) die(mysqli_error($con));
}
?>

<?php

function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
?>
<?php