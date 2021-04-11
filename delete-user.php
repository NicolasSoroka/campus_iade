<?php
require "./templates/header.php";
if ($_SESSION['user']['acceso'] != 0) exit;

if (isset($_POST['id_persona'])) {
    $userId = $db->escape($_POST['id_persona']);

    $db->query("DELETE FROM `personas` WHERE `id` = '$userId' LIMIT 1");
    $_SESSION['mensaje'] = "Usuario eliminado!";
    $_SESSION['msg_status'] = 1;
}

if ($_SESSION['mensaje'] != "") {
    if ($_SESSION['msg_status'] == 1) { ?>
        <div class="alert alert-success text-center"> <?php } else { ?> <div class="alert alert-danger text-center"> <?php } ?>
            <?php echo $_SESSION['mensaje']; ?>
            </div>
        <?php  }
    $_SESSION['mensaje'] = ""; ?>

        <div class="container">
            <div class="col-md-5 my-3 pl-0">
                <div class="input-group">
                    <input type="hidden" name="user_id">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Busqueda por documento" aria-describedby="inputGroupPrepend2">
                    <button id="btnSearch" type="button" class="btn-sm btn-warning">Buscar alumno</button>
                </div>
            </div>
        </div>

        <form class="container mt-2" action="" method="post" onsubmit="return confirm('Esta seguro de eliminar el usuario?');">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Datos del alumno</label> <br>
                    <input type="hidden" name="id_persona" id="id_persona">
                    <input type="text" name="dni" id="dni" value="" placeholder="Documento" disabled>
                    <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" disabled>
                    <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" disabled>
                    <input type="text" name="email" id="email" value="" placeholder="Email" disabled>
                    <input type="text" name="tel" id="tel" value="" placeholder="Teléfono" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <button class="btn btn-danger mt-3" name="courseDelete" type="submit">Eliminar usuario</button>
                </div>
            </div>
        </form>

        <script>
            $("#btnSearch").click(function() {
                var datos = $('#search').val();
                if (datos) {
                    $.ajax({
                        type: 'get',
                        url: 'search.php',
                        data: {
                            dni: datos
                        },
                        success: function(response) {
                            var data_alumno = JSON.parse(response);
                            if (data_alumno == null) {
                                alert("No se encontro usuario.")
                                location.reload();
                            }
                            $("#dni").val(data_alumno.dni);
                            $("#nombre").val(data_alumno.nombre);
                            $("#apellido").val(data_alumno.apellido);
                            $("#email").val(data_alumno.email);
                            $("#tel").val(data_alumno.telefono);
                            $("#id_persona").val(data_alumno.id);
                        }
                    });
                }
            });
        </script>

        <?php
        require "./templates/footer.php";
        ?>