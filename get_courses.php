<?php
require "./globals/Database.php";
$db = Database::getInstance();
        $user_id = $db->escape($_GET['id']);
        $db->query("SELECT * FROM curso LEFT JOIN curso_p ON curso.id_curso = curso_p.id_curso WHERE curso_p.id_persona = '$user_id'");
        $resp = $db->fetchAll();
        echo json_encode($resp);




        // function utf8_converter($array)
        // {
        //     array_walk_recursive($array, function(&$item, $key){
        //         if(!mb_detect_encoding($item, 'utf-8', true)){
        //                 $item = utf8_encode($item);
        //         }
        //     });
         
        //     return $array;
        // }
        // cambia el json_encode($resp);
        // por 
        // json_encode(utf8_converter($resp));
        
        
        // function utf8_converter($array)
        // {
        //     array_walk_recursive($array, function(&$item, $key){
        //          $item = utf8_encode($item);
        //     });
         
        //     return $array;
        // }
        // utf8_encode / utf8_decode





?>