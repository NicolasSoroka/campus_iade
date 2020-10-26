<?php 
require "templates/header.php";
?>

<div class="container my-3"> 
  <form action="content.php" method="post" name="form_course">
    <div class="row">
      <div class="col-6 p-0 mb-2">
          <select id="course" name="course" class="form-control" required> 
            <option hidden disabled selected value="">-- Seleccione curso --</option>
            <?php 
                  $db->query("SELECT * FROM curso");
                  $resp = $db->fetchAll(); 
                  foreach ($resp as $temp) { ?>
                      <option value="<?=$temp['id_curso'];?>"><?=$temp['nombre'];?></option>
                    <?php } ?>    
          </select>
      </div>
    </div>       <!--Primer row -->     

        <?php if (isset($_POST['course'])) {
        $cursoId = $_POST['course'];
        $db->query("SELECT * 
                    FROM curso 
                    WHERE id_curso = $cursoId 
                    LIMIT 1");
        $curso = $db->fetch();
        ?>

    <div class="row">
        <div class="card col align-self-center p-0">
            <img 
            class="card-img-top" 
            src="<?= $curso['imagen']?>"
            title="<?= $curso['nombre']?>" 
            alt="titulo"
            data-toggle="popover";
            data-trigger="hover";
            data-content="<?=$curso['descripcion']?>";
            height="250px";
            >
            <div class="card-body">
                <h1><?= $curso['nombre'];?></h1>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Material de estudio</h4>
                    </div>
                    <div class="panel-body">    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="80%">Nombre del Archivo</th>
                                    <th width="10%">Descargar</th>
                                    <th width="10%" class="text-right">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $archivos = scandir($curso['url_doc']);
                                for ($i=2; $i<8; $i++) { ?>
                                    <tr>
                                        <td>
                                            <button type="button" data-folder="<?=$archivos[$i];?>" class="btn-sm btn-info open-modal" data-toggle="modal" data-target="#modal">
                                                <?=$archivos[$i];?>
                                            </button>
                                        </td>
                                        
                                        <td class="text-center"><a title="Descargar Archivo" href="<?=$curso['url_doc']; echo $archivos[$i];?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg></a></td>

                                        <td class="text-center"><a id="borrar" title="Eliminar Archivo" href="delete.php?name=<?php echo $curso['url_doc']; echo $archivos[$i];?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg></a></td> 
                                    </tr>  
                                <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!--Card -->
    </div> <!--segundo row -->
    <?php } ?>  <!-- If que muestra "Card" con info dle curso -->
  </form>
</div>

<?php
require "templates/footer.php";
?>

<script>
$(document).ready(function() {
  $('#course').on('change', function(e)  {
     e.preventDefault();
     document.forms['form_course'].submit();
  });
});

$('#modal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('folder') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('#file').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

</script>