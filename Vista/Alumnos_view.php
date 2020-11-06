<?php include '../Partes/Encabezado.php';
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";



?>



<nav class="navbar navbar-expand-lg navbar-light  bg-secondary sticky-top mb-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Menu_controller.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Asistencia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clases</a>
      </li>
      </ul>
      <ul class="navbar-nav navbar-right">
      <li class="nav-item  dropdown  m-1">
               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <i class="far fa-address-card"></i></a>
               <div class="dropdown-menu  bg-dark ">
               <a class="dropdown-item text-success" href="ListaAlumnos_controller.php">Configurar</a>
               <a href="../Modelo/CerrarSesion.php" class="dropdown-item text-success">Cerrar Sesion</a>
               </div>
            </li>
    </ul>
  </div>
</nav>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#Modal-Asistencia">
<i class="fas fa-plus"></i>
Nuevo Alumno
</button>

<table class="table table-striped table-bordered table-hover ">
<tr class="bg-warning text-center">
<th>Id</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Documento</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Correo</th>
<th>Asistencia</th>
<th>Acciones</th>
 </tr>
 <?php include"../Modelo/alumnos_model.php";
$alumnos=new Alumnos;
$lista=$alumnos->GetAlumnos();
$fila=mysqli_fetch_row($lista) ;
 foreach($lista as $fila):?>
<tr>
<td><?php echo $fila['IdAlumno']?></td>
<td> <?php echo $fila['Nombre']?> </td>
<td><?php echo $fila['Apellido'] ?> </td>
<td><?php echo $fila['Documento']?>  </td>
<td><?php echo $fila['Telefono']?> </td>
<td><?php echo $fila['Dirreccion']?> </td>
<td><?php echo $fila['Correo']?> </td>
<td>%</td>
<td><div class="text-center"><div class="btn-group">
<button class="btn btn-info mr-2 btnEditar">Editar</button>
<button class="btn btn-danger btnBorrar">Borrar</button>   
</div></div> 
</td>
  </tr>
 <?php endforeach; ?>
  </table>

<br> 


<!-- Modal -->
<div class="modal fade" id="Modal-Asistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alumnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="needs-validation " action="" method="POST" >
                        <div class="form-group ">
                                
                                <input class="form-control" name="Nombre" placeholder="Nombre" type="text" value="" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group">
                                
                                <input class="form-control " name="Apellido" value="" type="text" placeholder="Apellido" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group ">
                                
                                <input class="form-control" name="Documento" placeholder="Documento" type="text" value="" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group">
                                  
                                <input class="form-control " name="Telefono" value="" type="text" placeholder="Telefono" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group ">
                                
                                <input class="form-control" name="Direccion" placeholder="Direccion" type="text" value="" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group">
          
                                <input class="form-control" name="Correo" value="" type="text" placeholder="Correo ej juanperez@ejemplo.com" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
        
      </div> </form>
    </div>
  </div>
</div>



