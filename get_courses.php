<?php
require "./globals/Database.php";
$db = Database::getInstance();
        $user_id = $db->escape($_GET['id']);
        $db->query("SELECT * FROM curso LEFT JOIN curso_p ON curso.id_curso = curso_p.id_curso WHERE curso_p.id_persona = " . $user_id);
        $resp = $db->fetchAll(); //CADA CURSO SE CREA CON VALUE = id_curso   
        echo json_encode($resp);
?>