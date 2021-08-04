<?php
require "./globals/Database.php";
$db = Database::getInstance();

session_start();

        $nombre = $db->escapeWildcards($db->escape($_POST['nombre']));
        $cedula = $db->escapeWildcards($db->escape($_POST['cedula']));
        $apellido = $db->escapeWildcards($db->escape($_POST['apellido']));
        $email = $db->escapeWildcards($db->escape($_POST['mail']));
        $telefono = $db->escapeWildcards($db->escape($_POST['tel']));
        $dni = $db->escapeWildcards($db->escape($_POST['dni']));
        
        $type = $db->escapeWildcards($db->escape($_POST['type']));

        if (isset($_POST['type'])) {
                $db->query("UPDATE personas SET 
                                nombre ='$nombre',
                                apellido ='$apellido',
                                acceso ='$type',
                                telefono ='$telefono',
                                email ='$email'
                                WHERE dni ='$dni' 
                                LIMIT 1");
        $_SESSION['msg_status'] = 1;
        }
        else
        {
                $db->query("UPDATE personas SET 
                                nombre ='$nombre',
                                cedula ='$cedula',
                                apellido ='$apellido',
                                telefono ='$telefono',
                                email ='$email',
                                profile_ok = 1
                                WHERE dni ='$dni' 
                                LIMIT 1");
        $_SESSION['msg_status'] = 1;
        $_SESSION['user']['profile_ok'] = 1;
        $_SESSION['user']['nombre'] = $nombre;
        $_SESSION['user']['apellido'] = $apellido;
        $_SESSION['user']['cedula'] = $cedula;
        }
?>