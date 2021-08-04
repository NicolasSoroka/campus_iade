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
$title = "Examen Curso de Refrigeración y Aire Acondicionado";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Al comprimir un gas en un cilindro, dicho gas:",
   1 => "Se enfría.",
   2 => "Se calienta.",
   3 => "Permanece a temperatura ambiente.",
   6 => 1
),
2 => array(
   0 => "¿Qué función cumple el compresor?",
   1 => "Aspira vapores del evaporador, los comprime y los envía al condensador.",
   2 => "Aspira vapores del condensador y los envía al evaporador.",
   6 => 1
),
3 => array(
   0 => "La válvula de expansión cumple la función de:",
   1 => "Transformar en gas el líquido refrigerante que recibe del condensador.",
   2 => "Regular la entrada de refrigerante al evaporador.",
   6 => 2
),
4 => array(
   0 => "En equipos de refrigeración familiar se utilizan motores eléctricos cuya potencia varía entre:",
   1 => "1/8 y 1/2 Hp.",
   2 => "1/2 y 3/4 Hp.",
   6 => 1
),
5 => array(
   0 => "El evaporador de un equipo de refrigeración se encuentra ubicado en la parte de:",
   1 => "Alta presión.",
   2 => "Baja presión.",
   6 => 2
),
6 => array(
   0 => "En los equipos herméticos modernos la velocidad de los motores es del orden de las:",
   1 => "750 RPM.",
   2 => "1400 RPM.",
   3 => "2800 RPM.",
   6 => 3
),
7 => array(
   0 => "En los equipos herméticos, el eje del motor y el eje del compresor:",
   1 => "Se encuentran acoplados directamente.",
   2 => "Se encuentran acoplados por medio de una correa.",
   6 => 1
),
8 => array(
   0 => "El punto de ebullición de un refrigerante:",
   1 => "Debe ser menor que la temperatura que deseamos tener en el evaporador.",
   2 => "Debe ser mayor que la temperatura ambiente.",
   6 => 1
),
9 => array(
   0 => "La cantidad de lubricante a colocar en un equipo:",
   1 => "Debe ser justo la indicada por el fabricante.",
   2 => "Es mejor que la cantidad de aceite a colocar sea mayor que la indicada.",
   6 => 1
),
10 => array(
   0 => "En el sistema de refrigeración por absorción, el refrigerante utilizado es:",
   1 => "Freón 12.",
   2 => "Freón 22.",
   3 => "Amoníaco.",
   6 => 3
),
11 => array(
   0 => "El desagüe de las cámaras frigoríficas debe ser:",
   1 => "En forma de sifón.",
   2 => "En forma directa.",
   6 => 1
),
12 => array(
   0 => "El uso de espuma de poliuretano inyectado, que se emplea en el aislamiento de muebles frigoríficos permite:",
   1 => "Mantener el mismo espesor de las paredes aislantes.",
   2 => "Disminuir el espesor de las paredes aislantes.",
   6 => 1
),
13 => array(
   0 => "En la construcción de cámaras frigoríficas, es necesario impermeabilizar las paredes interiores a fin de lograr:",
   1 => "Una junta estanca a la penetración del vapor de agua, contenido en el aire.",
   2 => "La penetración del aire exterior.",
   6 => 1
),
14 => array(
   0 => "Para establecer la diferencia de temperaturas entre el ambiente exterior y el interior de una cámara, debe calcularse para la primera:",
   1 => "La temperatura máxima de la época más calurosa.",
   2 => "La temperatura mínima de la época más calurosa.",
   3 => "La temperatura media de la época más calurosa.",
   6 => 1
),
15 => array(
   0 => "En el cálculo de una cámara frigorífica, al obtener la carga total, se agrega un coeficiente de seguridad que normalmente es del:",
   1 => "10%.",
   2 => "50%.",
   3 => "90%.",
   6 => 1
),
16 => array(
   0 => "Se comprobó prácticamente que cargas eléctricas del mismo signo:",
   1 => "Se repelen.",
   2 => "Se atraen.",
   6 => 1
),
17 => array(
   0 => "La unidad de medida de la intensidad de corriente eléctrica es:",
   1 => "El Volt.",
   2 => "El Ampere.",
   6 => 2
),
18 => array(
   0 => "La resistencia eléctrica de un conductor depende de:",
   1 => "La sección y la resistencia específica.",
   2 => "La resistencia específica y la longitud.",
   3 => "La sección, la resistencia específica y la longitud del conductor.",
   6 => 3
),
19 => array(
   0 => "Si tenemos una resistencia, a la cual le aplicamos una tensión de 880 V, y circula una intensidad de 2 Amperes, el valor de dicha resistencia es de:",
   1 => "110 Ohm.",
   2 => "220 Ohm.",
   3 => "440 Ohm.",
   6 => 3
),
20 => array(
   0 => "Dos o más resistencias están conectadas en serie cuando:",
   1 => "Se encuentran una a continuación de la otra, y la corriente tiene un solo camino a seguir atravesando ambas.",
   2 => "Se encuentran unidas por sus extremos y la corriente sigue varios caminos.",
   6 => 1
),
21 => array(
   0 => "En todo circuito paralelo la resistencia total, será siempre:",
   1 => "Menor que la menor de las resistencias.",
   2 => "Mayor que la mayor de las resistencias.",
   3 => "Igual a la suma de las resistencias.",
   6 => 1
),
22 => array(
   0 => "En todo circuito eléctrico, al aumentar la diferencia de potencial:",
   1 => "Aumenta la corriente circulante.",
   2 => "Disminuye la corriente circulante",
   6 => 1
),
23 => array(
   0 => "En todo circuito eléctrico, al disminuir la resistencia eléctrica:",
   1 => "Disminuye la corriente circulante.",
   2 => "Aumenta la corriente circulante.",
   6 => 2
),
24 => array(
   0 => "Si tenemos dos resistencias en serie, una de 60 Ohm y la otra de 20 Ohm, y aplicamos al circuito una tensión de 240 V. la intensidad que circula será:",
   1 => "3 Amper.",
   2 => "6 Amper.",
   3 => "1,2 Amper.",
   6 => 1
),
25 => array(
   0 => "Si tenemos dos resistencias de 30 Ohm en paralelo, y les aplicamos 60 V, la corriente por cada resistencia será de:",
   1 => "4 Amper.",
   2 => "2 Amper.",
   6 => 1
),
26 => array(
   0 => "En las heladeras familiares, el evaporador se coloca en la parte superior del recinto refrigerado para aprovechar:",
   1 => "Mejor espacio.",
   2 => "Las corrientes de convección natural de aire.",
   3 => "Una mejor distribución de los alimentos.",
   6 => 2
),
27 => array(
   0 => "En el equipo hermético de los enfriadores de agua, el elemento de expansión es:",
   1 => "Un caño capilar.",
   2 => "Una válvula de expansión automática.",
   3 => "Una válvula de expansión termostática.",
   6 => 1
),
28 => array(
   0 => "El control de los enfriadores de agua está calibrado para mantener una temperatura entre:",
   1 => "-1°C y 6°C.",
   2 => "9°C y 12°C.",
   3 => "15°C y 22°C.",
   6 => 2
),
29 => array(
   0 => "Las temperaturas apropiadas para la conservación de helados deben estar comprendidas entre:",
   1 => "0°C y -4°C.",
   2 => "-5°C y -10°C.",
   3 => "-15°C y -18°C.",
   6 => 3
),
30 => array(
   0 => "Para lograr la congelación rápida de alimentos, es necesaria una temperatura del orden de los:",
   1 => "10 a 15°C bajo cero.",
   2 => "35 a 40°C bajo cero.",
   3 => "60 a 90°C bajo cero.",
   6 => 1
),
31 => array(
   0 => "En los transportes frigoríficos con refrigeración por unidades condensadoras, el circuito de enfriamiento lleva evaporador con:",
   1 => "Circulación natural de aire.",
   2 => "Recirculación forzada de aire.",
   6 => 2
),
32 => array(
   0 => "En los condensadores enfriados por agua, para ajustar la cantidad de agua que circula, la válvula de circulación de agua actúa de acuerdo a la:",
   1 => "Presión de baja.",
   2 => "Presión de alta.",
   6 => 2
),
33 => array(
   0 => "La válvula de agua y de seguridad, es una combinación de la válvula de circulación de agua y un control de:",
   1 => "Baja presión.",
   2 => "Alta presión.",
   6 => 2
),
34 => array(
   0 => "La válvula a solenoide abre cuando:",
   1 => "Circula corriente eléctrica por la bobina.",
   2 => "No circula corriente eléctrica por la bobina.",
   6 => 1
),
35 => array(
   0 => "El control por válvula solenoide piloto:",
   1 => "Cierra directamente la línea de líquido.",
   2 => "No cierra directamente la línea de líquido.",
   6 => 2
),
36 => array(
   0 => "Las válvulas de retención se instalan verticalmente en la tubería de aspiración:",
   1 => "A la salida del evaporador.",
   2 => "A la entrada del regulador.",
   6 => 1
),
37 => array(
   0 => "Las válvulas reguladoras de arranque se montan en la tubería de aspiración:",
   1 => "Lo más cerca posible del compresor.",
   2 => "Lo más lejos posible del compresor.",
   6 => 1
),
38 => array(
   0 => "Las válvulas reguladoras de capacidad actúan abriendo el paso a medida que la presión:",
   1 => "Sube por encima del límite establecido.",
   2 => "Baja por debajo del límite establecido.",
   6 => 2
),
39 => array(
   0 => "El presostato diferencial de aceite protege al compresor:",
   1 => "En caso de una insuficiente presión de aceite.",
   2 => "En caso de una falta total de aceite.",
   6 => 1
),
40 => array(
   0 => "Las válvulas de servicio, además de permitir aislar cierta parte del sistema, nos permite medir la presión de:",
   1 => "La línea de alta solamente.",
   2 => "La línea de baja solamente.",
   3 => "Las líneas de alta y baja presión.",
   6 => 3
),
41 => array(
   0 => "Las válvulas de servicio de dos pasos se emplean en la línea de:",
   1 => "Alta presión.",
   2 => "Baja presión.",
   6 => 1
),
42 => array(
   0 => "En el sistema de distribución de energía eléctrica trifásica denominado «en estrella» la tensión entre cada una de las fases y el neutro es de:",
   1 => "110 V.",
   2 => "220 V.",
   3 => "380 V.",
   6 => 2
),
43 => array(
   0 => "Los motores trifásicos se ponen en marcha:",
   1 => "Por medio de una bobina de arranque.",
   2 => "Por medio de tres bobinados de arranque.",
   3 => "Arrancan por si solos.",
   6 => 3
),
44 => array(
   0 => "La conexión estrella se logra uniendo entre sí:",
   1 => "Los tres principios y conectando a la línea los tres finales, o viceversa.",
   2 => "Uniendo los tres principios y los tres finales a la línea.",
   3 => "Uniendo el principio de un arrollamiento con el final de otro.",
   6 => 1
),
45 => array(
   0 => "Si tenemos un motor trifásico cuyos arrollamientos fueron construidos para 220 V., y la línea de alimentación es de 3 x 220 V. se conectará en:",
   1 => "Estrella.",
   2 => "Triángulo.",
   6 => 1
),
46 => array(
   0 => "Para que en el momento de arranque un motor trifásico no consuma una excesiva corriente, se lo puede arrancar:",
   1 => "Primero en estrella y luego pasar a conexión triángulo.",
   2 => "Primero a triángulo y luego pasar a conexión estrella.",
   3 => "Directamente en estrella.",
   6 => 1
),
47 => array(
   0 => "Los contactores son:",
   1 => "Llaves magnéticas.",
   2 => "Llaves manuales.",
   3 => "Llaves térmicas.",
   6 => 1
),
48 => array(
   0 => "Cuando se utilizan contactores, el circuito de comando:",
   1 => "Alimenta al motor.",
   2 => "Alimenta a la bobina del contactor.",
   3 => "Alimenta a la bobina del contactor y al motor.",
   6 => 2
),
49 => array(
   0 => "Para proteger al motor, se suele intercalar entre el contactor y éste:",
   1 => "Una resistencia en cada conductor.",
   2 => "Una bobina en cada conductor.",
   3 => "Un relé térmico en cada conductor.",
   6 => 2
),
50 => array(
   0 => "La inversión de marcha en motores monofásicos se consigue:",
   1 => "Permutando entre si los terminales de los bobinados de arranque o trabajo indistintamente.",
   2 => "Permutando entre sí los bobinados de arranque y de trabajo.",
   6 => 1
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
