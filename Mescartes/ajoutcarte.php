
<?php
include("includes/header.php");
include("includes/navigation.php");

?>
 <main>
        <h2>SELECTIONNER VOTRE CARTE</h2>
        <div class="container">
                <div class="row">
                  <div class="col-6">
                        <button type="button" class="btn btn-light1">Carte de visite</button>
                  </div>
                  <div class="col-6">
                        <button type="button" class="btn btn-light11">Carte de fidélité</button>
                    
                  </div>
                </div>
        </div>
    <div class="container">
      <div class="text-center">
            <div class="container">
                    <div class="row">
                      <div class="col-6">
                            <div class="dropdown">
                                    <a class="btn btn-secondaryajout dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Catégories
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                      </div>
                      <div class="col-6">
                            <div class="dropdown">
                                    <a class="btn btn-secondaryajout1 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Enseignes
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </div>
                      </div>
                    </div>
              </div>
            <img src="https://www.carpeconcept.com/8681-home_default/carte-de-fidelite.jpg" class="rounded" alt="">
          </div>
          <div class="text-center">
            <?php
              include("includes/forms/visite.php");
            ?>
          </div>
         
    </div>


      </main>
<?php
include("includes/footer.php");

?>
