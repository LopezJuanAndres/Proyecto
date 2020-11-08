<?php 
include 'Conectar.php';
class Alumnos extends Conectar {

  
 public function GetAlumnos(){
        $sql="SELECT * FROM alumnos"; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metod     
      return$result; 
      }
      public function BuscarAlumno($Nombre){
        $sql="SELECT * FROM alumnos WHERE `Nombre`='$Nombre'"; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metod     
      return$result; 
      }
      public function BuscarAlumnoId($Id){
        $sql="SELECT `Nombre`,`Apellido` FROM alumnos WHERE `alumnos`.`IdAlumno`='$Id'"; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metod     
      return$result; 
      }

      public function añadirAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo){
        $sql="INSERT INTO `alumnos` (Nombre,Apellido,Documento,Telefono,Dirreccion,Correo) VALUES ('$Nombre','$Apellido','$Documento','$Telefono','$Direccion','$Correo')" ; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);
      }

public function editarAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo,$Id){
  $sql="UPDATE `alumnos` SET  `Nombre` = '$Nombre', `Apellido` = '$Apellido',`Documento`='$Documento', `Telefono` = '$Telefono',
   `Dirreccion` = '$Direccion', `Correo` = '$Correo' WHERE `alumnos`.`IdAlumno` = '$Id'";
  $result= $this->conexion()->query($sql);
}

public function eliminarAlumno($Id){
  $sql="DELETE * FROM `alumnos` WHERE `alumnos`.`IdAlumno` = '$Id'";
 $result= $this->conexion()->query($sql);
}
    }

?>