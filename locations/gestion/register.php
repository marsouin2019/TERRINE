<?php
include("../include/head.php");
?>
<body>
<?php
  include("../include/menu.php");
?>



<div class="container">
  <div class="row">
   <div class="col-2">
    <?php
    include("../include/sidebar.php");
    ?>
  </div>
<div class="col-10">
    <div class="container content">
    <form method="POST" action="traitement.php" id="frmRegister">
  <div class="form-group">
    <label for="">Prenom</label>
    <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquer prenom (*)" name="frmprenom" required>
    <small id="prenomHelp" class="form-text text-muted">Ce champ est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquer nom (*)" name="frmnom" required>
    <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmemail" required>
    <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="frmPass" aria-describedby="" placeholder="Indiquer mot de passe(*)" name="frmpass" required>
    <small id="passwordHelp" class="form-text text-muted">Caractères de 6 à 12. Champ obligatoire.</small>
  </div>
 
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="frmPassb" aria-describedby="" placeholder="Confirmer votre mot de passe(*)" name="frmpassd" required>
    <small id="passwordbHelp" class="form-text text-muted">Vous devez confirmer votre saisie.</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>    
   </div>
   </div>
   </div>
   </div>

  <?php
  include("../include/footer.php");
  ?>