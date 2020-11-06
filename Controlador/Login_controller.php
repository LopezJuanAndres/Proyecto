<?php  include '/Vista/Login_view.php';
 include '/Modelo/login_model.php';
  if (isset($_POST['Registrarse']))
 { $DNI =$_POST['login'];
   $Contraseña =$_POST['password'];
         if (empty($DNI) || empty($Contraseña))
          {echo '<div class="alert alert-warning">Complete todos los campos por favor!</div>';
          }
         else {$usuarionuevo= new Login_model;
                if ($usuarionuevo->Verificar()==1)
                {echo'<div class="alert alert-warning">El Usuario ya existe en la base de datos</div>';
                }
                $usuarionuevo-> SetUsuario($DNI,$Contraseña);
                echo'<div class="alert alert-success text-center">El Usuario fue registrado con exito</div>';
              }      
 }
    if (isset($_POST['Iniciar']))
    {$DNI =$_POST['login'];
     $Contraseña =$_POST['password'];
    if (empty($DNI) || empty($Contraseña))
     {echo '<div class="alert-danger text-center">Nombre de usuario o contraseña vacio</div>';
    } else
     {$usuario=new Login_model;
        if($usuario->GetUsuario($DNI,$Contraseña)==true)
        {$_SESSION['s_usuario']=$DNI;
            header("Location:Controlador/Menu_controller.php");
         }else{
                $_SESSION['s_usuario']=null;
            echo '<div class="alert-danger">El usuario no existe</div>';
                }}    
 }?>
