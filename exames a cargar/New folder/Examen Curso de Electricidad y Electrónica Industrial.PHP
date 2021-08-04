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
$title = "Examen Curso de Electricidad y Electrónica Industrial";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "EL CRISTAL N SE FORM A CON EL AGREGADO DE:",
   1 => "Impurezas trivalentes al silicio puro.",
   2 => "Impurezas trivalentes al germanio puro.",
   3 => "Impurezas pentavalentes al GE o SI puro.",
   6 => 3
),
2 => array(
   0 => "EL CRISTAL P SE CARACTERIZA POR TENER PORTADORES M AYORITARIOS A:",
   1 => "Las lagunas.",
   2 => "Los electrones libres.",
   3 => "Las impurezas tetravalentes.",
   6 => 3
),
3 => array(
   0 => "LA UNIÓN DE UN CRISTAL N CON UN CRISTAL P CONSTITUYE:",
   1 => "Una junta NP.",
   2 => "Un diodo.",
   3 => "Ambas respuestas son correctas.",
   6 => 3
),
4 => array(
   0 => "EL TÉRMINO POLARIZAR SIGNIFICA:",
   1 => "Aumentar la resistencia interna de un elemento para que este último aumente su grado de conducción.",
   2 => "Conectar una fuente de tensión a través de un elemento electrónico para su adecuado funcionamiento.",
   3 => "Aplicar voltaje alterno a los extremos de un diodo.",
   6 => 2
),
5 => array(
   0 => "POLARIZAR DIRECTAMENTE UN DIODO SIGNIFICA:",
   1 => "Aplicar el (+ ) de una fuente de tensión continua al ánodo y el (-) al cátodo, con lo que se logra su conducción.",
   2 => "Aplicar el (-) de una fuente de tensión continua al ánodo y el positivo al cátodo, para lograr su conducción.",
   3 => "Aplicar un voltaje tal, que permita el bloqueo del diodo.",
   6 => 2
),
6 => array(
   0 => "EL UMBRAL DE CONDUCCIÓN SE DEFINE COMO:",
   1 => "El máximo voltaje que se debe aplicar a los extremos de un diodo sin que se destruya.",
   2 => "El mínimo voltaje que necesita un diodo para entrar en conducción.",
   3 => "La cantidad de veces que la conducción directa de un diodo es mayor que la inversa.",
   6 => 2
),
7 => array(
   0 => "SE ENTIENDE POR RESISTENCIA INVERSA DE UN DIODO A:",
   1 => "La oposición que ofrece un diodo cuando se lo polariza en forma directa.",
   2 => "La oposición que ofrece un diodo cuando no se lo polariza.",
   3 => "La oposición que ofrece un diodo cuando se lo polariza en forma inversa.",
   6 => 3
),
8 => array(
   0 => "SE ENTIENDE POR RECTIFICACIÓN AL PROCESO DE TRANSFORMACIÓN DE:",
   1 => "La C.A. en C.C. pulsante.",
   2 => "La C.C. pulsante en C.C. lineal.",
   3 => "La C.C. con ripple en C.C. sin ripple.",
   6 => 1
),
9 => array(
   0 => "SE ENTIENDE POR RECTIFICACIÓN DE MEDIA ONDA AL:",
   1 => "Aprovechamiento de ambos semiciclos de la C.A.",
   2 => "Aprovechamiento de un semiciclo de la C.A.",
   3 => "Ambas respuestas son correctas.",
   6 => 2
),
10 => array(
   0 => "EN UN TRANSISTOR:",
   1 => "Para que circule IC debe circular primero IB.",
   2 => "Para que circule IB debe circular primero IC.",
   3 => "Para que circule IC debe conectarse la base a un potencial positivo.",
   6 => 1
),
11 => array(
   0 => "EN UN TRANSISTOR NPN LA BASE:",
   1 => "Debe ser positiva respecto a emisor, y negativa respecto a colector.",
   2 => "Debe ser negativa respecto a emisor, y positiva respecto a colector.",
   3 => "Debe tener una polarización directa respecto a colector.",
   6 => 1
),
12 => array(
   0 => "EL TRANSISTOR AMPLIFICA DEBIDO QUE:",
   1 => "La IB es mayor que la IC.",
   2 => "El colector es más positivo que el emisor y la base.",
   3 => "La IC es mayor que la IB.",
   6 => 1
),
13 => array(
   0 => "EL FACTOR HFE O FACTOR BETA INDICA:",
   1 => "La cantidad de veces que la IC supera a la IB.",
   2 => "La cantidad de veces que la IB supera a la IC.",
   3 => "La cantidad de veces que las variaciones de la corriente de base superan a las variacio- nes en la corriente de colector.",
   6 => 1
),
14 => array(
   0 => "EL TÉRM INO SATURACIÓN CORRESPONDE A:",
   1 => "El instante preciso en que el transistor deja de conducir.",
   2 => "La intensidad máxima alcanzada por el transistor entre colector y emisor.",
   3 => "La intensidad mínima alcanzada por el transistor entre colector y emisor.",
   6 => 2
),
15 => array(
   0 => "LA AMPLIFICACIÓN ES UN PROCESO QUE CONSISTE EN APLICAR UNA SEÑAL A LA ENTRADA DE UN CIRCUITO CON EL FIN DE LOGRAR A LA SALIDA:",
   1 => "Una reproducción exacta de la señal de entrada.",
   2 => "Una reproducción exacta de la señal de entrada, pero con mayor amplitud.",
   3 => "Una reproducción exacta de la señal de entrada, pero con mayor amplitud y mayor frecuencia.",
   6 => 2
),
16 => array(
   0 => "LA CONFIGURACIÓN EM ISOR COM ÚN TIENE:",
   1 => "La entrada de señal por base y la salida por colector.",
   2 => "La entrada de señal por colector y la salida por emisor.",
   3 => "La entrada de señal por emisor y la salida por colector.",
   6 => 1
),
17 => array(
   0 => "EN QUE SISTEM A DE POLARIZACIÓN SE EM PLEAN LOS DIVISORES DE TENSIÓN:",
   1 => "En los sistemas de polarización fija.",
   2 => "En los sistemas de polarización universales.",
   3 => "En ambos sistemas.",
   6 => 3
),
18 => array(
   0 => "SEÑAL ELÉCTRICA SE DEFINE COMO:",
   1 => "Toda variación de voltaje que no contiene información.",
   2 => "Toda variación de voltaje que tiene frecuencia.",
   3 => "Toda variación de voltaje que contiene información.",
   6 => 3
),
19 => array(
   0 => "LA AMPLIFICACIÓN ES UN PROCESO QUE CONSISTE BÁSICAMENTE EN:",
   1 => "Aumentar la frecuencia de una señal aplicada a la entrada de un dispositivo amplificador.",
   2 => "Aumentar la amplitud de una señal aplicada a la entrada de un dispositivo amplificador.",
   3 => "Aumentar la ganancia de una señal aplicada a la entrada de un dispositivo amplificador llamado diodo.",
   6 => 2
),
20 => array(
   0 => "CUANDO UN TRANSISTOR ESTA POLARIZADO DE TAL FORMA QUE SU PUNTO DE TRABAJO ESTA SITUADO EN LA PARTE CENTRAL DE LA CURVA DE AMPLIFICACIÓN, SE DICE QUE ESTA AMPLIFICANDO EN:",
   1 => "Clase A.",
   2 => "Clase B.",
   3 => "Clase C.",
   6 => 1
),
21 => array(
   0 => "UN AMPLIFICADOR CLASE A SE CARACTERIZA POR AMPLIFICAR:",
   1 => "Ambos semiciclos de la señal de entrada.",
   2 => "Sólo un semiciclo de la señal de entrada.",
   3 => "Más de un semiciclo de la señal de entrada.",
   6 => 1
),
22 => array(
   0 => "LA REALIMENTACIÓN POSITIVA ES UN PROCESO QUE CONSISTE EN HACER RETORNAR SEÑAL DESDE SU SALIDA HACIA SU ENTRADA:",
   1 => "En fase.",
   2 => "En contrafase.",
   3 => "De ambas maneras anteriores.",
   6 => 1
),
23 => array(
   0 => "LA PRINCIPAL DIFERENCIA ENTRE UNA SALIDA DE AUDIO COMPLEMENTARIA Y UNA CUASICOMPLEMENTARIA RADICA EN:",
   1 => "La primera emplea 2 transistores del mismo tipo, y la segunda no.",
   2 => "La primera emplea 2 transistores de distinto tipo y la segunda no.",
   3 => "La primera emplea acoplamiento a transformador y la segunda no.",
   6 => 2
),
24 => array(
   0 => "EL PARLANTE ENCARGADO DE LA REPRODUCCIÓN DE FRECUENCIAS ALTAS SE DENOMINA:",
   1 => "Woofer.",
   2 => "Tweeters.",
   3 => "Rango medio.",
   6 => 2
),
25 => array(
   0 => "EL CROSS-OVER ES:",
   1 => "Un grupo de elementos L-C que actúan como divisores de frecuencias.",
   2 => "Un parlante reproductor de notas agudas.",
   3 => "Un parlante reproductor de notas medias.",
   6 => 1
),
26 => array(
   0 => "EL DECIBEL CORRESPONDE A LA UNIDAD DE M EDIDA DE:",
   1 => "Intensidad de sonido y corresponde a la décima parte de un Bel.",
   2 => "Intensidad logarítmica y corresponde a la décima parte de un Bel.",
   3 => "Ambas respuestas son correctas.",
   6 => 3
),
27 => array(
   0 => "LOS RECTIFICADORES DE ONDA COMPLETA SE CARACTERIZAN POR EMPLEAR:",
   1 => "Un diodo.",
   2 => "2 o 4 diodos.",
   3 => "4 diodos.",
   6 => 2
),
28 => array(
   0 => "EL DIODO ZENER ES UN ELEMENTO QUE:",
   1 => "Modifican su resistencia inversa al voltaje aplicado, sea este directo o inverso.",
   2 => "Modifican su resistencia inversa de acuerdo al voltaje inverso aplicado.",
   3 => "Modifican su capacidad interna de acuerdo al voltaje directo aplicado.",
   6 => 2
),
29 => array(
   0 => "LAS FUENTES REGULADAS O CONTROLADAS TIENEN POR FUNCIÓN:",
   1 => "Eliminar el ripple de la tensión continua.",
   2 => "Eliminar el ripple de la tensión alterna.",
   3 => "Ambas respuestas son correctas.",
   6 => 3
),
30 => array(
   0 => "UN RECTIFICADOR TRIFÁSICO DE ONDA COMPLETA SE CARACTERIZA POR EMPLEAR:",
   1 => "3 diodos.",
   2 => "6 diodos.",
   3 => "9 diodos.",
   6 => 2
),
31 => array(
   0 => "LOS PROCESOS ELECTRÓNICOS QUE SE REALIZAN NORMALMENTE EN UNA FUENTE DE PODER SON:",
   1 => "Rectificación, filtrado y regulación.",
   2 => "Rectificación, filtrado y amplif. de rizado.",
   3 => "Rectificar, eliminar corrientes inversas en los diodos y filtrar.",
   4 => "Ninguna respuesta es correcta.",
   6 => 1
),
32 => array(
   0 => "UN DIODO SE ENCUENTRA EN POLARIZACIÓN DIRECTA CUANDO:",
   1 => "El ánodo es negativo respecto al cátodo.",
   2 => "Ambos electrodos tienen el mismo potencial positivo.",
   3 => "Ambos electrodos tienen el mismo potencial negativo.",
   4 => "El cátodo es negativo respecto al ánodo.",
   6 => 4
),
33 => array(
   0 => "EN UN TRANSISTOR NPN, LA IB E IC CIRCULAN:",
   1 => "La Ib de base a emisor y la Ic de colector a emisor.",
   2 => "La Ib de emisor a base y la Ic de emisor a colector.",
   3 => "La Ib de base a emisor y la Ic de emisor a colector.",
   4 => "Ninguna respuesta es correcta.",
   6 => 2
),
34 => array(
   0 => "LA AMPLIFICACIÓN ES UN PROCESO QUE:",
   1 => "Consiste en aumentar la selectividad de una señal.",
   2 => "Consiste en disminuir la sensibilidad de una señal.",
   3 => "Aumentar la ganancia de una señal.",
   4 => "Todas las respuestas son correctas.",
   6 => 3
),
35 => array(
   0 => "LAS CARACTERÍSTICAS DE UN AM PLIFICADOR CLASE A SON:",
   1 => "Baja potencia de salida, mínima distorsión y consumo elevado.",
   2 => "Alta potencia de salida, mínima distorsión y consumo elevado.",
   3 => "Alternativas A y B.",
   4 => "Solo B.",
   6 => 1
),
36 => array(
   0 => "LAS 3 CONFIGURACIONES DE LOS TRANSISTORES SON:",
   1 => "Clase A, clase B y clase C.",
   2 => "Selectividad, sensibilidad y amplificación.",
   3 => "Base común, emisor común y colector común.",
   4 => "Alternativas A y B.",
   6 => 3
),
37 => array(
   0 => "UNO DE LOS MONTAJES MÁS UTILIZADOS EN ACOPLAMIENTO DIRECTA ES:",
   1 => "El acoplamiento R – C.",
   2 => "El montaje Darlington.",
   3 => "El acoplamiento a transformador.",
   4 => "Todas las anteriores.",
   6 => 1
),
38 => array(
   0 => "LAS ETAPAS QUE CONFORM AN A UNA SECCIÓN DE AUDIO FRECUENCIA SON:",
   1 => "Oscilador de audio, salida simple y preamplificador de audio.",
   2 => "Preamplificador de audio, driver de audio y salida de audio.",
   3 => "Alternativas A y B.",
   4 => "Solo B.",
   6 => 2
),
39 => array(
   0 => "EN UNA SALIDA DE AUDIO CUASICOMPLEMENTARIA SE EMPLEAN:",
   1 => "1 transistor de salida NPN.",
   2 => "2 transistores de salida (uno NPN y otro PNP).",
   3 => "2 transistores de salida (ambos NPN o PNP).",
   4 => "3 transistores de salida.",
   6 => 3
),
40 => array(
   0 => "LOS FILTROS PASIVOS EMPLEAN:",
   1 => "Exclusivamente transistores y circuitos integrados.",
   2 => "Resistencia, condensadores y bobinas.",
   3 => "Alternativas A y B.",
   4 => "Solo A.",
   6 => 1
),
41 => array(
   0 => "EL DECIBEL ES LA UNIDAD DE MEDIDA DE:",
   1 => "Potencia eléctrica.",
   2 => "Los parlantes electrodinámicos.",
   3 => "Intensidad de sonido.",
   4 => "Todas las anteriores.",
   6 => 3
),
42 => array(
   0 => "EL SISTEMA RECTIFICADOR DE MEDIA ONDA EMPLEA:",
   1 => "2 diodos rectificadores.",
   2 => "1 diodo rectificador.",
   3 => "4 diodos rectificadores.",
   4 => "6 diodos rectificadores.",
   6 => 2
),
43 => array(
   0 => "EL RIPPLE SE OBTIENE DE:",
   1 => "Un buen proceso de rectificación y filtrado.",
   2 => "Un mal proceso de rectificación y filtrado.",
   3 => "Una rectificación de media onda.",
   4 => "Una inoperancia del sistema rectificador.",
   6 => 2
),
44 => array(
   0 => "EL DIODO ZENER ES UN ELEMENTO REGULADOR, PARA LOGRAR SU CORRECTA OPERACIÓN DEBE SER POLARIZADO DE FORMA:",
   1 => "Directa.",
   2 => "Inversa.",
   3 => "Indiferente.",
   4 => "Para corrientes altas en forma directa y para corrientes bajas en forma inversa.",
   6 => 2
),
45 => array(
   0 => "EN UNA FUENTE DE REGULACIÓN SHUNT, EL ELEMENTO REGULADOR SE ENCUENTRA CONECTADO:",
   1 => "En serie con la carga.",
   2 => "En serie con los filtros.",
   3 => "En paralelo con la carga.",
   4 => "Alternativas B y C.",
   6 => 3
),
46 => array(
   0 => "LAS FUENTES REGULADAS DE MAYOR EFICIENCIA SON:",
   1 => "La serie.",
   2 => "La Shunt.",
   3 => "La conmutada.",
   4 => "Alternativas A y B.",
   6 => 3
),
47 => array(
   0 => "CUANDO SE CONECTAN LOS DIODOS RECTIFICADORES EN SERIE:",
   1 => "Para aumentar la capacidad de corriente en el sistema rect.",
   2 => "Para aumentar la capacidad de voltaje en el sistema rect.",
   3 => "Para que soporten mayor temperatura y no se destruyan.",
   6 => 3
),
48 => array(
   0 => "QUE VENTAJAS PRESENTA UN CIRCUITO INTEGRADO EN COMPARACIÓN CON OTROS DISPOSITIVOS:",
   1 => "Su miniaturización y bajo consumo.",
   2 => "Su costo reducido.",
   3 => "Su alto rendimiento.",
   4 => "Todas las anteriores.",
   6 => 1
),
49 => array(
   0 => "CUAL ES LA FUNCIÓN DE UN AMPLIFICADOR DIFERENCIAL:",
   1 => "La de amplificar la CC.",
   2 => "La de amplificar la corriente pulsante.",
   3 => "La de amplificar la diferencia entre 2 señales de corriente continua variable.",
   4 => "Evitar la distorsión de una señal.",
   6 => 3
),
50 => array(
   0 => "A QUIEN SE LE DENOMINA SCR:",
   1 => "A un Diac.",
   2 => "A un Triac.",
   3 => "A un Tiristor.",
   4 => "A un Tec.",
   6 => 3
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
