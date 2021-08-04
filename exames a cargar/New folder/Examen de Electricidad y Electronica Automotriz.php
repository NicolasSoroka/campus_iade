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
$title = "Examen Curso de Electricidad y Electrónica Automotriz";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Un voltímetro se conecta:",
   1 => "En serie",
   2 => "En paralel",
   3 => "En serie paralelo",
   6 => 2
),
2 => array(
   0 => "Un amperímetro se conecta",
   1 => "En serie",
   2 => "En paralelo.",
   3 => "En paralelo.",
   6 => 1
),
3 => array(
   0 => "Una batería es:",
   1 => "Un acumulador.",
   2 => "Un generador.",
   3 => "Un condensador.",
   6 => 2
),
4 => array(
   0 => "La densidad del electrolito disminuye al descargarse la batería, porque:",
   1 => "El agua se evapora.",
   2 => "El ácido se evapora.",
   3 => "El ácido se adhiere a las placas.",
   6 => 1
),
5 => array(
   0 => "Cuando el nivel de electrolito es bajo en una batería, se debe agregar:",
   1 => "Electrolito.",
   2 => "Únicamente ácido sulfúrico.",
   3 => "Únicamente agua destilada.",
   6 => 3
),
6 => array(
   0 => "Qué intensidad máxima se aconseja para cargar una batería en forma rápida?",
   1 => "El 50% de la capacidad.",
   2 => "El 20% de la capacidad.",
   3 => "El 10% de la capacidad.",
   6 => 1
),
7 => array(
   0 => "Para conectar 2 baterías en serie lo hacemos:",
   1 => "Uniendo los bornes positivos para un lado y los negativos para otro; para luego sacar de cada uno el consumo.",
   2 => "Uniendo un positivo con un negativo y el otro positivo con el otro negativo para luego sacar consumo.",
   3 => "Uniendo un positivo con un negativo y de los otros dos sacar hacia elconsumo.",
   6 => 3
),
8 => array(
   0 => "La tensión de carga de un alternador normalmente oscila en un sistema de 12V:",
   1 => "De 12v a 13v.",
   2 => "De 13v a 14,4v.",
   3 => "De 14,4v a 16v.",
   6 => 3
),
9 => array(
   0 => "Con el motor en marcha, la luz del alternador no apaga completamente; en un sistema con regulador incorporado, la falla podría ser:",
   1 => "Escobillas en mal estado.",
   2 => "Caída de tensión en el cable de carga.",
   3 => "Diodo quemado.",
   6 => 2
),
10 => array(
   0 => "El bobinado grueso del automático de un motor de arranque, hace masa a través del bobinado principal del motor, con la finalidad de:",
   1 => "Provocar un pequeño giro al rotor y facilitar el acople del piñón.",
   2 => "Poder atraer con más fuerza al solenoide.",
   3 => "Para que pueda hacer buen contacto el automático.",
   6 => 1
),
11 => array(
   0 => "Si en el momento de dar arranque, el motor no gira y las luces del tablero se apagan completamente, la falla podría ser:",
   1 => "Excesivo consumo del motor de arranque.",
   2 => "Escobillas gastadas.",
   3 => "Terminal sobre el borne de batería flojo.",
   6 => 1
),
12 => array(
   0 => "El borne 49a de un destellador electrónico de señalero se conecta:",
   1 => "A contacto.",
   2 => "A la luz indicadora del tablero.",
   3 => "A la llave de giro.",
   6 => 2
),
13 => array(
   0 => "Para poner a punto un encendido convencional, colocamos el pistón No1 en el PMS de compresión y el distribuidor de forma tal que:",
   1 => "El platino quede cerrado.",
   2 => "El platino comenzando a abrir.",
   3 => "El platino, completamente abierto.",
   6 => 2
),
14 => array(
   0 => "La resistencia del bobinado primario de una bobina para encendido electrónico, puede oscilar entre:",
   1 => "1 a 3 Ohms.",
   2 => "7.000 a 12.000 Ohms.",
   3 => "800 a 1100 Ohms.",
   6 => 1
),
15 => array(
   0 => "El orden de encendido de un motor de 6 cilindros, es:",
   1 => "1 3 4 2 6 5",
   2 => "1 3 4 2 6 5",
   3 => "1 5 3 6 4 2",
   6 => 2
),
16 => array(
   0 => "Un encendido por demás avanzado podría provocar:",
   1 => "Detonación cuando aceleramos.",
   2 => "Exceso de consumo.",
   3 => "Mala reacción en el momento de acelerar.",
   6 => 1
),
17 => array(
   0 => "Una bujía con depósito de carbonilla:",
   1 => "Puede ocasionar autoencendido.",
   2 => "Contra explosiones en el escape.",
   3 => "Contra explosiones en el carburador.",
   6 => 1
),
18 => array(
   0 => "Para chequear si un motor no arranca por falta de chispa y utiliza encendido electrónico:",
   1 => "Debemos retirar un cable de bujías y ponerlo próximo a masa para dar arranque.",
   2 => "Debemos utilizar una bujía en el extremo del cable para dar arranque.",
   6 => 2
),
19 => array(
   0 => "Cuando analizamos un encendido electrónico con el osciloscopio y notamos que un pico de tensión para un cilindro es más elevado que los demás:",
   1 => "La falla podría ser bujía muy cerrada.",
   2 => "Bujía sucia.",
   3 => "Mucha luz entre electrodos de bujía.",
   6 => 3
),
20 => array(
   0 => "El ángulo Dwell en el encendido significa:",
   1 => "Tiempo de duración de la chispa.",
   2 => "Tiempo en que está circulando corriente por el primario de bobina.",
   3 => "Tiempo que hay entre chispa y chispa.",
   6 => 2
),
21 => array(
   0 => "Si a un motor de encendido convencional y con alternador, se conecta la batería con los bornes invertidos:",
   1 => "Se daña la bobina de encendido.",
   2 => "Se dañan los diodos del alternador.",
   3 => "Puede funcionar correctamente.",
   6 => 2
),
22 => array(
   0 => "Si el bobinado de los campos de un motor de arranque está cortado:",
   1 => "El automático se pega al dar arranque pero no gira el motor",
   2 => "El automático se pega al dar arranque pero el motor gira lento.",
   3 => "El automático no pega.",
   6 => 3
),
23 => array(
   0 => "El consumo de un motor de arranque para motor A GASOLINA, puede ser:",
   1 => "De 4 veces más que la capacidad de la batería.",
   2 => "Del valor aproximado a las pulgadas cúbicas de cilindrada del motor.",
   3 => "Del valor de la capacidad de la batería.",
   6 => 3
),
24 => array(
   0 => "Para el cambio de escobillas de un motor de arranque es aconsejable usar en la soldadura:",
   1 => "Estaño en hilo de 2 mm. aproximadamente.",
   2 => "Estaño en barra de 50% aproximadamente.",
   6 => 2
),
25 => array(
   0 => "Al poner en contacto la luz indicadora de presión de aceite no funciona y queremos VERIFICAR si la dificultad está en la lámpara o en el bulbo:",
   1 => "Aplicamos el cable del bulbo a positivo: la luz debiera prender; por lo tanto la dificultad está en el bulbo.",
   2 => "Aplicamos el cable del bulbo a masa: la luz debiera prender, por lo tanto la dificultad está en el bulbo.",
   6 => 1
),
26 => array(
   0 => "Si el sistema de retorno del limpia parabrisas no funciona al apagarlo el desperfecto podría estar:",
   1 => "En el temporizador.",
   2 => "En las escobillas del motor eléctrico.",
   3 => "En los engranajes de reducción.",
   6 => 3
),
27 => array(
   0 => "Para determinar a que parte de la iluminación de un vehículo derivan una determinada cantidad de cables que han sido cortados:",
   1 => "Debemos aplicarle corriente en forma directa y ver que luz prende.",
   2 => "Debemos aplicarle corriente a través del filamento de una lámpara de elevada potencia y ver que luz prende.",
   3 => "Debemos medir con un tester.",
   6 => 1
),
28 => array(
   0 => "Las lámparas de posición deben ser de:",
   1 => "5 watts.",
   2 => "21 watts.",
   3 => "40 watts.",
   6 => 1
),
);

$max=28;

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
