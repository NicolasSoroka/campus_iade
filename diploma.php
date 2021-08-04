<?php
require "./globals/database.php";
session_start();

$db = Database::getInstance();
if (!isset($_SESSION['logged'])) {
    header("Location: login.php");
    exit;
}

$cursoId = $_SESSION['courseId'];
$userId = $_SESSION['user']['id'];

$db->query("SELECT * 
                FROM curso 
                WHERE id_curso = $cursoId 
                LIMIT 1");
$curso = $db->fetch();

$db->query("SELECT * 
                FROM curso_p
                WHERE id_curso = $cursoId AND id_persona = $userId
                LIMIT 1");
$curso_p = $db->fetch();

$str = $curso_p['fecha_aprobacion'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="certificado/styles.css">
  <title>Diploma de</title>
</head>

<body id="diploma">
  <section class="container container-diploma my-5">
    <header class="header">
      <h2>Escuelas Iade certifica que</h2>
      <h1><?= $_SESSION['user']['nombre'] . ' ' . $_SESSION['user']['apellido'];?></h1>
      <h2>Cédula de Identidad Nº <?= $_SESSION['user']['cedula']?></h2>
    </header>
    <section class="informacion-curso">
      <p>Ha finalizado su capacitación en:</p>
      <p><?=$curso['nombre']?></p>
      <p>y ha aprobado, obteniendo el presente certificado.</p>
    </section>
    <section class="logos-y-certificaciones">
      <div><img src="certificado/logoiade.jpg" width="100px"></div>
      <div><img src="certificado/iso9000.jpg" width="100px"></div>
      <div class="firma-director"><img src="certificado/firma.jpg" width="220px"><h5>Ing. Sergio Stofenmacher</h5><h5>Director Escuelas IADE</h5></div>
      <div><img src="certificado/iso9002.jpg" width="100px"></div>

      <div>
        <?php 
          if ($_SESSION['user']['pais'] === 'chile') echo '<img src="certificado/chile.jpg" width="50px">';
          else if ($_SESSION['user']['pais'] === 'argentina') echo '<img src="certificado/arg.jpg" width="50px">';
          else if ($_SESSION['user']['pais'] === 'paraguay') echo '<img src="certificado/paraguay.jpg" width="50px">';
        ?>
        <h6 class="fw-light">escuelasiade.com</h6><h6 class="fw-light">
          <?php
            setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            echo iconv('ISO-8859-2', 'UTF-8', strftime("%d de %B de %Y", strtotime($str)));
          ?>
        </h6>
      </div>
    
    </section>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>