<?php
include './templates/header.php';
if (isset($_POST['btnSend'])) { ?>
  <div class="container">
    <div class="row">
      <h2>Enviado correctamente! le responderemos a la brevedad.</h2>
      <script>
        window.setTimeout(function() {
          window.location.href = "./index.php";
        }, 5000);
      </script>
    </div>
  </div>
<?php } else {
?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
            <fieldset>
              <legend class="text-center">Reporte de problemas / Consultas</legend>

              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-6 control-label" for="name">Categoria:</label>
                <div class="col-md-9">
                  <select name="category" required>
                    <option value="" selected disabled>-- Seleccione una opcion --</option>
                    <option value="">¿Como compro un curso nuevo?</option>
                    <option value="">No puedo rendir tal examen</option>
                    <option value="">Otro</option>
                  </select>
                </div>
              </div>

              <!-- Email input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email">Medio de contacto:</label>
                <div class="col-md-9">
                  <input name="contact" required type="text" placeholder="Correo o telefono" class="form-control">
                </div>
              </div>

              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Detalle del problema:</label>
                <div class="col-md-9">
                  <textarea class="form-control" required id="message" name="message" placeholder="Describa aqui su problema" rows="5"></textarea>
                </div>
              </div>

              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" name="btnSend" class="btn btn-primary">Enviar!</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>


<?php
}  //Cierre del else
include './templates/footer.php';
?>