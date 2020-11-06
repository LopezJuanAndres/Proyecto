<?php include 'partes/Encabezado.php';?>
<!-- login -->
<div id ="login" class="row  mt-5 justify-content-md-center">
    <div id="cajalogin" class="col-md-3">
           <form class="needs-validation text-center mt-4" action="Modelo/login.php" method="POST" >
                      <img src="img/2.png" alt="">
                        <div class="form-group  mt-3">
                                <label  for="DNI">Usuario:</label>
                                <input class="form-control" name="login" placeholder="Nombre/DNI" type="text" value="" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                        <div class="form-group">
                                  <label for="password">Contraseña:</label>
                                <input class="form-control mb-5" name="password" value="" type="password" placeholder="************" required>
                                <div class="invalid-feedback">complete el campo</div>
                        </div>
                    <button id="btniniciar" type="submit" name="Iniciar" class="btn btn-sm btn-block btn-primary mt-2 "> Iniciar Sesion</button>
                    <button id="btnregis" type="button"  class="btn btn-sm btn-block btn-primary mt-2 " data-toggle="modal" data-target="#exampleModal"> Registrarse</button>
           </form>
   </div> 


<!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Nueva Cuenta</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form class="needs-validation"  method="POST" >
                          <div class="modal-body justify-content-center text-center">
                                        <div class="form-group">
                                              <label for="DNI">Nuevo usuario:</label>
                                              <input class="form-control"name="login" placeholder="DNI/Nombre" type="text" value="" required>
                                              <div class="invalid-feedback">complete el campo</div>
                                        </div>
                                       <div class="form-group">
                                               <label for="password">Ingrese Contraseña:</label>
                                               <input class="form-control" name="password" value="" type="password" placeholder="nueva contraseña" required>
                                               <div class="invalid-feedback">complete el campo</div>
                                       </div>
                                       <div class="form-group">
                                              <label for="password">Reingrese Contraseña:</label>
                                              <input class="form-control" name="password" value="" type="password" placeholder="reingrese contraseña" required>
                                              <div class="invalid-feedback">complete el campo</div>
                                       </div>
                         </div> 
                         <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btncerrar" data-dismiss="modal">cerrar</button>
                                    <button type="submit" name="Registrarse" class="btn btn-success botonguardar "><span class="glyphicon glyphicon-envelope"></span>Registrar</button>
                        </div>
                    </form>
                   </div>
         </div>
   </div>
   <?php include 'partes/Pie.php';?>     