
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
$title = "Examen Curso de Office";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Un documento maestro puede contener:",
   1 => "Documentos gráficos",
   2 => "Un documento normal con enlaces de archivos",
   6 => 1
),
2 => array(
   0 => "Para marcar las entradas de índice se puede hacer:",
   1 => "Sólo en forma automática",
   2 => "Sólo en forma manual",
   3 => "Automático o manual",
   6 => 3
),
3 => array(
   0 => "Para ilustrar un documento podemos insertar:",
   1 => "Imágenes prediseñadas o Buscar en colección Web",
   2 => "Sólo prediseñadas por el Office",
   6 => 1
),
4 => array(
   0 => "Tener en cuenta que las imágenes:",
   1 => "Se pueden comprimir",
   2 => "No es posible comprimir porque se alteran",
   6 => 1
),
5 => array(
   0 => "El elemento que representa una organización jerárquica se llama:",
   1 => "Diagrama",
   2 => "Organigrama",
   6 => 2
),
6 => array(
   0 => "Al terminar de trabajar en un archivo se debe:",
   1 => "Cerrar el documento manualmente",
   2 => "No necesita cerrarlo porque lo hace en forma automática",
   6 => 1
),
7 => array(
   0 => "Si necesitamos recuperar algún libro de trabajo que ya se ha guardado debemos poner:",
   1 => "Nuevo",
   2 => "Abrir",
   6 => 2
),
8 => array(
   0 => "La tecla ESC resulta útil para:",
   1 => "Validar el contenido de una celda",
   2 => "Restaurar el contenido de una celda",
   6 => 2
),
9 => array(
   0 => "La función ABS:",
   1 => "Devuelve un número de cero a uno",
   2 => "Devuelve el valor absoluto de un número",
   6 => 2
),
10 => array(
   0 => "La función ESERR:",
   1 => "Comprueba si un valor es un error",
   2 => "Comprueba si un valor es lógico",
   6 => 1
),
11 => array(
   0 => "Al llevar el cursor a formato y colocarlo en color de letra:",
   1 => "Permite colorear un texto",
   2 => "Cambia el color de fondo de un texto",
   6 => 1
),
12 => array(
   0 => "Si en la tabla de contenidos ponemos tabla manual y luego formato podemos elegir:",
   1 => "Dos estilos automáticos del sistema",
   2 => "Diversos estilos",
   6 => 2
),
13 => array(
   0 => "Si queremos eliminar una tabla de contenidos se pulsa:",
   1 => "Guardar selección en galería",
   2 => "Quitar tabla de contenidos",
   6 => 2
),
14 => array(
   0 => "Al seleccionar contraste la imagen tendrá:",
   1 => "Mayor o menor diferencia entre el blanco y el negro",
   2 => "Mayor o menor brillo de fondo",
   6 => 1
),
15 => array(
   0 => "Al seleccionar enviar al fondo Se muestra la imagen seleccionada:",
   1 => "Sobre los objetos que se encuentran en el mismo nivel",
   2 => "Bajo los objetos que se encuentran en el mismo nivel",
   6 => 2
),
16 => array(
   0 => "Si utilizamos el origen de los datos y el documento principal podemos:",
   1 => "Ordenar el origen de los documentos",
   2 => "Combinar correspondencia",
   6 => 2
),
17 => array(
   0 => "En las funciones de textos al seleccionar Carácter (numero):",
   1 => "Devuelve el carácter especificado por el número",
   2 => "Devuelve una cadena de caracteres con la unión dada por ese número",
   6 => 1
),
18 => array(
   0 => "La función de texto Largo (texto):",
   1 => "Devuelve la longitud del texto",
   2 => "Devuelve el texto con espacios",
   6 => 1
),
19 => array(
   0 => "La función Buscar:",
   1 => "Busca valores de un rango",
   2 => "Busca un valor en la primera columna de la izquierda",
   6 => 2
),
20 => array(
   0 => "Se pueden aplicar funciones",
   1 => "Matemáticas y trigonométricas",
   2 => "Sólo funciones matemáticas propias de Office",
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

