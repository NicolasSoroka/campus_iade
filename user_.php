<?php 
require "templates/header.php";
require "admin.php";
?>

<form class="container" action="" method="post"> <br> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombre</label>
      <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Apellido</label>
      <input type="text" name="apellido" class="form-control" id="validationDefault02" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Documento</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">#</span>
        </div>
        <input type="text" class="form-control" name="dni" id="validationDefaultUsername" placeholder="########" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Email</label>
      <input type="email" name="mail" class="form-control" id="validationDefault03" placeholder="micorreo@dominio.com">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Telefono</label>
      <input type="number" name="tel" class="form-control" id="validationDefault04" placeholder="Solo numeros">
    </div>
    <div class="col-md-3 mb-3">
    <label for="validationDefault04">Tipo de usuario</label>
      <select name="userAccess" class="form-control" required>
        <option hidden disabled selected value="">-- Seleccione --</option>
        <option value="0">Alumno</option> 
        <option value="1">Profesor</option> 
        <option value="2">Administrador</option> 
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Pago curso
      </label>
    </div>
  </div>
  <button class="btn btn-primary" name="btnAccion" value="newUser" type="submit">Crear usuario</button>
</form>

<?php
require "templates/footer.php";
?>