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
$title = "Examen Curso de Cosmetología y Maquillaje";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "QUÉ TIPO DE BASES UTILIZAMOS EN UNA SEÑORA CON LÍNEAS PRONUNCIADAS PARA LA NOCHE:",
   1 => "Cremosa.",
   2 => "Fluídas.",
   3 => "Por barra. (Pan stick)",
   4 => "Compacta.",
   6 => 2
),
2 => array(
   0 => "SI MAQUILLA CON TONALIDADES LILAS ¿QUÉ COLOR DE LÁPIZ LABIAL Y RUBOR SE DEBE UTILIZAR?",
   1 => "Rosa.",
   2 => "Fucsia.",
   3 => "Rojo.",
   4 => "Marrón.",
   5 => "Beige.",
   6 => 1
),
3 => array(
   0 => "PARA REALIZAR UN MAQUILLAJE DE NOVIA, ¿CUAL DE ESTAS OPCIONES ES LA MAS CONVENIENTE?",
   1 => "Color del vestido.",
   2 => "El color de moda.",
   3 => "Los detalles en color del ramo y el tocado.",
   4 => "Bijouterie.",
   5 => "El color del cabello.",
   6 => 1
),
4 => array(
   0 => "AL REALIZAR UN MAQUILLAJE PARA LA TELEVISIÓN O PARA UN VIDEO, HAY QUE:",
   1 => "Utilizar colores fríos.",
   2 => "Utilizar colores cálidos.",
   3 => "Intensificar todo el maquillaje.",
   4 => "Hacer un maquillaje más natural.",
   6 => 3
),
5 => array(
   0 => "EN LA REALIZACIÓN DEL MAQUILLAJE NATURAL, ¿QUE PASO EVITAMOS?",
   1 => "Base.",
   2 => "Polvo.",
   3 => "Rubor.",
   4 => "Delineado.",
   5 => "Sombreado.",
   6 => 4
),
6 => array(
   0 => "¿CON QUÉ FIN UTILIZAMOS EL POLVO COMPACTO Y VOLÁTIL?",
   1 => "Dar mas color a la piel.",
   2 => "Quitar brillo.",
   3 => "Para que dure más tiempo el maquillaje.",
   6 => 3
),
7 => array(
   0 => "CUÁNDO SE REALIZA UN MAQUILLAJE DE PASARELA OTOÑO-INVIERNO, ¿QUE DEBE DESTACAR?",
   1 => "La piel de aspecto bronceado.",
   2 => "La piel de aspecto blanca y translúcida.",
   3 => "Ojos maquillados con sombras iridiscentes (brillo).",
   4 => "Ojos maquillados con sombras opacas.",
   5 => "Labios nacarados.",
   6 => 4
),
8 => array(
   0 => "EL COLOR BLANCO EN ESTRUCTURACIÓN ES PARA DAR:",
   1 => "Profundidad.",
   2 => "Volúmen.",
   3 => "Luminosidad.",
   4 => "Corregir imperfecciones.",
   6 => 2
),
9 => array(
   0 => "SE PUEDE ESTRUCTURAR:",
   1 => "El rostro completo.",
   2 => "Algunas zonas del rostro.",
   6 => 1
),
10 => array(
   0 => "CUANDO SE COLOCAN PESTAÑAS POSTIZAS:",
   1 => "El rimel se pasa antes.",
   2 => "El rimel se pasa después.",
   6 => 2
),
11 => array(
   0 => "DE QUE FORM A SE COLOCAN LAS PESTAÑAS PARA QUE QUEDEN EN APARIENCIA NATURAL.",
   1 => "Por grupos.",
   2 => "La línea entera.",
   3 => "De a una.",
   6 => 2
),
12 => array(
   0 => "¿CUÁL ES EL DELINEADO MÁS ADECUADO PARA MAQUILLAR PÁRPADOS PEQUEÑOS?",
   1 => "Grueso.",
   2 => "Fino.",
   3 => "Doble.",
   4 => "Oscuro.",
   5 => "Claro.",
   6 => 2
),
13 => array(
   0 => "¿EN QUE PASO DEL MAQUILLAJE SE DEBE TENER MÁS CUIDADO PARA AFINAR UN ROSTRO?",
   1 => "En la base.",
   2 => "En el corrector.",
   3 => "En las sombras.",
   4 => "En el rubor.",
   6 => 2
),
14 => array(
   0 => "EL BRILLO LABIAL SE COLOCA EN:",
   1 => "Todo el labio.",
   2 => "Parte central.",
   6 => 1
),
15 => array(
   0 => "PARA UNA BOCA CON LABIOS PEQUEÑOS, USAR LABIALES:",
   1 => "Claros.",
   2 => "Oscuros.",
   3 => "Mates.",
   4 => "Nacarados.",
   6 => 1
),
16 => array(
   0 => "EL TONO ELEGIDO PARA EL LABIAL DEBE COMBINAR CON EL TONO DE:",
   1 => "Las sombras.",
   2 => "El esmalte de uñas.",
   3 => "El tono del vestido.",
   4 => "El rubor.",
   6 => 3
),
17 => array(
   0 => "PARA QUE LOS OJOS APARENTEN MAYOR TAMAÑO:",
   1 => "Delineamos por fuera.",
   2 => "Delineamos por dentro con tono oscuro.",
   3 => "Delineamos por dentro con tono claro.",
   4 => "Falseamos la comisura externa del ojo.",
   5 => "Lo delineamos siguiendo la forma del mismo.",
   6 => 1
),
18 => array(
   0 => "EN PERSONAS CON OJERAS MUY PRONUNCIADAS COLOCAREMOS CORRECTOR DE COLOR:",
   1 => "Beige claro.",
   2 => "Lila.",
   3 => "Amarillo.",
   4 => "Blanco.",
   6 => 1
),
19 => array(
   0 => "EN EL CASO DE TENER QUE MAQUILLAR LAS CEJAS ¿CUÁL DE ÉSTAS OPCIONES SON MÁS CONVENIENTES:",
   1 => "Lápiz negro.",
   2 => "Sombra negra.",
   3 => "Sombra gris.",
   4 => "Sombra Gris.",
   5 => "Lápiz marrón.",
   6 => 5
),
20 => array(
   0 => "¿QUÉ BASE ES CONVENIENTE UTILIZAR PARA HACER UN M AQUILLAJE PARA EL DÍA?",
   1 => "Cremosa.",
   2 => "Fluída.",
   3 => "En Barra.",
   6 => 2
),
21 => array(
   0 => "¿CÓMO DELINEAMOS UN LABIO GRUESO?",
   1 => "Por dentro.",
   2 => "Por fuera.",
   3 => "En la línea natural.",
   6 => 3
),
22 => array(
   0 => "¿CÓMO SE COLOCA EL RUBOR?",
   1 => "Desde el pómulo, hacia el nacimiento de el cabello.",
   2 => "Desde la nariz al pómulo.",
   3 => "Desde el nacimiento del cabello, debajo del pómulo, hacia delante, sin llegar al medio rostro.",
   6 => 1
),
23 => array(
   0 => "EN UN MAQUILLAJE PARA LA NOCHE, QUE SE ENFRENTARÁ A LA LUZ ARTIFICIAL; ¿QUE DEBEMOS TENER EN CUENTA?",
   1 => "Los colores.",
   2 => "Maquillaje común.",
   3 => "No requiere nada especial.",
   6 => 2
),
24 => array(
   0 => "¿PORQUÉ DEBEMOS TENER EN CUENTA LOS COLORES PARA UN MAQUILLAJE DE NOCHE?",
   1 => "La luz da intensidad a los colores.",
   2 => "La luz quita intensidad de los colores.",
   3 => "La luz da brillo a los colores.",
   6 => 1
),
25 => array(
   0 => "¿QUÉ LOCIÓN DEBEMOS UTILIZAR PARA DEMAQUILLAR?",
   1 => "Loción astringente.",
   2 => "Loción humectante.",
   3 => "Loción demaquilladora.",
   6 => 3
),
26 => array(
   0 => "¿QUÉ ES CONVENIENTE EMPLEAR PARA TERMINAR DE QUITAR EL MAQUILLAJE?",
   1 => "Tónico descongestivo.",
   2 => "Agua corriente.",
   3 => "Jabón espumoso.",
   6 => 1
),
27 => array(
   0 => "¿CUÁL ES LA POSICIÓN MAS CONVENIENTE PARA UBICAR A LA PERSONA A MAQUILLAR?",
   1 => "Acostada totalmente.",
   2 => "Semi acostada.",
   3 => "Sentada derecha.",
   6 => 3
),
28 => array(
   0 => "¿CÓMO SE DEPILA UNA CEJA?",
   1 => "A favor de la raíz.",
   2 => "A contrapelo.",
   3 => "De izquierda a derecha.",
   6 => 1
),
29 => array(
   0 => "CUANDO SE TERMINA LA DEPILACIÓN DE LAS CEJAS, PARA EVITAR INFECCIONES SE USA:",
   1 => "Loción demaquillante.",
   2 => "Alcohol.",
   3 => "Pasar por las cejas una gasa previamente embebida en loción antiséptica.",
   6 => 3
),
);

$max=29;

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
