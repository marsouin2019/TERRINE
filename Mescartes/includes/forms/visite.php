<form name="visite" method="POST" action="class/traitement.php" enctype="multipart/form-data">
<div class="container">
      <div class="text-center">
            <div class="container">
                    <div class="row">
                      <div class="col-6">
                      <div class="form-group">
                                    <label for="exampleFormControlSelect1">Catégories</label>
                                    <select class="form-control btn-secondaryajout" id="" name="categorie">
                                      <option value="1">Informatique</option>
                                      <option value="2">Enseignement</option>
                                    </select>
                                </div>
                      </div>
                      <div class="col-6">
                      <div class="form-group">
                                    <label for="exampleFormControlSelect1">Enseignes</label>
                                    <select class="form-control btn-secondaryajout" id="" name="enseigne">
                                      <option value="1">Darty</option>
                                      <option value="2">Fnac</option>
                                    </select>
                        </div>
                            
                      </div>
                    </div>
              </div>
            <img src="https://www.carpeconcept.com/8681-home_default/carte-de-fidelite.jpg" class="rounded" alt="">
          </div>




<div class="form-group">
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="" name="carte" accept="image/png, image/jpeg">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Nom" name="nom">
    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Prénom" name="prenom">
   
  </div>
  <div class="row">
              <div class="col-6">
                  <a href="index.php" class="btn btn-primary1" type="button">Revenir en arrière</a>
              </div>
              <div class="col-6">
                  <button class="btn btn-primary2" type="submit" name="frmCartes" value="frmCarte">Ajouter</button>
              </div>
            </div>
</form>

