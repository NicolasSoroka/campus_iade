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
$title = "Examen Curso de Reparación de Celulares";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "La red de telefonía celular se denomina de esa forma porque:",
   1 => "Es una red compleja y los equipos telefónicos son pequeños como una célula.",
   2 => "Las ondas de radiofrecuencia tienen la apariencia de una red de células conectadas entre si.",
   3 => "Una ciudad puede ser dividida en pequeñas células o celdas que permiten extender la frecuencia en un territorio amplio sin tener problemas de comunicación.",
   6 => 3
),
2 => array(
   0 => "Cuando hablamos de 2G,3G y 4G nos referimos a:",
   1 => "Distintos modelos de teléfonos celulares.",
   2 => "Las distintas generaciones de teléfonos celulares de acuerdo a sus prestaciones.",
   3 => "La cantidad de aplicaciones que pueden ejecutar al mismo tiempo distintos teléfonos.",
   6 => 3
),
3 => array(
   0 => "Las características de los teléfonos celulares son:",
   1 => "Movilidad, tamaño reducido, comunicación inalámbrica, interacción con las personas.",
   2 => "Agilidad, tamaño reducido, comunicación inalámbrica, interacción con las personas.",
   3 => "Tamaño reducido, movilidad, comunicación con las personas, practicidad.",
   6 => 1
),
4 => array(
   0 => "Un Smartphone es:",
   1 => "Una marca nueva de teléfonos celulares.",
   2 => "Un teléfono que combina la telefonía móvil con la de los ordenadores.",
   3 => "Un dispositivo móvil capaz de conectarse a internet",
   6 => 2
),
5 => array(
   0 => "Cuando hablamos del Hardware de un teléfono nos referimos a que parte:",
   1 => "Al conjunto formado por cables usb, cargador y batería.",
   2 => "A los componentes tangibles internos y externos que lo conforman.",
   3 => "A la pantalla, teclado y puertos de comunicación.",
   6 => 2
),
6 => array(
   0 => "Una corriente eléctrica es:",
   1 => "Movimiento de protones",
   2 => "Circulación de electrones por un cable",
   3 => "Corrientes de cargas neutras",
   6 => 2
),
7 => array(
   0 => "La cantidad de electrones por segundo se mide en:",
   1 => "Volt",
   2 => "Watt",
   3 => "Amper",
   6 => 3
),
8 => array(
   0 => "La Resistencia eléctrica de un circuito es:",
   1 => "Oposición al paso de la Intensidad",
   2 => "Consumo de un circuito",
   3 => "Presión eléctrica",
   6 => 1
),
9 => array(
   0 => "La ley de Ohm indica que",
   1 => "A menor resistencia menor amperaje",
   2 => "A menor voltaje mayor resistencia",
   3 => "A mayor voltaje mayor intensidad",
   6 => 3
),
10 => array(
   0 => "Cuando hablamos de ANDROID nos referimos a:",
   1 => "Una aplicación para navegar por internet",
   2 => "Un sistema operativo de MICROSOFT",
   3 => "Un sistema operativo común a la mayoría de los celulares",
   6 => 2
),
11 => array(
   0 => "El software de un equipo de telefonía celular es:",
   1 => "Las aplicaciones que interactúan con el usuario",
   2 => "Conjunto de aplicaciones instaladas y el sistema operativo del equipo",
   3 => "El sistema operativo",
   6 => 2
),
12 => array(
   0 => "La batería de un equipo de teléfono celular trabaja con el siguiente voltaje:",
   1 => "5 VCC",
   2 => "6 VCA",
   3 => "12 VCC",
   6 => 1
),
13 => array(
   0 => "La electrónica de un equipo celular se divide en:",
   1 => "Corriente continua – corriente alterna",
   2 => "Analogica – digital",
   3 => "Digital",
   6 => 2
),
14 => array(
   0 => "La comunicación de los celulares es posible a través de:",
   1 => "Teclado y pantalla táctil",
   2 => "Modulo de conectividad",
   3 => "Modulo de RF",
   6 => 3
),
15 => array(
   0 => "Un circuito integrado es:",
   1 => "El impreso de la plaqueta principal",
   2 => "Conexión en paralelo de dos circuitos",
   3 => "Componentes conectados dentro de un chip",
   6 => 4
),
16 => array(
   0 => "Un transistor tiene:",
   1 => "8 terminales en línea",
   2 => "3 terminales",
   3 => "2 terminales",
   6 => 2
),
17 => array(
   0 => "La capacidad de almacenamiento de un celular se calcula en:",
   1 => "BIT – BYTES – KILOBYTES – MEGABYTES – GIGABYTES",
   2 => "BIT – BYTES – MEGAHERTZ",
   3 => "KILOHERTZ – GIGABYTES",
   6 => 1
),
18 => array(
   0 => "Cuando hablamos de memoria RAM nos referimos a:",
   1 => "Memoria de solo expansión",
   2 => "Memoria de acceso aleatorio",
   3 => "Memoria interna",
   6 => 4
),
19 => array(
   0 => "El bluetooth se utiliza para:",
   1 => "Conectar a internet",
   2 => "Conectar de modo inalámbrico un equipo",
   3 => "Restablecer el equipo a valores de fabrica",
   6 => 2
),
20 => array(
   0 => "El pin de carga es:",
   1 => "El conector para cargar el teléfono",
   2 => "Un código para desbloquear el teléfono",
   3 => "El valor optimo de carga de la batería",
   6 => 1
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
