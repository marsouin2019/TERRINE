//$("frmRegister").validate();


// verifier taille champs password


$( "#frmPrenom" ).blur(function() {
    if( $(this).val().length == 0 )
    {
     $(this) .addClass("is-invalid");
    }else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  });

  $( "#frmNom" ).blur(function() {
    if( $(this).val().length == 0 )
    {
     $(this) .addClass("is-invalid");
    }else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  });

  $( "#frmEmail" ).blur(function() {
    if( $(this).val().length == 0 )
    {
     $(this) .addClass("is-invalid");
    }else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  });

  $( "#frmPass" ).blur(function() {
    if( $(this).val().length == 0 )
    {
     $(this) .addClass("is-invalid");
    }else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  });

  $( "#frmPass2" ).blur(function() {
    if( $(this).val().length == 0 )
    {
     $(this) .addClass("is-invalid");
    }else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  });

  $("#frmPass").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    //teste si chaine plus petite que 6 caractères
    if($(this).val().length < 6)
    {
      $(this).addClass("is-invalid");
    }else{
    //teste si chaine est pluus petite que 12 caractères
    if($(this).val().length > 12)
    {
      $(this).addClass("is-invalid");
    } else{
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
    }
   // $(this).removeClass("is-invalid").addClass("is-valid");
  }
  }); 

  $("#frmPass2").blur(function(){
    if($(this).val().length == 0)
    {
     $(this).addClass("is-invalid");
    }else {
      //test valeur du mot de passe
      if($(this).val() != $("#frmPass").val())
      {
        $(this).addClass("is-invalid");
      }else{
        $(this).removeClass("is-invalid").addClass("is-valid");
      }
    }
  });

  $page=preg_replace("/[^a-z0-9_ ]/i", "", $page);
if(!@include("includes/$page.php"))die("Cette page n'existe pas sur le serveur, merci d'informer le webmaster du site si ce problème venait à se reproduire.");