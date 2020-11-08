window.onload = function ejemplo(){ 
 
    if ($modal == $variable)
    {
    alert($modal);
    $('#Modal-Asistencia').modal('show');

    }
} ;

$(document).ready(function(){
  
  $("#nuevo").click(function(){
    $modal="nuevo";
        alert($modal);
         
  });
  $(".botonedit").click(function(e){
    $modal="Editar";
         
  });
  $("#Borrar").click(function(){
    $modal="Borrar";
        alert($modal);
         
  });
  
  
    
});

$(".formOculto").submit(function(e){
    
           
});