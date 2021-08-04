<?php
error_reporting(0);

// #########################################
// In this page you will find the code required to create multiple choice exams
// Copy this code and save it to a file name "whatever.php"
// The file name must finish with ".php"
// Save the file to a PHP unable server.
// Please consider adding a link to this service:
//      http://www.phptutorial.info/scripts/multiple_choice/
//
// A website was created based in this script at which allows
//   to create and maintain the test online at:
//      http://www.testak.org
//
// #########################################
//      CONFIGURATION
$title = "Examen Curso de Fotografía y Estudio Digital";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "La regulación de la luz que recibe el sensor desde la escena depende de:",
   1 => " La sensibilidad (ISO)",
   2 => "La sensibilidad  (ISO), la apertura del diafragma del objetivo y la velocidad del obturador",
   3 => "La velocidad del obturador",
   6 => 2
),
2 => array(
   0 => "El mecanismo que controla el tiempo de exposición se llama:",
   1 => "Obturador ",
   2 => "Diafragma",
   6 => 1
),
3 => array(
   0 => "a sensibilidad  (ISO) es la capacidad que tiene el sensor de la cámara para captar la luz. Si necesitamos un valor alto de sensibilidad se deberá seleccionar ISO:",
   1 => "200",
   2 => "800",
   3 => "3200",
   6 => 3
),
4 => array(
   0 => "Si deseamos captar a un ciclista andando el movimiento perpendicular a la cámara deberá ser de:",
   1 => "1/1250 1/1000 1/500",
   2 => "1/500 1/250 1/125",
   6 => 2
),
5 => array(
   0 => "Los objetivos denominados ojo de pez se caracterizan por proporcionar un campo de visión:",
   1 => "Algo mayor que la visión humana ",
   2 => "Una visión de 180 grados con una imagen particularmente deformada",
   6 => 2
),
6 => array(
   0 => "Para producir en la toma de un arroyo el efecto de aguas sedosas la velocidad del obturador debe ser de unos:",
   1 => "No mas de 10 a 20 segundos ",
   2 => " 30 segundos o mas",
   6 => 2
),
7 => array(
   0 => "El bracketing u horquillado  es la función que permite tirar:",
   1 => "2 fotos subexpuestas ",
   2 => "3 fotos seguidas",
   3 => "1 sola foto sobrexpuesta ",
   6 => 2
),
8 => array(
   0 => "El sistema de medición TTL permite medir:",
   1 => "La luz reflejada",
   2 => "La luz incidente ",
   6 => 1
),
9 => array(
   0 => "Se entiende por profundidad del campo a la parte de la imagen que apreciamos como:",
   1 => "La que está detrás del objeto mas alejada ",
   2 => " La mas nítida",
   6 => 2
),
10 => array(
   0 => " A mayor distancia focal:",
   1 => "Menor es la profundidad del campo ",
   2 => "Mayor profundidad del campo",
   6 => 1
),
11 => array(
   0 => "La temperatura del color se mide en Kelvin. La sombra en un día despejado tiene aproximadamente:",
   1 => "9000 K",
   2 => "2000 K",
   3 => "11000 K",
   6 => 1
),
12 => array(
   0 => "La lámpara de tungsteno tiene la particularidad de añadir tonos:",
   1 => "Cálidos ",
   2 => " Fríos ",
   6 => 2
),
13 => array(
   0 => "Si es necesario grabar muchas fotos en una tarjeta de memoria el formato adecuado es:",
   1 => "RAW",
   2 => "JPG ",
   6 => 2
),
14 => array(
   0 => "El flash tipo TTL:",
   1 => "Permite el uso de filtros ",
   2 => "No es posible usar los filtros",
   6 => 1
),
15 => array(
   0 => "El laboratorio digital GIMP tiene:",
   1 => "3 ventanas al mismo tiempo ",
   2 => "Una sola ventana de uso con todas las herramientas ",
   6 => 1
),
16 => array(
   0 => " Un histograma es un gráfico que representa en su eje vertical",
   1 => "La distribución de las sombras y las luces ",
   2 => "El número de píxeles de la imagen que tiene tal luminosidad ",
   6 => 2
),
17 => array(
   0 => "El denominado balance de los blancos es un control de la cámara que sirve para equilibrar los niveles de:",
   1 => "Contraste entre el blanco y el negro ",
   2 => "Los colores rojo - verde - azul",
   6 => 2
),
18 => array(
   0 => "Al planificar el fondo de una foto es conveniente que:",
   1 => "No tenga muchos detalles",
   2 => "Que se destaque  del objetivo",
   6 => 1
),
19 => array(
   0 => "Los puntos fuertes í principales de una imagen son:",
   1 => "Los que surgen de trazar dos líneas equidistantes verticales y horizontales",
   2 => "Alrededor del punto medio que resulta de trazar una línea vertical y otra horizontal ",
   6 => 1
),
20 => array(
   0 => "El modo paisaje funciona:",
   1 => "Igual que al tomar un retrato",
   2 => "En forma inversa al retrato",
   6 => 2
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR>Percentaje of correct responses: <?php print $percentaje; ?> %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>
<BR>     <input type=text name=response size=8>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
<p><A HREF="<?php print $address; ?>">Home Page</a>

<?php } ?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
