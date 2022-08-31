<h1>
<?php
//operadores aritmeticos

$numero1 = 65;
$numero2 = 33;

echo 'suma:' .($numero1 + $numero2);

?></h1>

<!-- resta -->
<h2>
<?php
echo 'Resta:' .($numero1 - $numero2);

?></h2>
<!-- multiplicacion dddd -->
<h3>
<?php
echo 'Multiplicacion:' .($numero1 * $numero2);

?></h3>
<!-- division  -->
<h4>
<?php
echo 'Division :' .($numero1 / $numero2);
?></h4>
<!-- resto -->
<h4>
<?php
echo 'resto :' .($numero1 % $numero2);
?></h4>


<!-- operadores de incremento y decremento -->
<?php
$year =2019;
//incremento
$year ++;
$year = $year + 1;
//decremento
$year --;
$year = $year + 1;

echo $year;
?>