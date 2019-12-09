<?php
include("includes/header.php");
include("includes/navigation.php");

?>
      <main>
        <div class="containerco1">
                <form name="connexion" method="POST" action="class/traitement.php" id="frmConnex">
                        <div class="form-group1">
                          <label for="exampleInputEmail1" class="textco1">Adresse mail</label>
                          <input type="email" class="form-control" id="frmEmail" aria-describedby="emailHelp" placeholder="Indiquer email" name="frmEmail" >
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group2">
                          <label for="exampleInputPassword1" class="textco1">Mot de passe</label>
                          <input type="password" class="form-control" id="frmPassword" placeholder="Indiquer mot de passe" name="frmPassword">
                          
                        </div>
                        <!-- Button trigger modal -->
                        <div class="container">
                        <p class="info"><a href="#" data-target="#exampleModalCenter" data-toggle="modal">Mot de passe oublié?</a></p>
                        </div>

                        
                                                  
                                <button type="submit" class="btn btn-primaryform" name="frmCartes" value="frmConnex"></button>
                                <div class="ou">
                                        <p>OU SE CONNECTER AVEC</p>
                                </div>
                                  <div class="row">
                                    <div class="col-6">
                                            <button type="button" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></button>
                                      </div>
                                    <div class="col-6">
                                            <button type="button" class="btn btn-social-icon btn-google" ><span class="fa fa-google"></span></button>
                                      </div>
                                  </div>
                        </div>
                        <div class="form-group4">
                               <a href="inscription.php" button type="button" class="btn btn-primaryform1">Première connexion</button></a> 
                        </div>
              </form> 
              
              
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                              aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h2 class="modal-title" id="exampleModalLongTitle">Mot de passe oublié?</h2>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <p>Entrez votre adresse e-mail</p>
                                          <div class="panel-body">
                                            <form action="traitement.php" method="post" name="frmPass" id="frmPass">
                                              <fieldset>
                                                  <div class="form-group">
                                                      <input class="form-control input-lg" placeholder="Addresse E-mail" name="frmEmail" type="email" required>
                                                  </div>
                                                  <button type="submit" class="btn btn-lg btn-dark btn-block" name="frmForm" value="frmPass">Envoyez mon mot de passe</button>
                                              </fieldset>
                                            </form>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                                      </div>
                                  </div>
                              </div>
                          </div>



                          <!-- Modal -->
        </div>
      </div>                                                       
      </main>
<?php
include("includes/footer.php");

?>