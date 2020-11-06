<?php include 'Conectar.php';
class Login_model extends Conectar
 {
          public function GetUsuario($DNI,$Contraseña)
          {   $sql="SELECT * FROM login WHERE DNI='$DNI' AND Contraseña='$Contraseña'"; //almacena en la variable la consulta sql 
             $result= $this->conexion()->query($sql);//almacena en la variable el resultado del metodo 
             $numFilas=$result->num_rows;//almacena en la variable el resultado del metodo num_rows
                  if($numFilas=1)
                  {        		 return true;               	
                      }
                   return false ;}
               
          public function SetUsuario($DNI,$Contraseña)
          {
              $sql="INSERT INTO login (DNI,Contraseña) VALUES ('$DNI','$Contraseña')";
              $result=$this->conexion()->query($sql);
          }
          
}?>