

<body>

  <!-- Header - set the background image for the header in the line below -->
  <?php
  $titlePage="Register page";
  include("includes/header.php");
  
  $_SESSION = array();
  session_destroy();

  print_r($_SESSION);
?>
 <?php
  include("includes/navigation.php");
?>


  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Register</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form method="POST" action="traitement.php" id="frmRegister">
      <div class="form-group">
     <label for="">civilite</label> 
    <select class="custom-select mr-sm-2" id="frmCivilite" name="frmCivilite">
        <!-- <option selected> Civilité </option> -->
        <option value="M">Monsieur</option>
        <option value="Mme">Madame</option>
      </select>
  </div>
  <div class="form-group">
    <label for="">Prenom</label>
    <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquer prenom (*)" name="frmPrenom" required>
    <small id="prenomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquer nom (*)" name="frmNom" required>
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="frmAdresse" aria-describedby="" placeholder="Indiquer adresse (*)" name="frmAdresse" required>
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Complémentaire</label>
    <input type="text" class="form-control" id="frmComplementaire" aria-describedby="" placeholder="Indiquer complémentaire (*)" name="frmComplementaire">
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Ville</label>
    <input type="text" class="form-control" id="frmVille" aria-describedby="" placeholder="Indiquer ville (*)" name="frmVille" required>
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Postale</label>
    <input type="text" class="form-control" id="frmPostale" aria-describedby="" placeholder="Indiquer postale (*)" name="frmPostale" required>
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Télephone</label>
    <input type="text" class="form-control" id="frmTelephone" aria-describedby="" placeholder="Indiquer telephone (*)" name="frmTelephone" required>
    <small id="nomHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmEmail" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="frmPass" aria-describedby="" placeholder="Indiquer mot de passe(*)" name="frmPass" required>
    <small id="passwordHelp" class="form-text text-muted">Doit contenir entre 8 et 20 caractères.</small>
  </div>
  <input type="submit" class="btn btn-primary" name="frmForm" value="frmRegister">
</form>    
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      
    </div>
  </section>

  <?php
  include("includes/footer.php");
?>
