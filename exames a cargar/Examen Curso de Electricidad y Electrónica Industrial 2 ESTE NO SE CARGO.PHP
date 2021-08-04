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
$title = "Examen Curso de Electricidad y Electrónica Industrial 2";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "PARA COMANDAR UNA CARGA DE CORRIENTE ALTERNA SE DEBE UTILIZAR:",
   1 => "Un Diac.",
   2 => "Un Triac.",
   3 => "Un Tiristor.",
   4 => "Un estabilizador de voltaje.",
   6 => 2
),
2 => array(
   0 => "PARA DISPARAR UN SCR SE DEBE APLICAR UN PULSO:",
   1 => "Positivo entre ánodo y cátodo.",
   2 => "Negativo entre gate y cátodo.",
   3 => "Positivo entre gate y cátodo.",
   4 => "Otra es la respuesta.",
   6 => 3
),
3 => array(
   0 => "QUE CARACTERÍSTICAS TIENE EL TRIAC:",
   1 => "La de conducir en un solo sentido.",
   2 => "Que el voltaje directo debe ser mayor que el voltaje inverso.",
   3 => "La de conducir en ambos sentidos.",
   4 => "La de dispararse con pulsos aplicados al ánodo.",
   6 => 3
),
4 => array(
   0 => "UN FOTOTRANSISTOR ES UN DISPOSITIVO QUE SE DISPARA:",
   1 => "Con energía magnética.",
   2 => "Con energía radiactiva.",
   3 => "Con energía lumínica.",
   4 => "Con energía calórica.",
   6 => 3
),
5 => array(
   0 => "QUE CARACTERÍSTICAS TIENEN LOS DISPOSITIVOS FOTOVOLTAICOS:",
   1 => "La de producir luz cuando se les aplica voltaje.",
   2 => "La de producir voltaje cuando se les aplica luz.",
   3 => "La de producir voltaje cuando se les aplica presión.",
   4 => "Otra es la respuesta.",
   6 => 2
),
6 => array(
   0 => "QUE VENTAJAS PRESENTA EL OPTO COUPLER:",
   1 => "Su gran aislamiento.",
   2 => "Puede trabajar con CA y CC.",
   3 => "Permite acoplar voltajes.",
   4 => "Todas las anteriores.",
   6 => 1
),
7 => array(
   0 => "LOS CIRCUITOS DIGITALES MÁS UTILIZADOS SON DE TECNOLOGÍA:",
   1 => "HTL",
   2 => "CMOS",
   3 => "RTL",
   4 => "DTL",
   6 => 2
),
8 => array(
   0 => "EN LOS PLC UN CABLEADO CORRECTO PASA POR:",
   1 => "Separar las entradas de las salidas.",
   2 => "Separar las entradas digitales de las entradas análogas.",
   3 => "Separar las salidas digitales de las salidas análogas.",
   4 => "Todas las anteriores son correctas.",
   6 => 4
),
9 => array(
   0 => "QUE VALOR EN PF TIENE UN CONDENSADOR DE 0,05 M F:",
   1 => "5000 pf.",
   2 => "500 pf.",
   3 => "5 pf.",
   4 => "50.000 pf.",
   6 => 4
),
10 => array(
   0 => "SI SE REQUIERE REALIZAR UNA MEDICIÓN DE VOLTAJE CONTINUO, CON CUAL DE LOS SIGUIENTES TESTER LOGRARÁ UNA MAYOR PRECISIÓN EN LA MEDICIÓN:",
   1 => "20.000 Ohms/volts dc",
   2 => "50.000 Ohms/volts dc",
   3 => "10.000 Ohms/volts dc",
   4 => "Con cualquiera de ellos",
   6 => 2
),
11 => array(
   0 => "SI SE ESTA USANDO EL ÓHMETRO EN LA ESCALA X100 Y LA AGUJA DEL INSTRUMENTO SE DETIENE EN EL 30 DE LA ESCALA GRADUADA, EL RESULTADO DE LA MEDICIÓN SERÁ:",
   1 => "3.000 Ohms.",
   2 => "3 K Ohms.",
   3 => "300 Ohms.",
   4 => "Las alternativas A y B son correctas.",
   6 => 1
),
12 => array(
   0 => "CON QUE COLOR DE PUNTA DE UN ÓHMETRO SE UBICA LA BASE DE UN TRANSISTOR PNP:",
   1 => "La negra.",
   2 => "La roja.",
   3 => "La negra o la roja.",
   4 => "No es posible ubicarla.",
   6 => 1
),
13 => array(
   0 => "UN DIODO SILICÓN SE ENCUENTRA EN BUEN ESTADO, CUANDO AL SER MEDIDO CON EL ÓHMETRO MARCA:",
   1 => "Alta resistencia en ambos sentidos.",
   2 => "Baja resistencia en ambos sentidos.",
   3 => "Baja resistencia en un sentido e infinita en el otro.",
   4 => "100 Ohms en un sentido y 200 Ohms en el otro.",
   6 => 3
),
14 => array(
   0 => "EL TÉRMINO CORTOCIRCUITO SIGNIFICA QUE UN COMPONENTE PRESENTA:",
   1 => "Mínima oposición a la corriente eléctrica.",
   2 => "Máxima oposición a la corriente eléctrica.",
   3 => "Interrupción a la corriente eléctrica.",
   4 => "Una fuga mayor que la máxima resistencia del componente.",
   6 => 1
),
15 => array(
   0 => "SEÑALE A CUAL DE LAS SIGUIENTES ALTERNATIVAS CORRESPONDEN LAS POLARIZACIONES NORMALES DE UN TRANSISTOR DE SILICIO NPN:",
   1 => "Base y colector negativos respecto a emisor.",
   2 => "Colector negativo y base positiva respecto a emisor.",
   3 => "Colector positivo y base negativa respecto a emisor.",
   4 => "Base y colector positivos respecto a emisor.",
   6 => 4
),
16 => array(
   0 => "UN SSR ES:",
   1 => "Un Tiristor.",
   2 => "Básicamente un interruptor electrónico con acoplamiento óptico.",
   3 => "Un Triac.",
   4 => "Otra respuesta.",
   6 => 2
),
17 => array(
   0 => "UN OPTO ACOPLADOR CONSISTE EN:",
   1 => "Un transmisor controlado por temperatura.",
   2 => "Un emisor de luz infrarroja.",
   3 => "A y B son correctas.",
   4 => "Un diodo emisor de infrarrojos y un fototransistor alojados dentro de un mismo encapsulado.",
   6 => 4
),
);

$max=17;

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