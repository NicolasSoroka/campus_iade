<?php
require "./templates/header.php";
if ($_SESSION['user']['acceso'] != 0) exit;

if (isset($_POST['course'])) {
    $userId = $db->escape($_POST['id_persona']);
    $course = $db->escape($_POST['course']);

    $db->query("DELETE FROM `curso_p` WHERE `id_persona` = '$userId' AND `id_curso` = '$course' LIMIT 1");
    $_SESSION['mensaje'] = "Curso eliminado!";
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

        <form class="container mt-2" action="" method="post">
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
                    <select name="course" id="select-courses" class="form-control" required>
                        <option hidden disabled selected value="">-- Seleccione curso a quitar--</option>
                    </select>
                    <button class="btn btn-danger mt-3" name="courseDelete" type="submit">Quitar curso</button>
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

                            getCursos(data_alumno.id);
                        }
                    });
                }
            });

            function getCursos(id_user) {
                if (id_user) {
                    $.ajax({
                        type: 'get',
                        url: 'get_courses.php',
                        data: {
                            id: id_user
                        },
                        success: function(response) {
                            var data_courses = JSON.parse(response);
                            if (data_courses == null) {
                                alert("Error al buscar cursos")
                                location.reload();
                            }
                            select = document.getElementById('select-courses');
                            length = select.options.length;
                            for (i = length - 1; i >= 0; i--) {
                                select.options[i] = null;
                            }
                            data_courses.forEach(element => {
                                var opt = document.createElement('option');
                                opt.value = element.id_curso;
                                opt.innerHTML = element.nombre;
                                select.appendChild(opt);
                            });
                        }
                    });
                }
            }
        </script>

        <?php
        require "./templates/footer.php";
        ?>