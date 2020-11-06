<?php 
include 'Conectar.php';
class Alumnos extends Conectar {

  
 public function GetAlumnos(){
        $sql="SELECT * FROM alumnos"; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metod     
      return$result; 
      }
      public function BuscarAlumno(){
        $sql="SELECT * FROM alumnos"; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metod     
      return$result; 
      }


      public function añadirAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo,$FNac){
        $sql="INSERT INTO alumnos (Nombre,Apellido,Documento,Telefono,Dirreccion,Correo,FechaNacimiento) VALUES ('$Nombre','$Apellido','$Documento','$Telefono','$Direccion','$Correo','$FNac')" ; //almacena en la variable la consulta sql 
        $result= $this->conexion()->query($sql);
      }

public function editarAlumnos($Nombre,$Apellido,$Documento,$Telefono,$Direccion,$Correo,$FNac,$IdAlumno){
  $sql="UPDATE `alumnos` SET  `Nombre` = '$Nombre', `Apellido` = '$Apellido',`Documento` = '$Documento', `Telefono` = '$Telefono', `Dirreccion` = '$Direccion', `Correo` = '$Correo', `FechaNacimiento` = '$FNac' WHERE `alumnos`.`IdAlumno` = '$IdAlumno'";
  $result= $this->conexion()->query($sql);
}

public function eliminarAlumno($IdAlumno){
  $sql="DELETE FROM `alumnos` WHERE `alumnos`.`IdAlumno` = '$IdAlumno'";
 $result= $this->conexion()->query($sql);
}
    }

?>