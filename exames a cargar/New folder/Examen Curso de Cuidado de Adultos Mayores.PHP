
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
$title = "Examen Curso de Cuidado de Adultos Mayores";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Una alimentación saludable para el adulto mayor requiere:",
   1 => "2 comidas diarias ",
   2 => "4 comidas al día",
   3 => "1 comida abundante por día ",
   6 => 2
),
2 => array(
   0 => "En la higiene del sueño es conveniente dormir una siesta:",
   1 => "Prolongada",
   2 => "2 horas",
   3 => "30 minutos",
   6 => 3
),
3 => array(
   0 => "La presbicia es la disminución de la visión que afecta a la capacidad de ver objetos:",
   1 => "Cercanos",
   2 => "Lejanos",
   3 => "Deformados",
   6 => 1
),
4 => array(
   0 => "Cuando una persona es discapacitada es conveniente:",
   1 => "Al hablar dirigirse al asistente o acompañante ",
   2 => "Mirarla y hablarle directamente",
   3 => "Evitar hablar en su presencia ",
   6 => 2
),
5 => array(
   0 => "La expresión de los sentimientos del cuidador es:",
   1 => "No conveniente en ningún caso",
   2 => "Conveniente solo con los familiares del paciente:",
   3 => "Favorable a la comunicación",
   6 => 3
),
6 => array(
   0 => "Si se reconocen en el paciente acciones o responsabilidades que pueda realizar es necesario:",
   1 => "No informar al paciente ",
   2 => "No permitir que las realice para que se encuentre descansado",
   3 => "Comunicárselo e insistir que las repita ",
   6 => 3
),
7 => array(
   0 => "Se considera en términos generales a los que padecen depresión que debidamente diagnosticada",
   1 => "El 80 % de los casos se recupera ",
   2 => "Es irrecuperable ",
   3 => "Sólo un 10 % se recupera ",
   6 => 1
),
8 => array(
   0 => "El cuidador debe cuidarse ",
   1 => "Si",
   2 => "No es necesario salvo en casos extremos ",
   3 => "No es necesario porque permanece indiferente ",
   6 => 1
),
9 => array(
   0 => "Es conveniente que el adulto mayor aprenda nuevas habilidades:",
   1 => "No es recomendable por psiquismo",
   2 => "Si porque lo mantiene activo",
   6 => 2
),
10 => array(
   0 => "La boca seca es más frecuente al envejecer y se debe principalmente a:",
   1 => "Uso de prótesis dentales",
   2 => "Falta de saliva en la boca",
   3 => "Deshidratación",
   6 => 2
),
11 => array(
   0 => "Es aconsejable en la higiene diaria usar:",
   1 => "La bañera",
   2 => "La ducha",
   6 => 2
),
12 => array(
   0 => "Por lo general se le recomienda al adulto mayor sedentario realizar deportes como:",
   1 => "Caminatas natación pedalear",
   2 => "Fútbol esgrima",
   3 => "Tenis levantamiento de pesas ",
   6 => 1
),
13 => array(
   0 => "En el servicio de pedicura se debe tener especial cuidado con pacientes con:",
   1 => "Depresión",
   2 => "Hipertensos",
   3 => "Diabéticos ",
   6 => 3
),
14 => array(
   0 => "Al dormir es más saludable hacerlo:",
   1 => "Sin almohada ",
   2 => "Con una almohada alta",
   3 => "Una almohada baja",
   6 => 3
),
15 => array(
   0 => "En los medicamentos que se le suministren:",
   1 => "Es conveniente triturar las tabletas o cápsulas para que las digiera mejor",
   2 => "Debe dárselas enteras",
   6 => 2
),
16 => array(
   0 => "Para cuidar el tránsito intestinal y evitar el estreñimiento es recomendable:",
   1 => "Ir al baño a la misma hora",
   2 => "Tomar laxantes regularmente ",
   3 => "No hacer rutinas diarias",
   6 => 1
),
17 => array(
   0 => "Que debe hacer el cuidador con sus propios sentimientos:",
   1 => "Reprimirlos en beneficio del paciente",
   2 => "Expresarlos y aceptarlos en forma controlada",
   3 => "Ignorarlos",
   6 => 2
),
18 => array(
   0 => "Si un paciente se tornara agresivo es favorable:",
   1 => "Tratar de imponerse e increparon",
   2 => "No enfrentarlo y dejarlo solo a que se le pase",
   6 => 2
),
19 => array(
   0 => "El calzado es conveniente que sea:",
   1 => "Bien ajustados ",
   2 => "Separación de 1 cm de los dedos de los pies",
   6 => 2
),
20 => array(
   0 => "La vacuna antitetánica repite una dosis cada:",
   1 => "10 años",
   2 => "6 meses",
   3 => "3 años",
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
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>
<BR>     <input type=text name=response size=8>


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

