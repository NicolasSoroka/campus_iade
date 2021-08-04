
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
$title = "Examen Curso de Bobinado";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "En los átomos las partículas que giran al rededor del núcleo:  ",
   1 => "Se denominan protones",
   2 => "Se llaman electrones",
   6 => 2
),
2 => array(
   0 => "Se considera que un cuerpo presenta tensión o voltaje negativo cuando posee:",
   1 => "Un exceso de electrones",
   2 => "Un exceso de protones",
   6 => 1
),
3 => array(
   0 => "La corriente eléctrica consiste en el desplazamiento de:",
   1 => "Protones",
   2 => "Electrones",
   6 => 2
),
4 => array(
   0 => "Por un conducto conectado a los polos negativo y positivo de un generador, la corriente eléctrica se desplaza:",
   1 => "De positivo a negativo",
   2 => "De negativo a positivo",
   6 => 2
),
5 => array(
   0 => "La resistencia eléctrica que presentan distintos materiales representa:",
   1 => "Facilidad al paso de la corriente eléctrica",
   2 => "Oposición al paso de la corriente eléctrica",
   6 => 2
),
6 => array(
   0 => "La unidad de intensidad de corriente eléctrica es:",
   1 => "El ampere",
   2 => "El coulomb",
   6 => 1
),
7 => array(
   0 => "La unidad de resistencia eléctrica es:",
   1 => "El Volt",
   2 => "El Ampere",
   3 => "El Ohm",
   6 => 3
),
8 => array(
   0 => "La unidad de tensión eléctrica es",
   1 => "El Ampere",
   2 => "El Volt",
   6 => 2
),
9 => array(
   0 => "Al disponer de dos o más resistores en serie, la resistencia total del circuito resulta ser:",
   1 => "El resultado de la manipulación de sus valores",
   2 => "El resultado de la suma de sus valores",
   6 => 2
),
10 => array(
   0 => "Si en un circuito eléctrico no se modifica la resistencia y se aumenta la tensión aplicada:",
   1 => "La intensidad de corriente disminuye",
   2 => "La intensidad de corriente aumenta",
   6 => 2
),
11 => array(
   0 => "Si en un circuito eléctrico no se modifica la tensión aplicada se aumenta la resistencia:",
   1 => "La intensidad de corriente disminuyo",
   2 => "La intensidad de corriente aumenta",
   6 => 1
),
12 => array(
   0 => "En todo circuito serie, la intensidad de corriente:",
   1 => "Es la misma en cualquier punto del circuito",
   2 => "Disminuye a medida que la corriente atraviesa distintas resistencias",
   6 => 1
),
13 => array(
   0 => "En todo circuito paralelo, la suma de las corrientes que se acercaran a un punto:",
   1 => "Es igual a la suma de las corrientes que se alejan de dicho punto",
   2 => "Es igual a la diferencia de las corrientes que se alejan de dicho punto",
   6 => 1
),
14 => array(
   0 => "En todo circuito serie, la suma de las tensiones que se desarrollan sobre cada resistencia:",
   1 => "Es igual a la tensión de la fuente",
   2 => "Es igual a la intensidad de corriente circulante",
   6 => 1
),
15 => array(
   0 => "Para calcular la potencia eléctrica que se desarrolla en un circuito se debe:",
   1 => "Multiplicar la tensión por la intensidad",
   2 => "Multiplicar la tensión por la resistencia",
   6 => 1
),
16 => array(
   0 => "El flujo magnético de una bobina aumenta cuando:",
   1 => "La corriente circulante disminuye",
   2 => "La corriente circulante aumenta",
   6 => 2
),
17 => array(
   0 => "Todo conductor que se desplaza por un campo magnético cortando sus líneas de fuerza:",
   1 => "Recibe una tensión inducida",
   2 => "Disminuye su resistencia eléctrica",
   6 => 1
),
18 => array(
   0 => "Al enfrentar dos polos norte de dos imanes:",
   1 => "Se atraen ",
   2 => "Se rechazan",
   6 => 2
),
19 => array(
   0 => "La ley de Lenz establece que toda la corriente inducida genera un campo magnético que:",
   1 => "Refuerza la causa que la genera",
   2 => "Se opone a la causa que la genera",
   6 => 2
),
20 => array(
   0 => "Al aplicar una tensión a una bobina, la intensidad de corriente:",
   1 => "Toma instantáneamente el valor que determina la Ley de Ohm",
   2 => "Demora un cierto tiempo en tomar el valor que determina la Ley de Ohm",
   6 => 2
),
21 => array(
   0 => "La unidad de inductancia es:",
   1 => "El Henry",
   2 => "El Ohm",
   6 => 1
),
22 => array(
   0 => "¿Qué es el período de una corriente alterna?",
   1 => "El tiempo que dura un ciclo, en segundos",
   2 => "El tiempo que dura un semiciclo, en segundos",
   6 => 2
),
23 => array(
   0 => "La frecuencia de la corriente alterna representa:",
   1 => "El tiempo de duración de un ciclo",
   2 => "La cantidad de ciclos que se generan en un segundo",
   6 => 2
),
24 => array(
   0 => "Al aumentar la inductancia de un circuito conectado a una fuente de corriente alterna:",
   1 => "La intensidad de corriente aumenta",
   2 => "La intensidad de corriente disminuye",
   6 => 1
),
25 => array(
   0 => "Cuando el secundario tiene más espiras que el primario, el transformador es:",
   1 => "Reductor de tensión",
   2 => "Elevador de tensión",
   6 => 2
),
26 => array(
   0 => "En un transformador real, la potencia en el secundario:",
   1 => "Es igual a la potencia en el secundario",
   2 => "Es mayor que la potencia del primario",
   3 => "Es menor que la potencia del primario",
   6 => 1
),
27 => array(
   0 => "Se considera que un capacitor se encuentra cargado cuando la diferencia potencial entre sus armaduras:",
   1 => "Es menor que la tensión de la fuente",
   2 => "Es igual que la tensión de la fuente",
   6 => 2
),
28 => array(
   0 => "La unidad de capacidad eléctrica es:",
   1 => "El Coulomb",
   2 => "El Faradio",
   6 => 2
),
29 => array(
   0 => "Al conectar dos capacitores en paralelo, la capacidad total se calcula:",
   1 => "Multiplicando sus valores",
   2 => "Sumando sus valores",
   6 => 2
),
30 => array(
   0 => "Al conectar dos capacitores en serie, la capacidad total se acumula:",
   1 => "Sumando sus valores",
   2 => "Multiplicando sus valores dividiendo el resultado por su suma",
   6 => 2
),
31 => array(
   0 => "La medición de resistencia con multímetro se efectúa:",
   1 => "Con tensión ",
   2 => "Sin tensión",
   6 => 2
),
32 => array(
   0 => "La pinza amperimétrica debe abarcar:",
   1 => "Un sólo conductor",
   2 => "Ambos conductores",
   6 => 2
),
33 => array(
   0 => "Para medir tensión, el multímetro debe conectarse:",
   1 => "En serie con la carga",
   2 => "En paralelo con la carga",
   6 => 2
),
34 => array(
   0 => "Al probar con la serie un aparato eléctrico con cortocircuito:",
   1 => "La lampara enciende a plena luz",
   2 => "La lampara enciende a media luz",
   6 => 1
),
35 => array(
   0 => "Al probar con la serie una bobina ininterrumpida:",
   1 => "La lampara enciende",
   2 => "La lampara no enciende ",
   6 => 2
),
36 => array(
   0 => "Cual de estas pérdidas de energía no corresponde a un transformador:",
   1 => "Perdidas por histéresis magnética",
   2 => "Perdidas por corrientes parasitas o de Foucault",
   3 => "Perdidas por rozamiento",
   6 => 3
),
37 => array(
   0 => "El núcleo de los transformadores se construye laminado:",
   1 => "Para reducir su peso",
   2 => "Para contrarrestar las corrientes parasitas de Foucault",
   6 => 2
),
38 => array(
   0 => "En un Transformador reductor de tensión:",
   1 => "El bobinado primario tiene mayor resistencia eléctrica que el secundario",
   2 => "El bobinado secundario tiene mayor resistencia eléctrica que el primario",
   6 => 1
),
39 => array(
   0 => "Un transformador 220/110V tiene 400 espiras en el primario ¿Cuántas espiras tiene en el secundario?",
   1 => "800",
   2 => "200",
   3 => "100",
   6 => 2
),
40 => array(
   0 => "Los motores universales:",
   1 => "Funcionan solamente en corriente continua",
   2 => "Funcionan solamente en corriente alterna",
   3 => "Pueden funcionar en ambas corrientes",
   6 => 3
),
41 => array(
   0 => "Si al probar el rotor de un motor serie universal con el probador de inducidos, la hoja de sierra vibra:",
   1 => "El bobinado del rotor se encuentra abierto",
   2 => "El rotor se encuentra en cortocircuito",
   6 => 2
),
42 => array(
   0 => "Un rotor jaula de ardilla",
   1 => "Recibe corriente directamente de la red de alimentación",
   2 => "No recibe corriente directamente de la red de alimentación",
   6 => 2
),
43 => array(
   0 => "El rotor jaula de ardilla lleva en las ranuras del núcleo:",
   1 => "Arrollamientos de alambre frío",
   2 => "Barras de cobre",
   6 => 2
),
44 => array(
   0 => "El interruptor centrifugo cumple la misión de:",
   1 => "Detener la marcha del motor",
   2 => "Desconectar el bobinado de arranque cuando el motor alcanza un 75% de la velocidad de régimen",
   6 => 2
),
45 => array(
   0 => "Los motores asíncronos monofásicos, ante una variación de la carga:",
   1 => "Mantienen su velocidad prácticamente constante",
   2 => "No mantienen su velocidad constante",
   6 => 2
),
46 => array(
   0 => "En un motor de fase partica, el devanado que presenta mayor resistencia eléctrica es:",
   1 => "El devanado de trabajo",
   2 => "El devanado de arranque",
   6 => 1
),
47 => array(
   0 => "¿Cuál es la velocidad de un motor de 4 polos conectado a una red de SHOZ?",
   1 => "750 RPM",
   2 => "1500 RPM",
   3 => "3000 RPM",
   6 => 2
),
48 => array(
   0 => "En los motores asíncronos trifásicos con rotor jaula de ardilla, el rotor gira:",
   1 => "A menor velocidad en carga que en vacío",
   2 => "A igual velocidad en carga que en vacío",
   6 => 1
),
49 => array(
   0 => "En un rotor asíncrono trifásico con rotor jaula de ardilla:",
   1 => "El rotor gira a igual velocidad que el campo giratorio",
   2 => "El rotor gira a menor velocidad que el campo giratorio",
   6 => 2
),
50 => array(
   0 => "El desfasaje entre las fases de un motor trifásico es de:",
   1 => "90°",
   2 => "120°",
   3 => "180°",
   6 => 2
),
);

$max=50;

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