function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}



$("#frmEmail").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});
$("#frmPassword").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});


$("#frmPrenom").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});


$("#frmNom").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});


$("#frmPasswordb").blur(function(){
  if($(this).val() != $("#frmPassword").val())
{
  $(this).addClass("is-invalid");
}else{
  $(this).removeClass("is-invalid").addClass("is-valid");
}
});