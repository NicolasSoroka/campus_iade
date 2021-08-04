
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
$title = "Examen Curso de Bobinados";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "El desfasaje entre el bobinado de arranque y el de trabajo es de:",
   1 => "90°",
   2 => "120°",
   3 => "180°",
   6 => 1
),
2 => array(
   0 => "Al controlar un estator con un zumbador, si la lamina metálica vibra:",
   1 => "Existen espiras en cortocircuito",
   2 => "No existen espiras en cortocircuito",
   6 => 1
),
3 => array(
   0 => "Un motor trifásico asincrónico tendrá mayor consumo:",
   1 => "Conectado en estrella",
   2 => "Conectado en triangulo",
   6 => 1
),
4 => array(
   0 => "Las resistencias Óhmicas de las tres fases de un motor:",
   1 => "Deben ser aproximadamente del mismo valor",
   2 => "Deben ser de valores diferentes",
   6 => 1
),
5 => array(
   0 => "El consumo en las tres fases de un motor:",
   1 => "Debe ser aproximadamente el mismo",
   2 => "Debe ser diferente en cada fase",
   6 => 1
),
6 => array(
   0 => "En un motor asíncrono, el deslizamiento se define como:",
   1 => "El retardo que tiene el rotor respecto al campo inductor",
   2 => "La velocidad que alcanza el motor a plena carga",
   6 => 1
),
7 => array(
   0 => "Para invertir el giro de un motor de fase patinada:",
   1 => "Se invierten las conexiones del bobinado de arranque",
   2 => "Se invierten los polos de alimentación",
   6 => 1
),
8 => array(
   0 => "En lo posible, los ensayos o pruebas de motores deben efectuarse:",
   1 => "Antes de barnizar el motor",
   2 => "Después de barnizar el motor",
   6 => 1
),
9 => array(
   0 => "Si al realizar el ensayo del capacitor de arranque de un motor, los fusibles se queman:",
   1 => "El capacitor está abierto",
   2 => "El capacitor esta en cortocircuito",
   6 => 2
),
10 => array(
   0 => "Un transformador trabaja en corriente:",
   1 => "Continua",
   2 => "Alterna",
   6 => 2
),
11 => array(
   0 => "Cuando el secundario tiene más espiras que el primario el transformador es:",
   1 => "Reductor de tensión",
   2 => "Elevador de tensión",
   6 => 2
),
12 => array(
   0 => "Los autotransformadores, tienen la propiedad de:",
   1 => "Presentar aislación eléctrica entre primario y secundario",
   2 => "No presentan aislación eléctrica entre primario y secundario",
   6 => 2
),
13 => array(
   0 => "En un motor de fase partida:",
   1 => "Debe haber continuidad entre el bobinado de trabajo y el bobinado de arranque",
   2 => "No debe haber continuidad entre dichos bobinados",
   6 => 1
),
);

$max=13;

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