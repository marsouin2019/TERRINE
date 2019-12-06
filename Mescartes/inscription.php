<?php
include("includes/header.php");
include("includes/navigation.php");

?>
      <main>
            <h2>FORMULAIRE D'INSCRIPTION</h2>
            <div class="containerform">
            <form method="POST" action="class/traitement.php" id="frmInscrit">
                      <div class="needs-validation" >
                            <div class="form-row">
                              <div class="col-6">
                                <label for="validationCustom01"></label>
                                <input type="text" class="form-control1" id="frmNom" placeholder="indiquer votre nom (*)" name="frmNom" required>
                                <div class="valid-feedbacknom">
                                </div>
                              </div>
                              <div class="col-6">
                                <label for="validationCustom01"></label>
                                <input type="text" class="form-control2" id="frmPrenom" name="frmPrenom" placeholder="indiquer votre prénom(*)" required>
                                <div class="valid-feedbackprenom">
                            
                                </div>
                              </div>
                        </div>           
            </div>
            <div class="containerform2"></div>
            <div class="needs-validation">
                    <div class="form-row">
                        <label for="validationCustom01"></label>
                        <input type="email" class="form-control3" id="frmEmail"  name="frmEmail" placeholder="indiquer votre email(*)" required>
                        <div class="valid-feedbackmail">
                          
                        
                      </div>
                    </div>   
                    
              </div>
            <div class="needs-validation" >
                    <div class="form-row">
                        <label for="validationCustom01"></label>
                        <input type="password" class="form-control4" id="frmPassword" name="frmPassword" placeholder="indiquer votre mot de passe(*)" required>
                        <div class="valid-feedbackmdp">
                               
                                </div>
                              </div>
            </div>
            <div class="needs-validation" >
                    <div class="form-row">
                        <label for="validationCustom01"></label>
                        <input type="password" class="form-control5" id="frmPasswordb" name="frmPasswordb" placeholder="confirmez votre mot de passe(*)" required>
                        <div class="valid-feedbackcmdp">
                        
                    </div>
              </div>
              <button type="submit" class="btn btn-primaryform" name="frmCartes" value="frmInscrit" ></button>
              </div> 
            </form>                                            
      </main>
      <?php
include("includes/footer.php");

?>