<h1>"hola mundo"</h1>
<?php
$nombre ="t";
$dias =[
"lunes",
"martes",
"miercoles",
"jueves",
"viernes",
"sabado",
"domingo"];



var_dump ($dias);
echo  "<br>";
echo count($dias);
echo  "<br>";
echo $dias[1];
echo "<br>";
for($i=0;$i<count($dias);$i++)
{
  echo $dias[$i]."___";
  echo "dia $i".$dias[$i]."<br>";
}
//////////////////////////////////////////////7
echo"<br>";echo"________________________________________________________________________";echo"<br>";
$numeros=["3","2","1","4","5","6","7"];
for($j=0
;$j<count($numeros); $j++)

{
 
 echo $numeros[$j]."__";
 echo "num $j:".$numeros[$j]."<br>";
}
?>


