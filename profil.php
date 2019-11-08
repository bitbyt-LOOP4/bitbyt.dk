<?php 
$page='Min profil';
require_once('includes/header.php');
?>
    
    

<!-- Link til Avatar https://publicdomainvectors.org/en/free-clipart/User-3-avatar-vector-clip-art/13634.html -->
    
<div class="container-fluid">
  <div class="row">
      <div class="col-2 profil_container"></div>
    <div class="col-8 profil_container">
        <div class="text-center">
        <img class="avatar" src="images/avatar.PNG">
    <!-- Brugernavn hentes via PHP -->
        <p class="profil_brugernavn">"brugernavn"</p>
            
            <div class="list-group text-right">
              
  <div class="dropdown text-center">
  <button class="btn btn-secondary dropdown-toggle btn-registrer"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-cogs"></i> Indstillinger </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item dropdown_items" href="#!"><i class="fab fa-hubspot"></i> Mine Hubs</a>
    <a class="dropdown-item dropdown_items" href="#!"><i class="fas fa-user-alt"></i> Skift Avatar</a>
    <a class="dropdown-item dropdown_items" href="#!"><i class="fas fa-history"></i> Historik</a> 
  </div>
</div>

</div>
        </div>
      </div>
      <div class="col-2 profil_container">
          
      </div>
      
    </div>
    <br>
    <!-- variabler skal hentes med PHP-->
    <div class="row text-center">
        <div class="col-1"></div>
        <div class="col-3">
            <span class="profil_variabler">2</span>
            <br>
            <span class="under_profil">Hubs</span>
        </div>
        <div class="col-4">
            <span class="profil_variabler">6</span>
            <br>
            <span class="under_profil">Byttehandler</span>
        </div>
        <div class="col-3">
            <span class="profil_variabler">10</span>
            <br>
            <span class="under_profil">Opslag</span>
        </div>
        <div class="col-1"></div>
    
    </div>
    </div>
<br>
     <!-- container der indeholder artikler -->
    <div class="container">
        <div class="row">
            <!-- LOOP der genere artikler -->
            <?php
            function getArticle() {
        for ($x = 1; $x <= 30; $x++) {    
            echo '<div class="col-md-4 col-lg-3">';
            echo '<div class="card mb-4 shadow-sm">';
            echo "<h4>Lejetøj $x </h4>";

            echo '<img src="../images/lego.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">';
            echo '<div class="card-body">';
            echo '<p class="card-text">#LEGO #Blandet #Farver #Kreativ</p>';
            echo '<div class="d-flex justify-content-between align-items-center">';
            echo '<div class="btn-group">';
            echo '<button type="button" class="btn btn-sm btn-outline-secondary " data-toggle="modal" data-target="#myModal">Se vare</button>';
            echo '</div>';
            echo '<small class="text-muted">AUH-HUB</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        }
        getArticle();
    ?>


           
        </div>
          <button type="submit" class=" align-self-end btn btn-primary btn-block" onClick="window.location.reload();">Indlæs flere..</button>
    </div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-left">Blandet LEGO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <img src="../images/lego.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Lego">
        <p>#LEGO #Blandet #Farver #Kreativ</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-block">Anmod om byttehandel</button>
      </div>
    </div>

  </div>
</div>

  

<?php 
require_once('includes/footer.php');
?>
    
    
    
    
    
    