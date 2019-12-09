
<?php

include("includes/header.php");
include("includes/navigation.php");

$_SESSION["carte"] = "visite";
?>
     <main>
          <h2>MES CARTES DE VISITES</h2>
                  <div class="container">
                      <a href="ajoutcarte.php" class="btn btn-outline-success1" role="button" type="button" >AJOUTER</a>
                      <nav class="navbar navbar-light bg-light">
                            <form class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              
                            </form>
                          </nav>
                          <table id="example" class="display" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Extn.</th>
                                      <th>Start date</th>
                                      <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                      
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Extn.</th>
                                      <th>Start date</th>
                                      <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>

                                  </tr>
                              </tfoot>
                          </table>
                      </div>   
      </main>
<?php
include("includes/footer.php");

?>

