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
$title = "Examen Curso de Peluquería ";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "El cabello está compuesto por:",
   1 => "Carbono 19%, hidrógeno 5%, azufre 51%, nitrógeno 19% y oxígeno 7%",
   2 => "Carbono 51%, hidrógeno 7%, nitrógeno 18%, azufre 5% y oxígeno 19%",
   3 => "Carbono 7%, hidrógeno 51%, nitrógeno 7%, azufre 5% y oxígeno 5%",
   6 => 2
),
2 => array(
   0 => "¿Qué ángulo de folículo produce cabello ondulado?",
   1 => "Folículo oval",
   2 => "Folículo chato",
   3 => "Folículo redondo",
   6 => 1
),
3 => array(
   0 => "¿Cómo se denomina la falta total del cabello?",
   1 => "Alopecia areata",
   2 => "Alopecia",
   3 => "Alopecia senilis",
   6 => 2
),
4 => array(
   0 => "¿Cómo se denomina al cabello que presenta puntas partidas?",
   1 => "Trichosis",
   2 => "Trichorecsis nodosa",
   3 => "Trichoptilosis",
   6 => 3
),
5 => array(
   0 => "¿Cuáles son los factores que afectan el crecimiento del cabello?",
   1 => "Clima, hormonas y nutrición",
   2 => "Calor",
   3 => "Falta de vitaminas",
   6 => 1
),
6 => array(
   0 => "¿Qué tipo de cabellos conoce?",
   1 => "Normales, secos, grasos, mixtos",
   2 => "Teñidos",
   3 => "Permanentados",
   6 => 1
),
7 => array(
   0 => "¿Cómo se define a la capa exterior del cabello?",
   1 => "Cutícula",
   2 => "Corteza",
   3 => "Folículo",
   6 => 1
),
8 => array(
   0 => "¿Cuáles son los shampoos que contienen antihongos o germicidas?",
   1 => "Shampoo acondicionador",
   2 => "Shampoo de hierbas",
   3 => "Shampoo anticaspa",
   6 => 3
),
9 => array(
   0 => "¿Cómo se denomina el reconstructor de cabello que hace que este recobre la hume- dad?",
   1 => "Acondicionador",
   2 => "Ácido nucleico",
   3 => "Shampoo acondicionador",
   6 => 3
),
10 => array(
   0 => "¿Cuál es la herramienta utilizada para acortar o afinar el cabello majado?",
   1 => "Navaja",
   2 => "Tijeras",
   3 => "Tijeras de entresacar",
   6 => 1
),
11 => array(
   0 => "Para el corte de baja elevación en un cabello de textura mediana, se debe seccionar el cabello a:",
   1 => "45 grados",
   2 => "90 grados",
   3 => "25 grados",
   6 => 2
),
12 => array(
   0 => "Al realizar particiones en el cabello para colocación de ruleros o pinzas, ¿qué peine es conveniente?",
   1 => "Peine de estilista",
   2 => "Peine de cola",
   3 => "Peine desenredante",
   6 => 2
),
13 => array(
   0 => "¿Cómo se ubican los ruleros para producir una pequeña cantidad de volumen?",
   1 => "Ruleros fuera de la base",
   2 => "Ruleros a mitad de la base",
   3 => "Ruleros en la base",
   6 => 1
),
14 => array(
   0 => "Para aplicar un alaciador de hidróxido de sodio hay que realizar una prueba de la hebra utilizando:",
   1 => "Un pequeño trozo (pedazo) de papel aluminio",
   2 => "Aplicando el producto en la palma de la mano",
   3 => "Verificando con ayuda de un peine",
   6 => 3
),
15 => array(
   0 => "¿Cuál es la tijera para realizar un esfilado?",
   1 => "Microdentada",
   2 => "Filo dulce",
   3 => "De pulir",
   6 => 1
),
16 => array(
   0 => "¿Qué se le debe hacer siempre a un corte rebajado?",
   1 => "Entresacarlo",
   2 => "Pasarle máquina",
   3 => "Pulirlo",
   6 => 1
),
17 => array(
   0 => "¿Para afinar o entresacar el cabello grueso que guía debe utilizar?",
   1 => "Comenzar de una pulgada a una pulgada y media del cuero cabelludo",
   2 => "Comenzar a media pulgada o una pulgada del cuero cabelludo",
   3 => "Comenzar de una pulgada y media a dos pulgadas del cuero cabelludo",
   6 => 3
),
18 => array(
   0 => "¿En qué tipo de cabello debemos comenzar el afinamiento o entresacado de éste comenzando de una pulgada y media a dos pulgadas del cuero cabelludo?",
   1 => "Cabello medio",
   2 => "Cabello fino",
   3 => "Cabello grueso",
   6 => 3
),
19 => array(
   0 => "¿Qué factores afectan a la permanente?",
   1 => "No seguir las instrucciones del fabricante",
   2 => "Calefacción",
   3 => "Humedad",
   6 => 1
),
20 => array(
   0 => "¿Cuándo debemos aplicar producto de permanente?",
   1 => "Cuando el cabello está en condición dañada",
   2 => "Cuando el cliente no ha experimentado reacción alérgica",
   3 => "Cuando se ha realizado el brushing",
   6 => 2
),
21 => array(
   0 => "Para evitar que la loción se introduzca el la piel o en los ojos",
   1 => "Aplicar agua",
   2 => "Aplicar tira de algodón",
   3 => "Aplicar la crema protectora",
   6 => 1
),
22 => array(
   0 => "¿Cuándo se une físicamente a la cutícula el pigmento artificial?",
   1 => "Cuando cubre la cutícula del cabello con pigmento",
   2 => "Cuando se remueve el pigmento natural de la cabeza",
   3 => "Cuando coloreamos el pigmento natural de la corteza",
   6 => 1
),
23 => array(
   0 => "Los colores secundarios son colores:",
   1 => "Acromáticos",
   2 => "Terciarios",
   3 => "Cromáticos",
   6 => 3
),
24 => array(
   0 => "¿Cuáles son los colores primarios?",
   1 => "Naranja, verde, violeta",
   2 => "Rojo, amarillo, azul",
   3 => "Rojo + Violeta = Rojo – Violeta",
   6 => 2
),
25 => array(
   0 => "¿Qué colores forman la base para los productos de coloración del cabello?",
   1 => "Los colores complementarios",
   2 => "Los doce colores puros primarios, secundarios y terciarios",
   3 => "La mezcla de colores complementarios",
   6 => 2
),
26 => array(
   0 => "Para corregir el problema de coloración verde puede ser neutralizado utilizando color",
   1 => "Utilizando colorante con base rojo",
   2 => "Utilizando colorante con base amarillo",
   3 => "Utilizando colorante con base violeta",
   6 => 1
),
27 => array(
   0 => "Color frío y cálido es cuando nos referimos a:",
   1 => "La profundidad del color",
   2 => "Al valor tonal del color",
   3 => "Cuando hay presencia del color rojo",
   6 => 1
),
28 => array(
   0 => "¿Cuáles de los siguientes colores son fríos?",
   1 => "Las sombras cenizas",
   2 => "Los rojos",
   3 => "Los tonos azules",
   6 => 3
),
29 => array(
   0 => "¿Cuáles de los siguientes colores son cálidos?",
   1 => "Sombras cenizas",
   2 => "Tonos rojos",
   3 => "Los tonos azules",
   6 => 2
),
30 => array(
   0 => "¿Cuál de los agentes colorantes es el más común?",
   1 => "Peróxido de hidrógeno de veinte volúmenes que tiene un PH de 3, 5 a 4",
   2 => "Peróxido de hidrógeno de diez volúmenes",
   3 => "Peróxido de hidrógeno de treinta volúmenes",
   6 => 2
),
31 => array(
   0 => "¿Para decoloración del cabello cuántas etapas existen?",
   1 => "3",
   2 => "7",
   3 => "5",
   6 => 2
),
32 => array(
   0 => "¿Para qué se utiliza la aplicación cerca del cuero cabelludo?",
   1 => "Se utiliza para aplicar en un cabello que no está decolorado",
   2 => "Para aplicar en un cabello cano",
   3 => "Para retocar un cabello previamente coloreado o decolorado",
   6 => 3
),
33 => array(
   0 => "¿Cómo se comienza la decoloración del cabello virgen?",
   1 => "Se comienza la aplicación a 1.25 cm. del cuero cabelludo",
   2 => "Se comienza la aplicación bien cerca del cuero cabelludo",
   3 => "Se comienza la aplicación a 3 cm. del cuero cabelludo",
   6 => 3
),
34 => array(
   0 => "¿Cuáles de éstos tonos no son cálidos?",
   1 => "744 ",
   2 => "4.26 ",
   3 => "6.66",
   6 => 2
),
);

$max=35;

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
