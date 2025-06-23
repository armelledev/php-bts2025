<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="index.php">cours-php-bts</a><br><br>
     <h1>les nombre </h1>

<?php

define('PI',3.14);
echo PI . '<br>';
var_dump(defined('PI'));
echo '<br>';

$a=5;
$b=8;
$c=10;
echo "addition  =" . ($a+$b) . '<br>';

echo 'soustraction =' . ($c-$a) . '<br>';

echo "division flottante = " . fdiv($a, $b) . '<br>';
$a += $b;
echo "apres l'addition =" . ($a=$a) . '<br>' ;

echo " (\$a++) :". $a++ . '<br>' ;
echo "is_int(3.35) :" . (is_int(3.35) ? 'true' :'false') . '<br>' ;
echo "is_float(4) :" . (is_float(4) ? 'true' :'false') . '<br>' ;

// fontion mathematique
echo "pow(3,2) :" .pow(3,2) .'<br>' ;
echo "abs(-50) :" .abs(-50) . '<br>' ;
echo "sqrt(25) :" .sqrt(25) . '<br>' ;
echo "min(2,5) =" .min(2, 3) . '<br>' ;
echo "max(2,5) =" .max(2, 3) . '<br>' ;
echo "round(3.4) =" .round(3.4) . '<br>' ;
echo "round(3.8) =" .round(3.8) . '<br>' ;

?>
</body>
</html>