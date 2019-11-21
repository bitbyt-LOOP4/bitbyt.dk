<?php
$page = 'Oprettelse af legetøj';
require_once('includes/header.php');


     if (isset($_POST['product_name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['product_cat']) && isset($_POST['product_con']) && isset($_POST['image_name']) && isset($_FILES['image'])) {
         
    $image_name = $_POST['image_name'];
    $current_dir = getcwd();
    $upload_directory = "/images/uploads/";
    $errors = [];
    $file_extensions = ['jpeg','jpg','png','JPEG','JPG','PNG']; 
    $file_name = $_FILES['image']['name']; //Gets the original name of the file
    $file_size = $_FILES['image']['size']; //Gets the size of the file
    $file_tmp_name  = $_FILES['image']['tmp_name']; //Gets the temporary name assigned to the file while processing
    $file_type = $_FILES['image']['type']; //Gets the file type
	$tmp = explode('.', $file_name);
	$file_extension = end($tmp);
	
	//Sets the upload path from the current directory, adds a random number to the beginning of the filename of the returned filename from the specified pathto avoid duplicated names 
	$upload_path = $current_dir . $upload_directory . rand(1, 1000) . basename($file_name); 
	$target_file = $upload_directory . rand(1, 1000) . basename($file_name);
	
         
    $product_name = get_post($con, 'product_name');
    $description = get_post($con, 'description');
    $price = get_post($con, 'price');
    $cat_id = get_post($con, 'product_cat');
    $con_id = get_post($con, 'product_con');
    $kid_id = $_SESSION['user_id'];
   

         
        if (isset($_POST['submit'])){
            
            if ($file_size > 20000000) {
                $errors[] = "Billedet fylder mere end 2MB, upload venligst et nyt";
            }
            if (empty($errors)) {
                $did_upload = move_uploaded_file($file_tmp_name, $upload_path);
            if ($did_upload) {
                $filename = basename($upload_path);
                $image_path = "." . $upload_directory . $filename;
            } else {
                echo "Der opstod en fejl, prøv igen.";
            }
                
            
        
            $query = "INSERT INTO product(image_name, image_link, product_name, description, price, cat_id, con_id, kid_id) VALUES('$image_name', '$image_path', '$product_name', '$description', '$price', '$cat_id', '$con_id', '$kid_id')";
            $result = mysqli_query($con, $query);
            if (!$result) die (mysqli_error($con));
            else {
              
                echo "<h2 class='bg-bitbyt text-center'>Dit opslag er nu lagt op!</h2>";
            }
            }
            else {
                foreach ($errors as $error) {
                echo "<script>alert('" . $error . "');
				window.location.href='upload_1.php';
				</script>";
				die();    
                }
            }
        } 
         
        
     }



?>


<header class="text-center pt-3">

    <h1>Opret opslag</h1>


</header>
<br>
<br>

<div class="container pt-3">
    <fieldset>
        <form novalidate method="post" enctype="multipart/form-data">


            <div class="row">
                

                
                <div class="col-12 col-md-6 text-left">
                    <label for="validationCustom01">Titel</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Giv dit opslag en titel" name="product_name" required>
                    <br>

                    <label for="validationCustom01">Beskrivelse</label>
                    <textarea type="textbox" rows="5" class="form-control" id="validationCustom02" placeholder="Giv dit opslag en beskrivelse" name="description" required></textarea>

                    <br>

                    <label for="validationCustom01">Pris</label>
                    <input type="number" class="form-control" id="validationCustom02" placeholder="100" name="price" required>

                    <br>

                    <td>Kategorier</td>
                    <select name="product_cat" class="form-control">
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
                    <br>

                    <td>Stand</td>
                    <select name="product_con" class="form-control">
                        <option selected value="">Vælg en stand</option>
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
                    <br>

                </div>
                <div class="col-12 col-md-6 text-left">
                    <input type="file" name="image" class="choose-file">
                    <br>
                    <br>
                    <input type="text" name="image_name" placeholder="Giv billedet et navn" class="image-name" required>


                </div>
                
                
            </div>
            <br>
            <div class="row">

                <div class="col-12 text-center">
                    <button class="btn btn-primary" name="submit" type="submit">Upload</button>
                </div>

            </div>

        </form>

    </fieldset>

</div>
<br>
<br>

<?php 
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}

?>

<?php
require_once('includes/footer.php');
?>
