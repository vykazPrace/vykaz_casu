<?php
include "prihlaseniedodatabazi.php";
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$login = $_POST['login'];
$heslo = sha1($_POST['heslo']);
$potvrdenie_hesla = sha1($_POST['potvrdenie_hesla']);
$meno = $_POST['meno'];
$priezvisko = $_POST['priezvisko'];
$adresa = $_POST['adresa'];
$email = $_POST['email'];


if ($_POST['login'] == "" || $_POST['heslo'] == "" || $_POST['potvrdenie_hesla'] == "" || $_POST['meno'] == "" || $_POST['priezvisko'] == "" || $_POST['adresa'] == "" || $_POST['email'] == ""){
    die("Nieco ste vynechali!");
}
if ($heslo!=$potvrdenie_hesla){
    die("Heslo a potvrdzovacie heslo sa nezhoduju!");
}


$query = "SELECT * FROM uzivatelia WHERE meno=\"".$login."\"";
$result = mysqli_query($con, $query) or die ("Chyba!");
$num = mysqli_num_rows($result);
if ($num != 0){
    echo "Niekto už používa rovnaký login!<br>";
    die();
}


$sql="INSERT INTO uzivatelia(meno,heslo,meno_uzivatela,priezvisko_uzivatela,adresa,email) VALUES('$login','$heslo','$meno','$priezvisko','$adresa','$email' )";

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

$_SESSION['prihlaseny'] = $login;
header("Location: ./prihlaseny_veduci/index.php");

mysqli_close($con);
