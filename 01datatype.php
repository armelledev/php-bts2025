<?php
include 'array/header.php';

//les types de donnes en php


/*
**** 1 . Types scalaire (simples) ****



*/
// a.les entiers(int)
$nbr1=12;
echo"<pre>";
echo(var_dump($nbr1));
echo"<pre>";


$nbr2=12.5;
echo"<pre>";
echo(var_dump($nbr2));
echo"<pre>";

//b -nombre a virgule flottant
$prix=19.99;
echo"<pre>";
echo(var_dump($prix));
echo"<pre>";

//c.chaine de caractere
$name="owen";
echo"<pre>";
echo(var_dump($name));
echo"<pre>";

//d. booleen
$disponible=true;  //ou $disponible=false
echo"<pre>";
echo(var_dump($disponible));
echo"<pre>";

//les types de donnees en php
/*
**** 1 . Types composes ****

*/
//a. tableau(array)
// tableau indexe
$colors=["green","yellow","red"];
echo"<pre>";
echo(var_dump($colors));
echo"<pre>";

$fruits=[
'mangoes',
'banana',
"water_melon",

];
echo"<pre>";
echo(var_dump($fruits));
echo"</pre>";

// tableau associatif
$person=[
"name"=>"myra",
"date"=>10,
"admin"=> true,

];

echo"<pre>";
echo(var_dump($person));
echo"</pre>";
include 'layouts/footer.php';
