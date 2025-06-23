<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="index.php">cours-php-bts</a><br><br>
     <h1>les structure conditionelle</h1>

<?php

$age=20;
$salary=250000;
if($age>=18){
    echo "vous etes majeur.";
}
else {
    echo "vous etes mineur";
}  echo'<br>';
if($age>=18)
$message=($age>=18) ? "vous etes majuers." : "vous ete mineur";
echo $message . '<br>';


$userRole="editor";
if($userRole === 'admin'){
    echo 'you have full access. <br>';
}
elseif($userRole === 'editor'){
    echo 'you can edit content. <br>';
}
elseif($userRole === 'user'){
    echo 'you can view post and comment. <br>';
}
else{
    echo 'unknown role . <br>';
}
?>

</body>
</html>