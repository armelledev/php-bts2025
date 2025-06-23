<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="index.php">cours-php-bts</a><br><br>
     <h1>les chaine de caracters</h1>

<?php
$author="laeticia";
$string="hello $author";
$string2='hello' . $author ;
echo $string .'<br>';
echo  $string2 .  '<br>';

$nombre=1289.678;
echo number_format(
  num: $nombre,
  decimals: 4,
  decimal_separator: '.',
  thousands_separator: ','
  
  ). '<br>';

echo "hello world <br>";

$string="bonjour armelle"; 
echo "en majuscule =" .strtoupper($string) . '<br>';
echo "en minuscule =" .strtolower($string) . '<br>';
echo  "ucfirst('hello') =" .ucfirst("hello") .  '<br>';
echo  "lcfirst('hello') =" .lcfirst("hello") .  '<br>';
echo  "upwords('hello') =" . ucwords("hello world") .  '<br>';


?>

</body>
</html>