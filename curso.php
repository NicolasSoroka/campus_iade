<?php 
require "templates/header.php";

    $param = $_POST['curso'];
    $db->query("SELECT * 
                FROM curso 
                WHERE id_curso = $param 
                LIMIT 1");
    $curso = $db->fetch();
?>

    <div class="col-10 offset-1 offset-md-0 col-md-3 col-lg-4">
      <div class="card">
          <img 
          class="card-img-top" 
          src="<?= $curso['imagen']?>"
          title="<?= $curso['nombre']?>" 
          alt="titulo"
          data-toggle="popover";
          data-trigger="hover";
          data-content="<?= $curso['descripcion']?>";
          height="250px";
          >
        <div class="card-body">
          <h2><?= $curso['nombre']?></h2>
    
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">Material de estudio</h4>
            </div>
            <div class="panel-body">    
                <table class="table">
                  <thead>
                    <tr>
                      <th width="70%">Nombre del Archivo</th>
                      <th width="13%">Descargar</th>
                      <th hidden width="10%">Eliminar</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $param = $_SESSION['id'];
                      $db->query("SELECT nivel 
                                  FROM curso_p 
                                  LEFT JOIN curso_p ON curso.id_curso = curso_p.id_curso
                                  WHERE curso_p.id_persona = $param 
                                  LIMIT 1");

                      $archivos = scandir("cursos/" . $curso['nombre']);
                      for ($i=2; $i<5; $i++) { ?>
                            <tr>
                                <td><?php echo $archivos[$i]; ?></td>
                                <td><a title="Descargar Archivo" href="cursos/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                      <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg></a></td>
                                <td><a  id="borrar_hidd" title="Eliminar Archivo" href="delete.php?name=uploads/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
                            </tr>
                      <?php } ?> 
                  </tbody>
                </table>
           </div>
          </div>
          <button type="submit" 
              name="btnAccion" 
              value="<?=$curso['id_curso']?>;" 
              class="card-text btn btn-info">    <!-- Hay que hacer la validacion por modulo -->
              Rendir examen  
          </button>
        </div>
      </div>
    </div>


  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> -->
  
<?php
require "templates/footer.php";
?>