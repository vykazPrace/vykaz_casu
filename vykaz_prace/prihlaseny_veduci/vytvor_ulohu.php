<?php
include "../prihlaseniedodatabazi.php";
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$meno = $_POST['meno'];
$popis = $_POST['popis'];
$koniec_aktivity = $_POST['koniec_aktivity'];
$pocet_hodin = $_POST['pocet_hodin'];
$nazov_projektu = $_POST['nazov_projektu'];


$login = $_SESSION['prihlaseny'];
$id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$login'");
$id2=mysqli_fetch_array($id);
$id3=$id2['id_meno'];

$idk=mysqli_query($con,"SELECT id_projekt FROM projekt WHERE nazov='$nazov_projektu'");
$idk2=mysqli_fetch_array($idk);
$idk3=$idk2['id_projekt'];

$sql="INSERT INTO aktivita(id_projekt,meno,popis,koniec_aktivity,pocet_hodin) VALUES('$idk3','$meno','$popis','$koniec_aktivity','$pocet_hodin' )";


if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
//echo "Uloha bola vytvorena";
//echo "<a href=\"index.php\">Spat</a>";
//$_SESSION['prihlaseny'] = $meno;
header("Location: ulohy.php");

mysqli_close($con);
