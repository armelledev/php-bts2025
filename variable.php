<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours php</title>
</head>
<body>
    <h1>variable en php</h1>
    <a href="index.php">cours-php-bts</a><br><br>
   

<?php

$nom="lulu";
$age=25;
echo "bonjour je m'appelle $nom, j'ai $age ans";
echo '<br>';
$age=25;
echo is_int($age);
echo '<br>';
echo is_string($age);

echo gettype($age);
echo '<br>';

echo gettype($nom);
echo '<br>';
 var_dump($nom ,$age);
 echo '<br>';
 echo '<b>bonjour</b>';

 echo'/bonjour';
 echo '<br>';
isset($age);
var_dump(isset($age));


?>
</body>
</html>