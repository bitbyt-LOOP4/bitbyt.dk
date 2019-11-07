<?php

//*$page = "kid Registration: bitbyt";

session_start();
require_once('../conn.php');
    

     if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age'])){
    $first_name = get_post($con, 'first_name');
    $last_name = get_post($con, 'last_name');
    $username = get_post($con, 'username');
    $password = get_post($con, 'password');
    $age = get_post($con, 'age');
    
         $hash = password_hash($password, PASSWORD_DEFAULT);
         
         $query1 ="INSERT INTO kid(username, password)
         VALUES('$username', '$hash')";
          $result = mysqli_query($con, $query1);
         if(!$result) die(mysqli_error($con));
         
         $query ="INSERT INTO kid_info(first_name, last_name, age, timestamp) VALUES('$first_name', '$last_name', '$age', NOW())";
             $result = mysqli_query($con, $query);
         if(!$result) die(mysqli_error($con));
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
    <header class="kid_registration">
        <div class="container_registraion text-center">
            <div class="box-registration">
            <h1>Bruger registrering</h1>
            
            </div>
        </div>
    
    </header>
    <fieldset>
    <legend>
        <h2>Børne oprettelse</h2>
        </legend>
    <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<div class="form-row">
				<div class="col-md-6 mb-4">
					<label for="validationCustom01">Fornavn</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="fornavn" name="first_name" required>
					
				</div>
				<div class="col-md-6 mb-4">
					<label for="validationCustom02">Efternavn</label>
					<input type="text" class="form-control" id="validationCustom02" placeholder="efternavn" name="last_name" required>
					
				</div>
                <div class="col-md-6 mb-4">
					<label for="validationCustom02">Alder</label>
					<input type="text" class="form-control" id="validationCustom02" placeholder="00" name="age" required>
                    <div class="invalid-feedback"> Indtast venligst din alder. </div>
					
				</div>
                <div class="col-md-6 mb-4">
						<label for="validationCustomPasword">Brugernavn</label>
						<div class="input-group">
							<input type="username" class="form-control" id="validationCustomPassword" placeholder="brugernavn" aria-describedby="inputGroupPrepend" name="username" required>
							<div class="invalid-feedback"> Indtast venligst et brugernavn. </div>
						</div>
					</div>
				
					<div class="col-md-6 mb-4">
						<label for="validationCustomPasword">Kodeord</label>
						<div class="input-group">
							<input type="password" class="form-control" id="validationCustomPassword" placeholder="********" aria-describedby="inputGroupPrepend" name="password" required>
							<div class="invalid-feedback"> Indtast venligst et kodeord. </div>
                            
						</div>
					</div>
				</div>
			<!--knappen fungere ikke-->
			<button class="btn btn-primary" type="next">Næste</button>
        <button onclick="window.location.href='/register_parrent.php'"></button>    
        <div class="invalid-feedback"> Tryk "næste" for forældre registrering. </div>
            
		</form>
		<br><br>    
    
    </fieldset>
</body>
</html>
	<?php

function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
?>