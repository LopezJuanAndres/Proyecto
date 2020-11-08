<?php  
include '../Modelo/alumnos_model.php';
$alumnos = new Alumnos;
$lista=$alumnos->GetAlumnos();
$fila=mysqli_fetch_row($lista) ;
$Id=(isset($_POST['txtId']))?$_POST['txtId']:"";
$Nombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$Apellido=(isset($_POST['txtApellido']))?$_POST['txtApellido']:"";
$Documento=(isset($_POST['txtDocumento']))?$_POST['txtDocumento']:"";
$Telefono=(isset($_POST['txtTelefono']))?$_POST['txtTelefono']:"";
$Direccion=(isset($_POST['txtDireccion']))?$_POST['txtDireccion']:"";
$Correo=(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
 $modal="";
 $variable="Editar";
   
 
 if($algo) {
   
 }

    

 switch($accion){
         case "Nuevo":
            $modal="nuevo";
           
     break;
     case "Guardar":
               if ( $modal="Borrar"){
            $alumnos->eliminarAlumno($Id);
        echo "<div class='text-center bg-danger'>Se elimino el alumno'.$Nombre ,$Apellido.' correctamente.</div>";}
        else  if ( $modal="Editar"){
            $alumnos->editarAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo,$Id);
        echo "<div class='text-center bg-danger'>Se modifico el alumno'.$Nombre ,$Apellido.' correctamente.</div>";}
            else if ( $modal="nuevo"){
                $alumnos->añadirAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo);
            echo "<div class='text-center bg-success'>Se agrego un alumno nuevo correctamente.</div>";}
    break;
    case "Editar":
        $modal="Editar";
         
       
    break;
    case "Borrar":
        $modal="Borrar";
        
          break; 
     }



 
include '../Vista/Alumnos_view.php';

include '../Partes/Pie.php';?>