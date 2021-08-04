
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
$title = "Examen Curso de Instalaciones Eléctricas";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "EN LOS ÁTOMOS, LAS PARTÍCULAS QUE GIRAN ALREDEDOR DEL NÚCLEO",
   1 => "Se denominan protones.",
   2 => "Se llaman electrones.",
   6 => 2
),
2 => array(
   0 => "DESDE EL PUNTO DE VISTA ELÉCTRICO, SE CONSIDERA QUE UN ÁTOMO ESTÁ NEUTRO CUANDO TIENE",
   1 => "Igual cantidad de electrones en órbita que protones en el núcleo.",
   2 => "Mayor cantidad de electrones orbitales que protones en el núcleo.",
   6 => 1
),
3 => array(
   0 => "CONVENCIONALMENTE LAS LÍNEAS DE FUERZA DE UN CAMPO MAGNÉTICO TIENEN SENTIDO:",
   1 => "Norte-Sur.",
   2 => "Sur-Norte.",
   6 => 1
),
4 => array(
   0 => "LA CORRIENTE ELÉCTRICA CONSISTE EN EL DESPLAZAMIENTO DE",
   1 => "Protones.",
   2 => "Electrones.",
   6 => 2
),
5 => array(
   0 => "SI EN UN CIRCUITO CAPACITIVO AUMENTA LA FRECUENCIA DEL GENERADOR, LA REACTANCIA CAPACITIVA:",
   1 => "Disminuye.",
   2 => "Aumenta.",
   6 => 1
),
6 => array(
   0 => "UN DETERMINADO MATERIAL SE COMPORTA COMO BUEN CONDUCTOR DE LA CORRIENTE ELÉCTRICA, PORQUE LOS ELECTRONES DE SUS ÁTOMOS:",
   1 => "Se encuentran todos fuertemente ligados.",
   2 => "Existe abundante número de electrones libres.",
   6 => 2
),
7 => array(
   0 => "EL FLUJO MAGNÉTICO DE UNA BOBINA AUMENTA CUANDO:",
   1 => "La corriente circulante dinsminuye.",
   2 => "La corriente circulante aumenta.",
   6 => 2
),
8 => array(
   0 => "CUANDO LA TEMPERATURA DEL COBRE AUMENTA, SU RESISTIVIDAD ELÉCTRICA:",
   1 => "Aumenta en forma apreciable.",
   2 => "No aumenta en forma apreciable.",
   6 => 1
),
9 => array(
   0 => "LA UNIDAD DE RESISTENCIA ELÉCTRICA ES:",
   1 => "El Volt.",
   2 => "El Ampere.",
   3 => "El Ohm.",
   6 => 3
),
10 => array(
   0 => "LA UNIDAD DE TENSIÓN ELÉCTRICA ES:",
   1 => "El Ampere.",
   2 => "El Volt.",
   6 => 2
),
11 => array(
   0 => "PARA CALCULAR LA POTENCIA ELÉCTRICA QUE SE DESARROLLA EN UN CIRCUITO SE DEBE:",
   1 => "Multiplicar la tensión por la intensidad.",
   2 => "Multiplicar la tensión por la resistencia.",
   6 => 1
),
12 => array(
   0 => "SI SE CONECTAN DOS RESISTENCIAS EN PARALELO, UNA DE 30 OHM Y LA OTRA DE 20 OHM .",
   1 => "La resistencia total es de 50 ohm.",
   2 => "La resistencia total es de 12 ohm.",
   6 => 2
),
13 => array(
   0 => "LOS TRANSFORMADORES PRESENTAN LA VENTAJA DE PODER AUMENTAR O DISMINUIR:",
   1 => "La corriente continua.",
   2 => "La corriente alterna.",
   6 => 2
),
14 => array(
   0 => "SI EN UN CIRCUITO ELÉCTRICO NO SE MODIFICA LA TENSIÓN APLICADA Y SE AUMENTA LA RESISTENCIA:",
   1 => "La intensidad de corriente disminuye.",
   2 => "La intensidad de corriente aumenta.",
   6 => 1
),
15 => array(
   0 => "LA UNIDAD DE INDUCTANCIA ES:",
   1 => "El Henry.",
   2 => "El Ohm.",
   6 => 1
),
16 => array(
   0 => "EN TODO CIRCUITO SERIE, LA SUMA DE LAS TENSIONES QUE SE DESARROLLAN SOBRE CADA RESISTENCIA:",
   1 => "Es igual a la tensión de la fuente.",
   2 => "Es igual a la intensidad de corriente circulante.",
   6 => 1
),
17 => array(
   0 => "AL DISPONERSE DOS O MÁS RESISTORES EN SERIE, LA RESISTENCIA TOTAL DEL CIRCUITO RESULTA SER:",
   1 => "El resultado de la multiplicación de sus valores.",
   2 => "El resultado de la suma de sus valores.",
   6 => 2
),
18 => array(
   0 => "EN UN CIRCUITO RESISTIVO, SI LA INTENSIDAD DE CORRIENTE SE DUPLICA:",
   1 => "La potencia desarrollada se duplica.",
   2 => "La potencia desarrollada crece cuatro veces.",
   6 => 1
),
19 => array(
   0 => "AL ENFRENTAR DOS POLOS NORTE DE DOS IMANES:",
   1 => "Se atraen.",
   2 => "Se rechazan.",
   6 => 2
),
20 => array(
   0 => "SE CONSIDERA QUE UN CUERPO PRESENTA TENSIÓN O VOLTAJE NEGATIVO CUANDO POSEE:",
   1 => "Un exceso de electrones.",
   2 => "Un exceso de protones.",
   6 => 1
),
21 => array(
   0 => "LA RESISTENCIA ELÉCTRICA QUE PRESENTAN DISTINTOS MATERIALES REPRESENTA:",
   1 => "Facilidad al paso de la corriente eléctrica.",
   2 => "Oposición al paso de la corriente eléctrica.",
   6 => 2
),
22 => array(
   0 => "TODO CONDUCTOR QUE SE DESPLAZA POR UN CAMPO MAGNÉTICO CORTANDO SUS LÍNEAS DE FUERZA:",
   1 => "Recibe una tensión inducida.",
   2 => "Disminuye su resistencia eléctrica.",
   6 => 1
),
23 => array(
   0 => "LA LEY DE LENZ ESTABLECE QUE TODA CORRIENTE INDUCIDA GENERA UN CAMPO MAGNÉTICO QUE:",
   1 => "Refuerza la causa que la genera.",
   2 => "Se opone a la causa que la genera.",
   6 => 2
),
24 => array(
   0 => "SI UN CIRCUITO R-C SERIE AUMENTA APRECIABLEMENTE LA FRECUENCIA DEL GENERADOR, EL CIRCUITO TIENDE A COMPORTARSE:",
   1 => "Como una resistencia.",
   2 => "Como un capacitor.",
   6 => 2
),
25 => array(
   0 => "EN TODO CIRCUITO SERIE, LA INTENSIDAD DE CORRIENTE:",
   1 => "Es la misma en cualquier punto del circuito.",
   2 => "Disminuye a medida que la corriente atraviesa distintas resistencias.",
   6 => 1
),
26 => array(
   0 => "LAS AMPOLLAS DE LAS LÁMPARAS DE CUARZO-IODO-TUNGSTENO DEBEN ADMITIR:",
   1 => "Una temperatura de trabajo elevada.",
   2 => "Una temperatura de trabajo reducida.",
   6 => 1
),
27 => array(
   0 => "LA REACTANCIA CAPACITIVA SE CONSIDERA EN:",
   1 => "Microfaradios.",
   2 => "Ohm.",
   6 => 2
),
28 => array(
   0 => "POR UN CONDUCTOR CONECTADO A LOS POLOS NEGATIVO Y POSITIVO DE UN GENERADOR, LA CORRIENTE ELÉCTRICA SE DESPLAZA:",
   1 => "De positivo a negativo.",
   2 => "De negativo a positivo.",
   6 => 2
),
29 => array(
   0 => "LAS LÍNEAS DE DISTRIBUCIÓN TRIFÁSICAS EN ESTRELLA CON CONDUCTOR NEUTRO PERMITEN DISPONER:",
   1 => "Únicamente corriente para fuerza motriz.",
   2 => "Corriente para fuerza motriz o consumos de baja potencia.",
   6 => 2
),
30 => array(
   0 => "LA COLUMNA MONTANTE DE UNA CASA DE DEPARTAMENTOS ESTÁ FORMADA POR TANTOS CAÑOS:",
   1 => "Como pisos tengan el edificio.",
   2 => "Como departamentos tenga el edificio.",
   6 => 2
),
31 => array(
   0 => "AL APLICAR UNA TENSIÓN A UNA BOBINA, LA INTENSIDAD DE CORRIENTE:",
   1 => "Toma instantáneamente el valor que determina la Ley de Ohm.",
   2 => "Demora un cierto tiempo en tomar el valor que determina la Ley de Ohm.",
   6 => 2
),
32 => array(
   0 => "SI UN CUERPO PLÁSTICO SE SOMETE A UNA FUERZA EXTERIOR, CUANDO ESTA DEJA DE ACTUAR:",
   1 => "Recupera su forma primitiva.",
   2 => "No recupera su forma primitiva.",
   6 => 2
),
33 => array(
   0 => "UN BUEN AISLANTE DEBE SER:",
   1 => "Poroso.",
   2 => "No poroso.",
   6 => 1
),
34 => array(
   0 => "LA UNIDAD DE INTENSIDAD DE CORRIENTE ELÉCTRICA ES:",
   1 => "El Ampere.",
   2 => "El Coulomb.",
   6 => 1
),
35 => array(
   0 => "LA DENSIDAD DEL COBRE ES:",
   1 => "Mayor que la del aluminio.",
   2 => "Igual a la del aluminio.",
   3 => "Menor que la del aluminio.",
   6 => 1
),
36 => array(
   0 => "LOS CAÑOS DE INSTALACIONES EMBUTIDAS SE DEBEN UNIR:",
   1 => "Por medio de cuplas.",
   2 => "Por medio de soldadura.",
   6 => 1
),
37 => array(
   0 => "EL DESFASAJE EXISTENTE ENTRE LAS CORRIENTES TRIFÁSICAS:",
   1 => "Es de 180°.",
   2 => "Es de 120°.",
   6 => 2
),
38 => array(
   0 => "SI EN UN CIRCUITO ELÉCTRICO NO SE MODIFICA LA RESISTENCIA Y SE AUMENTA LA TENSIÓN APLICADA:",
   1 => "La intensidad de corriente disminuye.",
   2 => "La intensidad de corriente aumenta.",
   6 => 2
),
39 => array(
   0 => "EN UNA RED DE DISTRIBUCIÓN DE BAJA TENSIÓN TIPO M ALLA, SI SE PRODUCE UNA FALLA EN UNO DE LOS TRANSFORMADORES, LA ZONA AFECTADA:",
   1 => "Deja de recibir corriente.",
   2 => "Recibe corriente a través de los transformadores restantes.",
   6 => 2
),
40 => array(
   0 => "LA REACTANCIA CAPACITIVA RESULTA SER:",
   1 => "La oposición que ofrece un capacitor a la corriente alterna.",
   2 => "La facilidad que ofrece un capacitor a la circulación de CA.",
   6 => 1
),
41 => array(
   0 => "EN LAS LÍNEAS SUBTERRÁNEAS DE ALTA TENSIÓN SE UTILIZAN GENERALMENTE:",
   1 => "Conductores tripolares.",
   2 => "Conductores unipolares.",
   6 => 1
),
42 => array(
   0 => "EN UN CIRCUITO CAPACITIVO, LA TENSIÓN EN LAS ARMADURAS RESPECTO A LA CORRIENTE:",
   1 => "Atrasa 90°.",
   2 => "Adelanta 90°.",
   6 => 1
),
43 => array(
   0 => "UN CAÑO DEBE ACODARSE A:",
   1 => "Noventa grados o más.",
   2 => "Noventa grados o menos.",
   6 => 2
),
44 => array(
   0 => "SI LA BAJADA DE ANTENA DE TV OBLIGADAMENTE TIENE UN RECORRIDO HORIZONTAL APRECIABLE, ES CONVENIENTE QUE ÉSTE SE ENCUENTRE:",
   1 => "En la parte superior del edificio.",
   2 => "A baja altura.",
   6 => 1
),
45 => array(
   0 => "EL CABLE ES UN CONDUCTOR FORMADO POR:",
   1 => "Un solo alambre.",
   2 => "Varios alambres arrollados en forma de hélice.",
   6 => 2
),
46 => array(
   0 => "PARA NO DAÑAR LA AISLACIÓN DE LOS CONDUCTORES, LOS EXTREMOS DE LOS CAÑOS:",
   1 => "Deben ser cubiertos con cinta aisladora.",
   2 => "Deben ser limados.",
   6 => 2
),
47 => array(
   0 => "CUANDO UN TRANSFORMADOR TIENE MENOR NÚMERO DE ESPIRAS EN EL SECUNDARIO QUE EN EL PRIMARIO, SE TRATA DE UN DISPOSITIVO:",
   1 => "Elevador de tensión.",
   2 => "Reductor de tensión.",
   6 => 2
),
48 => array(
   0 => "EL ESPESOR DE LAS PAREDES DE LOS CAÑOS DEBE SER:",
   1 => "Uniforme en toda su longitud.",
   2 => "Variable en toda su longitud.",
   6 => 1
),
49 => array(
   0 => "LAS BASES DEL TIPO GOLIAT SON UTILIZADAS PARA LÁMPARAS:",
   1 => "De mucha potencia.",
   2 => "De poca potencia.",
   6 => 1
),
50 => array(
   0 => "LOS BIMETALES ESTÁN FORMADOS POR METALES QUE ANTE UN AUMENTO DE TEMPERATURA SUFREN DEFORMACIONES:",
   1 => "De igual magnitud.",
   2 => "De distinta magnitud.",
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

