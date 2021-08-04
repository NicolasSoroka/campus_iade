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
$title = "Examen Curso de Construcción en Seco";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Los perfiles de acero para solteras tienen sección en:",
   1 => ""C"",
   2 => ""U"",
   3 => "Trapezoidal",
   6 => 3
),
2 => array(
   0 => "La masilla preparada para juntas tiene un tiempo de secado de:",
   1 => "45 minutos",
   2 => "12 hs",
   3 => "24 hs",
   6 => 3
),
3 => array(
   0 => "Aplicado un adhesivo a la placa se nivelara y presionará con:",
   1 => "Presión manual",
   2 => "Con prensa",
   3 => "Con prensa",
   6 => 3
),
4 => array(
   0 => "El aislamiento térmico y acústico deberá ser colocado sobre los perfiles de modo:",
   1 => "Transversal a los perfiles omega",
   2 => "Paralelos a los perfiles omega",
   3 => "Cruzados para mayor eficacia",
   6 => 1
),
5 => array(
   0 => "Para la protección de los tornillos de la corrosión en estructuras de acero se utilizan productos como:",
   1 => "Fosfatado y electrocincado",
   2 => "Enchapado mecánico en cinc",
   3 => "Las dos anteriores",
   6 => 3
),
6 => array(
   0 => "Toda construcción descansa sobre una fundación. El sistema steel framing admite ser ejecutado sobre:",
   1 => "Platea de hormigón armado sobre el terreno",
   2 => "Sólo el sistema de Zapata corrida",
   3 => "Cualquier tipo de fundación",
   6 => 3
),
7 => array(
   0 => "Los dinteles en el sistema steel framing son resueltos con perfiles:",
   1 => "Omega",
   2 => ""C" y "U"",
   3 => "Sólo "U"",
   6 => 2
),
8 => array(
   0 => "Al colocar placas resistentes al agua en el exterior:",
   1 => "Se deberá dejar un espacio por la dilatación",
   2 => "Se colocará un fibrado aislante",
   3 => "No se deja espacio de dilatación",
   6 => 3
),
9 => array(
   0 => "Al colocar tejas se tiene en cuenta:",
   1 => "Pueden colocarse en cualquier ángulo",
   2 => "No puede ser utilizadas en pendientes menores a 7 grados",
   3 => "Sólo se colocan en superficies sin ventilación",
   6 => 2
),
10 => array(
   0 => "Al colocar una ventana o puerta se refuerza la estructura con:",
   1 => "Listones de madera",
   2 => "Hierro atornillado",
   3 => "Doble estructura de perfiles de chapa",
   6 => 1
),
);

$max=10;

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
