<?php 
$page='Min profil';
require_once('includes/header.php');
?>
    
    

<!-- Link til Avatar https://publicdomainvectors.org/en/free-clipart/User-3-avatar-vector-clip-art/13634.html -->
    
<div class="container-fluid">
  <div class="row">
      <div class="col-3 profil_container"></div>
    <div class="col-6 profil_container">
        <div class="text-center">
        <img class="avatar" src="images/avatar.PNG">
    <!-- Brugernavn hentes via PHP -->
        <p class="profil_brugernavn">"brugernavn"</p>
        </div>
      </div>
      <div class="col-3 profil_container">
          <div class="list-group text-right">
              
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-cogs"></i> Indstillinger
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item" href="#!"><i class="fab fa-hubspot"></i> Mine Hubs</a>
    <a class="dropdown-item" href="#!">Skift Avatar</a>
    <a class="dropdown-item" href="#!"><i class="fas fa-history"></i> Historik</a>
  </div>
</div>
              


</div>
          
      </div>
      
    </div>
    <div class="row text-center">
        <div class="col-4">
            <span class="profil_variabler">2</span>
            <br>
            <span class="under_profil">Hubs</span>
        </div>
        <div class="col-4">
            <span class="profil_variabler">6</span>
            <br>
            <span class="under_profil">Opslag</span>
        </div>
        <div class="col-4">
            <span class="profil_variabler">10</span>
            <br>
            <span class="under_profil">Byttehandler</span>
        </div>
    
    </div>
    </div>
    

<?php 
require_once('includes/footer.php');
?>
    
    
    
    
    
    
</body>