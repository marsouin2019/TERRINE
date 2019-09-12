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

  $("#frmPass").blur(function(){
    if($(this).val().length == 0)
  {
    $(this).addClass("is-invalid");
  }else{
    //teste si chaine plus petite que 8 caractères
    if($(this).val().length < 8)
    {
      $(this).addClass("is-invalid");
    }else{
    //teste si chaine est pluus petite que 020 caractères
    if($(this).val().length > 20)
    {
      $(this).addClass("is-invalid");
    } else{
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
    }
  
  }
  });