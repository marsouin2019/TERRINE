// traitement champs formulaire obligatoire
$(document).ready(function(){
    // le form, champs, type
    $("#frmInscription input[type='text']").blur(function(){
       if(!$(this).val()){
            //faire quelque chose
            $(this).addClass("error");
       } else{
           //faire autre chose
           $(this).removeClass("error");
       }
    });
    $("#frmEmail input[type='email']").blur(function(){
        if(!$(this).val()){
             //faire quelque chose
             $(this).addClass("error");
        } else{
            //faire autre chose
            $(this).removeClass("error");
        }
     });

    $("#frmInscription").validate();
});

function randString(id){
    var dataSet = $(id).attr('data-character-set').split(',');
    var possible = '';
    if($.inArray('a-z', dataSet) >= 0){
      possible += 'abcdefghijklmnopqrstuvwxyz';
    }
    if($.inArray('A-Z', dataSet) >= 0){
      possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if($.inArray('0-9', dataSet) >= 0){
      possible += '0123456789';
    }
    if($.inArray('#', dataSet) >= 0){
      possible += '![]{}()%&*$#^<>~@|';
    }
    var text = '';
    for(var i=0; i < $(id).attr('data-size'); i++) {
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
  }

  // Create a new password on page load
  $('input[rel="gp"]').each(function(){
    $(this).val(randString($(this)));
  });

  // Create a new password
  $(".getNewPass").click(function(){
    var field = $(this).closest('div').find('input[rel="gp"]');
    field.val(randString(field));
  });

  // Auto Select Pass On Focus
  $('input[rel="gp"]').on("click", function () {
     $(this).select();
  });

  console.log ($("#frmMDP").val(1))
  $("#frmMDP2").val($("#frmMDP").val())