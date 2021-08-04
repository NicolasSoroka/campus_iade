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
$title = "Examen Curso de Motos de Alta Cilindrada";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "El rango de temperatura de una bujía de motores a explosión es:",
   1 => "Igual para los motores en mínimo y máximo",
   2 => "Diferentes para cada motor en mínimo y máximo",
   6 => 2
),
2 => array(
   0 => "Una bujía floja puede provocar:",
   1 => "Fuga de gases de combustión",
   2 => "Daño en la rosca de la cabeza del motor",
   6 => 1
),
3 => array(
   0 => "En pistas arenosas la compresión y el rebote de la suspensión debe ser:",
   1 => "Elevados",
   2 => "Menos duros y menos lentos",
   6 => 1
),
4 => array(
   0 => "Los aceites multigrados son diseñados para trabajar",
   1 => "En un rango específico de temperatura",
   2 => "En un rango amplio de temperatura",
   6 => 2
),
5 => array(
   0 => "Una máquina similar a la usada por instaladores de gas sirve para:",
   1 => "Hacer pruebas de presión",
   2 => "Hacer pruebas de presión",
   6 => 1
),
6 => array(
   0 => "La mezcla de 1 parte de soda cáustica con 8 partes de agua para el descarbonillado del tubo de escape no debe usarse en:",
   1 => "Aluminio",
   2 => "Hierro",
   6 => 1
),
7 => array(
   0 => "Un cilindro debe ser rectificado al tamaño mayor que indica el manual si excede de:",
   1 => "0.3 mm de desgaste",
   2 => "0.1 mm de desgaste",
   6 => 2
),
8 => array(
   0 => "El desgaste y rayado del cilindro se puede deber a:",
   1 => "Rotura de anillo o compresión alta",
   2 => "Ambas cosas",
   6 => 2
),
9 => array(
   0 => "El filtro de aire que presenta mayor capacidad de limpieza es de:",
   1 => "Papel plegable",
   2 => "Esponja de poliuretano",
   6 => 1
),
10 => array(
   0 => "Cuando el nivel de combustible en el tanque es demasiado bajo la llave de paso se coloca en posición:",
   1 => "On",
   2 => "Res",
   6 => 2
),
11 => array(
   0 => "El poco control sobre admisión escape de gases en el cilindro es la desventaja que tienen los motores de:",
   1 => "4 tiempos",
   2 => "2 tiempos",
   6 => 2
),
12 => array(
   0 => "En las baterías es importante controlar que el nivel del electrolito se encuentre a:",
   1 => "En las baterías es importante controlar que el nivel del electrolito se encuentre a",
   2 => "A nivel de las placas",
   6 => 1
),
13 => array(
   0 => "La distribución está compuesta por:",
   1 => "Engranaje de mando, árbol de levas,taques y valvulas",
   2 => "Engranaje de mando, árbol de levas, pistones",
   6 => 1
),
14 => array(
   0 => "Las 2 levas que tienen cada cilindro son:",
   1 => "Para admisión",
   2 => "Para admisión y escape",
   6 => 2
),
15 => array(
   0 => "Los telescopios de amortiguación se usan en:",
   1 => "Suspensión delantera",
   2 => "Suspensión trasera",
   6 => 1
),
16 => array(
   0 => "Si el uso de la moto es arduo como en los servicios de mensajes se recomienda cambiar las zapatas de frenos cada:",
   1 => "2 meses",
   2 => "6 meses",
   6 => 1
),
17 => array(
   0 => "Con un uso medio una cadena de moto puede durar:",
   1 => "30.000 km",
   2 => "12.000 km",
   6 => 1
),
18 => array(
   0 => "Los embragues de accionamiento hidráulico requieren con respecto a los convencionales:",
   1 => "Mayor mantenimiento",
   2 => "Menor mantenimiento",
   6 => 2
),
19 => array(
   0 => "Los cables del embrague revestidos con nylon se deben:",
   1 => "Los cables del embrague revestidos con nylon se deben",
   2 => "engrasar",
   6 => 1
),
20 => array(
   0 => "Los motores que pesan poco y son ruidosos generalmente se refrigeran con:",
   1 => "Aire",
   2 => "Agua",
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
