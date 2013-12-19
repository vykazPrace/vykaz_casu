
<?php
include "../prihlaseniedodatabazi.php";
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nazov = $_POST['nazov'];
$popis = $_POST['popis'];
$start_projektu = $_POST['start_projektu'];
$koniec_projektu = $_POST['koniec_projektu'];

$meno = $_SESSION['prihlaseny'];
$id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$meno'");
$id2=mysqli_fetch_array($id);
$id3=$id2['id_meno'];
$sql="INSERT INTO projekt(nazov,popis,veduci,start_projektu,koniec_projektu) VALUES('$nazov','$popis','$id3','$start_projektu','$koniec_projektu' )";

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "Projekt bol vytvoreny!";
echo "<a href=\"index.php\">Spat</a>";

mysqli_close($con);
