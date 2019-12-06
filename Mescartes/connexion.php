<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Inscription</title>
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" media="only screen and (orientation:portrait) and (min-width : 480)" href="css/accueil.css">
    <link rel="stylesheet" media="only screen and (orientation:portrait) and (min-width : 768)" href="css/accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
    <body>
      <header>
        <div class="container-fluid">
        <div class="row">
                <div class="col-3">
                        <!-- Simulate a smartphone / tablet -->
                <div class="mobile-container">

                <!-- Top Navigation Menu -->
                <div class="topnav">
                <a href="#home" class="active"></a>
                <div id="myLinks">
                <a href="accueil.php"><img class="imgMenu" src="img/Mescartes.png" alt=""> </a>
                      <a href="#news">Nom d'utilisateur</a>
                      <a href="accueil.php">Accueil</a>
                      <a href="mesfavoris.php">Mes favoris</a>
                      <a href="mescartesdefid.php">Mes cartes de fidélités</a>
                      <a href="mescartesdevisi.php">Mes cartes de visites</a>
                      <a href="#about">Ajouter un ami</a>
                      <a href="#about">Déconnexion</a>                                     
    

                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
                </div>
                <!-- End smartphone / tablet look -->
                </div>
                </div>
                <div class="col-9">
                  <div class="logo">    
                    <img src="img/Mescartes.png" alt=""> 
                  </div> 
                </div>
          </div>
          </div>      
  </header>
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
                          <a href="">Mot de passe oublié</a> 
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
                                <button type="button" class="btn btn-primaryform1">Première connexion</button>
                        </div>
              </form>                      
        </div>
      </div>                                                       
      </main>
      <footer>
        
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/accueil.js"></script>
  </body>
</html>