
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
$title = "Examen Curso de Instalaciones Eléctricas 2";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "LAS LÁMPARAS MEZCLADORAS:",
   1 => "Permiten una razonable identificación de los colores.",
   2 => "Impiden una correcta identificación de los colores.",
   6 => 1
),
2 => array(
   0 => "LA COMPROBACIÓN DEL ESTADO DE AISLACIÓN DE UNA INSTALACIÓN DOMICILIARIA DEBE EFECTUARSE SOMETIÉNDOLA A UNA TENSIÓN:",
   1 => "Menor que la de servicio.",
   2 => "No menor que la tensión de servicio y preferentemente de 500 Volt.",
   6 => 2
),
3 => array(
   0 => "LOS INTERRUPTORES AUTOMÁTICOS DE PROTECCIÓN:",
   1 => "No reaccionan ante un cortocircuito entre los conductores de línea.",
   2 => "Reaccionan ante un cortocircuito entre los conductores de línea.",
   6 => 2
),
4 => array(
   0 => "LAS LÁMPARAS FLUORESCENTES SON RECUBIERTAS INTERIORMENTE:",
   1 => "Por un material luminiscente acorde con su color.",
   2 => "Por una fina capa de fósforo.",
   6 => 2
),
5 => array(
   0 => "EN UN SISTEMA AUTOMÁTICO PARA TANQUES DE AGUA QUE UTILIZA DOS DISPOSITIVOS, EL MOTOR SE PONE EN MARCHA CUANDO:",
   1 => "El tanque superior y el tanque inferior están vacíos.",
   2 => "El tanque superior está vacío y el inferior contiene agua.",
   6 => 2
),
6 => array(
   0 => "LAS BAJADAS DE ANTENA DE TV EMPOTRADAS CONVIENE REALIZARLAS:",
   1 => "Con cable para antenas tipo chato.",
   2 => "Con cable para antenas tipo coaxial.",
   6 => 2
),
7 => array(
   0 => "LOS CONDUCTORES SUPER PLÁSTICO O SIMILARES SE INSTALAN:",
   1 => "Alojados en caños.",
   2 => "Directamente sobre la superficie que deben recorrer.",
   6 => 1
),
8 => array(
   0 => "LA RECTIFICACIÓN ES UN PROCESO ELECTRÓNICO QUE PERMITE CONVERTIR:",
   1 => "La tensión alterna en continua...",
   2 => "La tensión continua en alterna...",
   6 => 1
),
9 => array(
   0 => "EN LOS TRANSFORMADORES, EL ARROLLAMIENTO QUE RECIBE ENERGÍA DESDE LA RED DE ALIMENTACIÓN:",
   1 => "Recibe el nombre de secundario.",
   2 => "Recibe el nombre de primario.",
   6 => 2
),
10 => array(
   0 => "LOS CONECTORES TERMINALES SE FIJAN AL CAÑO POR MEDIO:",
   1 => "De una brida construida con plancha de aluminio.",
   2 => "Con un tornillo de fijación.",
   6 => 1
),
11 => array(
   0 => "LOS DIODOS DE ESTADO SÓLIDO SON DISPOSITIVOS QUE PERMITEN LA CIRCULACIÓN DE CORRIENTE ELÉCTRICA:",
   1 => "En ambos sentidos.",
   2 => "En un solo sentido.",
   6 => 2
),
12 => array(
   0 => "CUANDO UN DIODO DE ESTADO SÓLIDO RECIBE POLARIZACIÓN INVERSA:",
   1 => "Permite la circulación de corriente.",
   2 => "No permite la circulación de corriente.",
   6 => 2
),
13 => array(
   0 => "LAS CAÍDAS DE TENSIÓN MÁXIMAS QUE SE ADMITEN EN LAS LÍNEAS QUE ALIMENTAN MOTORES:",
   1 => "Es del orden del 5% de la tensión de línea.",
   2 => "Es del orden del 10% de la tensión de línea.",
   6 => 1
),
14 => array(
   0 => "LOS FILTROS DE UNA FUENTE DE ALIMENTACIÓN TIENEN POR MISIÓN:",
   1 => "Entregar corriente a la carga cuando los diodos no conducen.",
   2 => "Proteger a los diodos de sobretensiones.",
   6 => 1
),
15 => array(
   0 => "CUANDO LOS GRÁNULOS DE UN MICRÓFONO DE CARBÓN SE MUEVEN POR LAS VIBRACIONES DE LA MEMBRANA:",
   1 => "Se modifica la resistencia eléctrica del dispositivo.",
   2 => "La resistencia se mantiene constante.",
   6 => 1
),
16 => array(
   0 => "EN LOS AISLADORES, LA CORRIENTE DE FUGA DEBE TENER UN VALOR:",
   1 => "Muy pequeño.",
   2 => "Muy alto.",
   6 => 1
),
17 => array(
   0 => "LOS CIRCUITOS DE VOZ DE LOS PORTEROS ELÉCTRICOS FUNCIONAN:",
   1 => "Con corriente alterna.",
   2 => "Con corriente continua.",
   6 => 2
),
18 => array(
   0 => "LOS CIRCUITOS DE LLAMADA Y CERRADURA ELÉCTRICA FUNCIONAN:",
   1 => "Con corriente continua. B) Con corriente alterna.",
   2 => "Con corriente alterna.",
   6 => 2
),
19 => array(
   0 => "LOS TRANSFORMADORES PARA TIMBRE TIENEN:",
   1 => "Un consumo elevado.",
   2 => "Un consumo reducido.",
   6 => 2
),
20 => array(
   0 => "UNA LÁMPARA INCANDESCENTE, AL RECIBIR UNA CIERTA POTENCIA ELÉCTRICA:",
   1 => "La convierte totalmente en luz.",
   2 => "La convierte parcialmente en luz.",
   6 => 2
),
21 => array(
   0 => "EL RENDIMIENTO LUMINOSO DE UNA LÁMPARA INCANDESCENTE REPRESENTA:",
   1 => "La relación entre la energía luminosa obtenida y la energía eléctrica consumida.",
   2 => "La vida útil del filamento.",
   6 => 1
),
22 => array(
   0 => "EL GAS INERTE QUE SE AGREGA EN EL INTERIOR DE LAS AMPOLLAS DE CIERTAS LÁMPARAS INCANDESCENTES TIENE POR FIN:",
   1 => "Producir una evaporación muy lenta del filamento.",
   2 => "Reducir la corriente necesaria en el filamento.",
   6 => 1
),
23 => array(
   0 => "LOS FILAMENTOS QUE TRABAJAN EN POSICIÓN HORIZONTAL PRODUCEN CON RESPETO A LOS QUE SE COLOCAN EN POSICIÓN VERTICAL:",
   1 => "Mayor emisión de luz.",
   2 => "Menor emisión de luz.",
   6 => 1
),
24 => array(
   0 => "EL RENDIMIENTO LUMINOSO DE LAS LÁMPARAS DE ELEVADA POTENCIA:",
   1 => "Es menor que el de las lámparas de baja potencia.",
   2 => "Es mayor que el de las lámparas de baja potencia.",
   6 => 1
),
25 => array(
   0 => "CUANDO EL CAPACITOR SE ENCUENTRA CONECTADO A UNA FUENTE DE TENSIÓN ALTERNA:",
   1 => "Circula corriente a través del dieléctrico.",
   2 => "No circula corriente a través del dieléctrico.",
   6 => 2
),
26 => array(
   0 => "LAS LÁMPARAS DE CUARZO-IODO-TUNGSTENO MANTIENEN CONSTANTE SU RENDIM IENTO LUMINOSO HASTA UN:",
   1 => "70% de su vida útil.",
   2 => "99% de su vida útil.",
   6 => 1
),
27 => array(
   0 => "LA LUZ MONOCROMÁTICA ENTREGADA POR LAS LÁMPARAS DE VAPOR DE SODIO:",
   1 => "Permite una buena diferenciación de los colores.",
   2 => "Impide una buena diferenciación de los colores.",
   6 => 2
),
28 => array(
   0 => "LAS LÁMPARAS DE VAPOR DE SODIO, AL SER CONECTADAS:",
   1 => "Alcanzan de inmediato su régimen de funcionamiento.",
   2 => "Necesitan aproximadamente 15 minutos para alcanzar su pleno régimen.",
   6 => 2
),
29 => array(
   0 => "EL VALOR MÍNIMO DE AISLACIÓN ADMITIDO PARA UNA INSTALACIÓN DOMICILIARIA ES DE:",
   1 => "10 ohm por cada volt de tensión de servicio.",
   2 => "1000 ohm por cada volt de tensión de servicio.",
   6 => 2
),
30 => array(
   0 => "LAS LÁMPARAS FLUORESCENTES, EN SU GRAN MAYORÍA POSEEN:",
   1 => "Filamentos incandescentes.",
   2 => "Electrodos precalentados.",
   6 => 2
),
31 => array(
   0 => "LOS INTERRUPTORES AUTOM ÁTICOS DE PROTECCIÓN DESCONECTAN EL CIRCUITO CUANDO LA DIFERENCIA DE CORRIENTES QUE RECORREN LOS CONDUCTORES DE LÍNEA:",
   1 => "Es del orden de 30 milésimos de Amper.",
   2 => "Es de 3 Amper.",
   6 => 1
),
32 => array(
   0 => "LA REACTANCIA DE UN TUBO FLUORESCENTE ES CONECTADA:",
   1 => "En serie con una de las espigas del tubo.",
   2 => "En paralelo con las espigas del tubo.",
   6 => 1
),
33 => array(
   0 => "LA SOBRETENSIÓN QUE ORIGINA LA REACTANCIA DE UN TUBO FLUORESCENTE, SE PRODUCE:",
   1 => "Cuando los contactos del arrancador se unen.",
   2 => "Cuando los contactos se separan.",
   6 => 2
),
34 => array(
   0 => "EL «INDICE DEL LOCAL» SE CALCULA DIVIDIENDO:",
   1 => "La altura sobre el ancho.",
   2 => "El ancho sobre la altura.",
   6 => 2
),
35 => array(
   0 => "EN UN CIRCUITO INDUCTIVO, LA INTENSIDAD CON RESPECTO A LA TENSIÓN SE ENCUENTRA:",
   1 => "Adelantada 90°.",
   2 => "Atrasada 90°.",
   6 => 2
),
36 => array(
   0 => "EN LOS CIRCUITOS DE CORRIENTE ALTERNA, LA POTENCIA APARENTE REPRESENTA LA POTENCIA:",
   1 => "Disipada en forma de calor.",
   2 => "Convertida en energía mecánica más la que el motor devuelve a la línea.",
   6 => 2
),
37 => array(
   0 => "LA POTENCIA ACTIVA REPRESENTA AQUELLA POTENCIA:",
   1 => "Que el motor devuelve a la línea.",
   2 => "Que se disipa en forma de calor más la convertida en energía mecánica.",
   6 => 2
),
38 => array(
   0 => "EN LOS MOTORES DE CORRIENTE ALTERNA ES VENTAJOSO:",
   1 => "Un coseno fi bajo.",
   2 => "Un coseno fi elevado.",
   6 => 2
),
39 => array(
   0 => "EL FACTOR DE POTENCIA DE UN MOTOR DE CORRIENTE ALTERNA SE MEJORA:",
   1 => "Agregando un capacitor en paralelo.",
   2 => "Agregando una inductancia en paralelo.",
   6 => 1
),
40 => array(
   0 => "LOS CAPACITORES ELECTROLÍTICOS SON ELEMENTOS QUE POSEEN:",
   1 => "Una gran capacidad eléctrica.",
   2 => "Una pequeña capacidad eléctrica.",
   6 => 1
),
41 => array(
   0 => "A LOS EFECTOS DEL CÁLCULO DE LA SECCIÓN DE LOS CONDUCTORES DE LAS LÍNEAS DE FUERZA MOTRIZ, SE CONSIDERAN LÍNEAS CORTAS:",
   1 => "A las de una longitud menor de 100 metros.",
   2 => "A las de una longitud menor de 50 metros.",
   6 => 2
),
);

$max=41;

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