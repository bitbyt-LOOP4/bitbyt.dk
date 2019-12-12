<?php
$page = 'Chat room';
require_once('includes/header.php');

?>
<!--<div class="header">-->
<h1>Chat room</h1>

<?php
if(isset($_SESSION['user_id'])) { ?>
    <a class="logout" href="?logout">Logout</a>
    <?php } ?>
   <!-- </div>-->

<div class="main">

<?php if (isset($_SESSION['user_id'])) {
    ?>
    <div id='result'></div>
    <div class='chatcontrols'>
    <form method="post" onsubmit="return submitchat();">
        <input type='text' name='chat' id='chatbox' autocomplete="off" placeholder="enter chat here" />
        
    <input type='submit' name='send' id='send' class='btn btn-send' value='Send' />
        <input type="button" name="clear" class="btn btn-btn" id="clear" value="x" title="clear chat" />
        
        </form>
        //funktion som opretter en chat tilgået af en bruger
        <script>
        
        
        </script>
        
        
    </div>
}


    
    
    <?php 
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}


?>
<?php
require_once('includes/footer.php');
?>
