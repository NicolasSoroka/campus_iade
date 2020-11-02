<?php require "templates/header.php"; ?>

<head>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        #messages {
            display: flex;
            flex-direction: column;
            height: 87vh;
            overflow-x: hidden;
            overflow-y: auto;
            align-items: flex-start;
            padding: 10px;
            background: url("img/fondo.jpg") no-repeat;
            background-size: cover;
            background-clip: border-box;
        }

        form {
            display: flex;
        }

        input {
            font-size: 1.2rem;
            padding: 10px;
            margin: 10px 5px;
            appearance: none;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #message {
            flex: 2;
        }

        .self {
            background-color: #dcf8c6!important;
            align-self: flex-end;
        }

        .msg {
            background-color: #eeddf6;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 8px;
            width: fit-content;
            height: fit-content;
        }

        .msg p {
            margin: 0;
            font-weight: bold;
        }

        .msg span {
            font-size: 0.7rem;
            margin-left: 15px;
        }
    </style>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <!-- CURSOS PARA ALUMNO -->
                <?php if ($_SESSION['user']['acceso'] == 0) {
                $db->query("SELECT * 
                        FROM curso 
                        LEFT JOIN curso_p ON curso.id_curso = curso_p.id_curso
                        WHERE curso_p.id_persona = " . $_SESSION['user']['id']);
                $resp = $db->fetchAll();

                foreach ($resp as $temp) { ?>
                    <button type="button" class="list-group-item" onclick="set(<?= $temp['id_curso']; ?>,<?= $_SESSION['user']['id']; ?>)">
                        <?= $temp['nombre']; ?>
                    </button>
                <?php }} ?>
                <!-- Cierre del foreach -->
                <!-- CURSOS PARA PROFESOR -->
                <?php if ($_SESSION['user']['acceso'] == 1) {
                $db->query("SELECT * 
                            FROM chat 
                            LEFT JOIN curso_p ON chat.id_curso = curso_p.id_curso
                            WHERE curso_p.id_persona = " . $_SESSION['user']['id']);
                $resp = $db->fetchAll();  //todos los ID de los cursos que pertenece el profesor



                /////ACA QUEDAMOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

                $db->query("SELECT * 
                            FROM chat 
                            LEFT JOIN curso_p ON chat.id_curso = curso_p.id_curso
                            WHERE curso_p.id_persona = " . $_SESSION['user']['id']);
                $resp2 = $db->fetchAll();

                foreach ($resp as $temp) { ?>
                    <button type="button" class="list-group-item" onclick="set(<?= $temp['id_curso']; ?>,<?= $_SESSION['user']['id']; ?>)">
                        <?= $temp['id']; ?>
                    </button>
                <?php }} ?>
                <!-- Cierre del foreach -->
            </div>
        </div>
        <div class="col-9 p-0">
            <div id="messages"></div>
            <div class="row">
                <input type="text" id="message" autocomplete="off" autofocus placeholder="Escriba su mensaje" />
                <input id="btnSendMsg" type="button" value="Send" onclick="send()" />
            </div>
        </div>
    </div>
</div>
</body>

</html>
<script>
    var start = 0;

    function set(curso, id) {
        sessionStorage.setItem("cc", curso);
        sessionStorage.setItem("ii", id);
        document.location.reload();
    }

   function load() {
        let course = sessionStorage.getItem("cc");
        let from = sessionStorage.getItem("ii");
        $.get('chat.php?start=' + start + '&course=' + course + '&from=' + from, function(result) {
            result.forEach(item => {
                start = item.id;
                $('#messages').append(renderMessage(item));
            });
        });
    }

    $(document).ready(function () {
            setInterval(() => {
                load()
            }, 500);
            $("#messages").animate({ scrollTop: $(document).height()+$(window).height()},1000);
        });

    function renderMessage(item) {
        let time = new Date(item.fecha);
        time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
        if (item.id_persona == <?= $_SESSION['user']['id'];?>) {
            return `<div class="msg self"><p>${item.nombre}</p>${item.mensaje}<span>${time}</span></div>`;    
        }
        return `<div class="msg"><p>${item.nombre}</p>${item.mensaje}<span>${time}</span></div>`;
    }

    function send() {
        let course = sessionStorage.getItem("cc");
        $.post('chat_send.php', {
            message: $("#message").val(),
            from: <?= $_SESSION['user']['id']; ?>,
            course: course
        });
        $("#message").val('');
        $("#messages").animate({ scrollTop: $(document).height()+$(window).height()},10);
        return false;
    }

    var input = document.getElementById("message");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("btnSendMsg").click();
        }
    });
</script>