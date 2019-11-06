<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <header class="toy_registration">
        <div class="container_registraion text-center">
            <div class="box-registration">
            <h1>oprettelse af legetøj</h1>
            
            </div>
        </div>
    
    </header>
    <fieldset>
    <legend>
        <h2>Opret legetøj</h2>
        </legend>
    <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<div class="form-row">
				<div class="col-md-6 mb-4">
					<label for="validationCustom01">Titel på legetøj</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="eks. lego super heros" name="toy_title" required>
					
				</div>
                <br> 
                <div class="col-md6 mb-4">
                    <label for="validationCustom02">Beskrivelse</label>
                    <textarea name="produkt_beskrivelse" cols="50" rows="5">
                    </textarea>
                          
                
                
                </div>
        
                
				<div class="col-md-6 mb-4">
					<label for="validationCustom03">Beskrivelse</label>
					<input type="text" class="form-action" id="validationCustom02" placeholder="legetøjet er i god stand..." name="last_name" required>
					
                    
				</div>
                <div class="col-md-6 mb-4">
					<label for="validationCustom04">Alder</label>
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
			
			<button class="btn btn-primary" type="next">Næste</button>
            <div class="invalid-feedback"> Tryk "næste" for forældre registrering. </div>
            <botton onclick="window.location.href='/register_parrent.php'"></botton>
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