<?php
include "../prihlaseniedodatabazi.php";
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$meno = $_POST['meno'];
$popis = $_POST['popis'];

$pocet_hodin = $_POST['hodiny'];
$nazov_aktivity = $_POST['nazov_aktivity'];


$login = $_SESSION['prihlaseny'];
$id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$login'");
$id2=mysqli_fetch_array($id);
$id3=$id2['id_meno'];

$idk=mysqli_query($con,"SELECT id_aktivita FROM aktivita WHERE meno='$nazov_aktivity'");
$idk2=mysqli_fetch_array($idk);
$idk3=$idk2['id_aktivita'];

$sql="INSERT INTO vykaz(id_meno,meno,popis,pocet_hodin,id_aktivita) VALUES('$id3','$meno','$popis','$pocet_hodin','$idk3')";


if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
//echo "Uloha bola vytvorena";
//echo "<a href=\"index.php\">Spat</a>";
//$_SESSION['prihlaseny'] = $meno;
header("Location: vykazy.php");

mysqli_close($con);