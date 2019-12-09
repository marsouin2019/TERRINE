<?php
include("includes/header.php");
include("includes/navigation.php");
$_SESSION["carte"] = "fidelite";

?>
      <main>
          <h2>MES CARTES DE FIDÉLITÉ</h2>
                  <div class="container">
                  <a href="ajoutcarte.php" class="btn btn-outline-success1" role="button" type="button" >AJOUTER</a>
                      <nav class="navbar navbar-light bg-light">
                            <form class="form-inline">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                          </nav>
                          <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td><strong>Nom de l'enseigne</strong></td>
                                    <td>Mullet, Australian Salmon</td>
                                    <th><a href="traitement_carte.php.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                  </tr>
                                  <tr>
                                        <td><strong>Nom de l'enseigne</strong></td>
                                        <td>Mullet, Australian Salmon</td>
                                        <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                      </tr>
                                  <tr>
                                      <tr>
                                    <td><strong>Nom de l'enseigne</strong></td>
                                    <td>Mullet, Australian Salmon</td>
                                    <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                  </tr>
                                  <tr>
                                        <td><strong>Nom de l'enseigne</strong></td>
                                        <td>Mullet, Australian Salmon</td>
                                        <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                    </tr>
                                  <tr>
                                      <td><strong>Nom de l'enseigne</strong></td>
                                      <td>Mullet, Australian Salmon</td>
                                      <th><a href="traitement_carte.php" class="btn btn-delete" role="button" type="submit" >Supprimer</a></th>
                                  </tr>
                                </tbody>
                              </table> 
                      </div>   
      </main>
      <?php
include("includes/footer.php");

?>