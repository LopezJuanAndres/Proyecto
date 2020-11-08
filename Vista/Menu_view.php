<?php include '../partes/Encabezado.php';?>
<div class="row">
  <div class="col-lg-12">
    <div class="jumbotron bg-dark text-white">
        <h1 class="display-4 text-center">¡Bienvenido!</h1>
        <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION['s_usuario'];?></span></h2>
        <hr class="my-4 bg-warning"> 
        
    </div>
  </div>
</div>

<nav class="navbar  navbar-expand-lg navbar-light bg-secondary sticky-top mb-3">
          <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
               <a class="navbar-brand text-warning" href="#acercade">G.D.A</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="Alumnos_controller.php">Lista de Alumnos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Asistencia">Asistencia</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#Clases">Clases</a>
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




 <div class="main">
      
 

  <section id="Clases" class="one">
						<div class="container bg-dark">
                <br>
                <br>
                <br>
							<header>
								<h2>Clases</h2>
							</header>
							<a href="#acercade" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
							<p>Gestor De Asistencia es una aplicacion web dirigida exclusivamente para profesores de cualquier materia.
               Este software permite al usuario regitrar la asistencia a clases  de sus respectivos alumnos. El profesor
               debe de cargar en primera instancia el listado de alumnos que esten debidamente registrado a sus clases.
               Luego cada vez que ingrese al sistema ,solo debera de tildar que alumno esta presente y oprimir un boton para 
               registrar la asistencia  a su respectiva clase. 
               Tambien puede realizar reportes de alumnos y su porcentaje de asistencia correspondiente a cada uno de ellos. 
                   </p>
						</div>
					</section>

<section id="Asistencia" class="two">
</section>
						<div class="container bg-success">
            <br>
            
							<header>
								<h2>Asistencia</h2>
							</header>
              <table id="TablaAsistencia" class="table table-striped table-bordered table-hover text-center ">
            <tr class="bg-warning text-center">
                    <th >Id</th>
                    <th >Nombre</th>
                    <th>Apellido</th>
                    <th>Presente</th>
            </tr>
          <tbody>
            <tr>
                <?php include"../Modelo/alumnos_model.php";
                $alumnos=new Alumnos;
                $lista=$alumnos->GetAlumnos();
                $fila=mysqli_fetch_row($lista) ;
                foreach($lista as $fila):?>
             <tr>
                <td><?php echo $fila['IdAlumno']?></td>
                <td> <?php echo $fila['Nombre']?> </td>
                <td><?php echo $fila['Apellido'] ?> </td>
                <td> <form action="" method="POST">
                      <input type="text" name="txtId[]" value="<?php echo $fila['IdAlumno']?>">
                <div class=" text-center">
                <div class="btn-group">
                         <?php $arrayDatos = $_POST['txtId'];                                                  
                          foreach ($arrayDatos as $key => $value) {
                              echo $arrayDatos['txtId'];                             
                          }                        
                  ?>
                        <button type="submit" name="presente" class="btn btn-success btn-sm ">Presente</button> 
                                </div> 
                                </div> 
                                </form>
                    </td>
            </tr>
                 <?php endforeach;?>
            </tr>
            </tbody>
    </table>
 </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#Modal-Asistencia">
    Confirmar Asistencia
    </button>
    <br>
    <br>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="Modal-Asistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alumnos Presentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <div class="form-group">
              <label for="comment"> Descripcion de la Clase (Tema-Recordatoris-etc):</label>
              <textarea class="form-control" rows="3" id="comment" ></textarea>
            </div>
            <div class="form-group">
            
            <table id="tablaPresente" class="table table-striped table-bordered table-hover text-center ">
            <tr class="bg-info text-center">
                    <th >Nombre</th>
                    <th>Apellido</th>
             </tr>
          <tbody class="bg-dark text-success">
                    <tr>  <?php                     
                        if (isset($_POST['presente'])) {
                                      foreach($lista as $fila):?>
                           <tr>  <form action="" method="POST">
                              <td>
                            <input type="text" name="txtId" value="<?php echo $fila['IdAlumno']?>"></td>
                            <td>  <input type="text" name="txtNombre" value="<?php echo $fila['Nombre']?>"></td>
                            <td>  <input type="text" name="txtApellido" value="<?php echo $fila['Apellido']?>"></td>
                                      </form>    </tr>
                          
                            
                      
                      </tr>

                      <?php endforeach;}?>  
            </table>
          
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" name="ConfirmarClase" class="btn btn-success">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<section id="acercade" class="three">
						<div class="container bg-dark">
							<header>
								<h2>Acerca de G.D.A.</h2>
							</header>
							<a href="#acercade" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
							<p>Gestor De Asistencia es una aplicacion web dirigida exclusivamente para profesores de cualquier materia.
               Este software permite al usuario regitrar la asistencia a clases  de sus respectivos alumnos. El profesor
               debe de cargar en primera instancia el listado de alumnos que esten debidamente registrado a sus clases.
               Luego cada vez que ingrese al sistema ,solo debera de tildar que alumno esta presente y oprimir un boton para 
               registrar la asistencia  a su respectiva clase. 
               Tambien puede realizar reportes de alumnos y su porcentaje de asistencia correspondiente a cada uno de ellos. 
                   </p>
						</div>
          </section> 
          
          </div>
          <?php include '../partes/Pie.php';?>