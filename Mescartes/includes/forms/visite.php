<form name="visite" method="POST" action="class/traitement.php" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="" name="carte" accept="image/png, image/jpeg">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Nom" name="nom">
    <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Prénom" name="prenom">
    <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="row">
              <div class="col-6">
                  <a href="index.php" class="btn btn-primary1" type="button">Revenir en arrière</a>
              </div>
              <div class="col-6">
                  <button class="btn btn-primary2" type="submit">Ajouter</button>
              </div>
            </div>
</form>

