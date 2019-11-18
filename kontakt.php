<?php 
$page='bitbyt.dk';
require_once('includes/header.php');
?>

<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <form action="contactform.php" method="post">
                <div class="card rounded-0">
                    <div class="card-header p-0">
                        <div class="text-center bg-bitbyt py-2">
                            <h3><i class="fa fa-envelope"></i> Kontakt</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user purple-bitbyt"></i></div>
                                </div>
                                <input type="text" name="brugernavn" class="form-control" placeholder="Brugernavn" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope purple-bitbyt"></i></div>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="abc@mail.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment purple-bitbyt"></i></div>
                                </div>
                                <textarea class="form-control" name="besked" placeholder="Besked" required></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn-registrer">SEND MAIL</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
 </div>
</div>

<?php
$brugernavn = $_POST['brugernavn'];
$email = $_POST['email'];
$besked = $_POST['besked'];
$content="Fra: " . $brugernavn . "\n" . $besked;
$modtager = "support@bitbyt.dk";
$subject = "Besked fra bruger";
$mailheader = "Fra: " . $email;
mail($modtager, $subject, $content, $mailheader) or die("Error!");
echo "Din mail er nu sendt!";
?>

<?php 
require_once('includes/footer.php');
?>
