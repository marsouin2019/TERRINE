
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
