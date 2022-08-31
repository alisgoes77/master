<?php
//condicionales
//if
// estructura
// if (condicion){
// 	instrucciones
// }else{otras instrucciones}

//operadores de comparacion
/*
== igual
=== identico
!=  diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/

$color = "verde";
if($color == "rojo"){
echo "<h1>el color es rojo</h1>";
}else{
	echo "<h1>el color no es rojo</h1>";
}
echo "<br />";
$year = "2019";

if($year != 2019){
	echo "<h1>es un año diferente a 2019</h1>";
}else {
echo "<h1>estamos en 2019</h1>";
}


?>