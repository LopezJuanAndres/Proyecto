<?php 
 include 'login_model.php';
     if (isset($_POST['Iniciar']))
    { $DNI =$_POST['login'];
     $Contraseña =$_POST['password'];
        $usuario=new Login_model;
      if($usuario->GetUsuario($DNI,$Contraseña)==true)
                    {session_start();
                         $_SESSION['s_usuario']=$DNI;
                        header("Location:../Controlador/Menu_controller.php");
                    }else{
                            $_SESSION['s_usuario']=null;
                             header("Location:../index.php");
                            }
                        }    
 ?>