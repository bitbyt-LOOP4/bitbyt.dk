<?php
$page = 'bitbyt';
require_once('includes/header.php');
if (isset($_SESSION['user_id'])) {
$user_id = $_SESSION['user_id'];
?>


<div class="container">

  

    <select name="transactions" class="custom-select">
        <option selected value="">godkend ja eller nej</option>
        <?php 
                        $query = "SELECT * from transactions";    
                        $result = mysqli_query($con, $query);
                        $rows = mysqli_num_rows($result);
                            
                                while($row1 = mysqli_fetch_assoc($result)) {
                                    $product1_id = $row1['product1_id'];
                                    $product2_id = $row1['product2_id'];
                                ?>
        <option value="<?php echo $product1_id;?>"><?php echo $product2_id;?>
        </option>


        <?php
                                }
                                ?>
    </select>



</div>










<?php
}
require_once('includes/footer.php');
?>

<?php
die();
?>
