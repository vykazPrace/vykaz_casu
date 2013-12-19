<?php
include "prihlaseniedodatabazi.php";


// deklarujeme uzivatelsky vstup
$login = $_POST['login'];
$heslo = sha1($_POST['heslo']); # ziskame heslo v sifrovanej podobe

// ziskame heslo pre urcene meno
$result = mysqli_query($con, "SELECT heslo FROM uzivatelia WHERE meno='$login'");
$row = mysqli_fetch_row($result); // v $row[0] je ulozene heslo


// overime spravnost hesla
if($heslo == $row[0])
{

    $_SESSION['prihlaseny'] = $login;


    header("Location: ./prihlaseny_veduci/index.php");
}
else
{
    echo "Zadali ste neplatné meno alebo heslo!";
}
?>
<a href="index.php">Spat</a>


