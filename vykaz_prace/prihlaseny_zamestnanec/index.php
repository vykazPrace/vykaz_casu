<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 13:08:19 GMT">


<title> projekt </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:normal;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}


   /* OBJECT STYLES */

div.Object1095 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object1096 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object1097 { position:absolute; top:160px; left:788px; z-index:2; }
div.Object1098 { position:absolute; top:160px; left:556px; z-index:3; }
div.Object1099 { position:absolute; top:160px; left:324px; z-index:4; }
div.Object1100 { position:absolute; top:160px; left:92px; z-index:5; }
div.Object1101 { position:absolute; top:1px; left:723px; z-index:6; background-image: url(files/IMG_121.jpg); height:29px; width:293px; }
div.Object1102 { position:absolute; top:34px; left:95px; z-index:7; }
div.Object1103 { position:absolute; top:1px; left:483px; z-index:8; background-image: url(files/IMG_123.jpg); height:29px; width:236px; }
div.Object1104 { position:absolute; top:268px; left:113px; z-index:9; text-align:left; width:300px; }



   /* BODY STYLES */

body {
 margin:0px;
 padding :0px;
 text-align:center;
 height:100%;
 width:100%;
 background-color: #ffc891;
}
    table.tabulka th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffaa50;
    }
    table.tabulka td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffe6cc;
    }


   /* LINK STYLES */

A:link { color:#365dd9;}

A:visited  { color:#365dd9;}

A:hover  { color:#365dd9;}

   /* IMAGE STYLES */

img { border:0 none}



   /* CONTAINER RULES */

#container { position:relative; margin:0px auto 0 auto; height:1000px; width:1100px; text-align:left; padding-left:0px;}

</style>
</head>

<body>
<?php
include "../kontrola_prihlasenia.php";
check_user()
?>
<div id="container">

<div class="Object1095"><img src="files/IMG_115.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object1096"><img src="files/IMG_116.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object1097"><a href="vykazy.php" onMouseOver='img_mo0.src="files/mo_IMG_117.jpg"' onMouseOut='img_mo0.src="files/IMG_117.jpg"'><img src="files/IMG_117.jpg" name="img_mo0" alt="" width="231px" height="84px"></a></div>

<div class="Object1098"><a href="ulohy.php" onMouseOver='img_mo1.src="files/mo_IMG_118.jpg"' onMouseOut='img_mo1.src="files/IMG_118.jpg"'><img src="files/IMG_118.jpg" name="img_mo1" alt="" width="231px" height="84px"></a></div>

<div class="Object1099"><a href="personal.php" onMouseOver='img_mo2.src="files/mo_IMG_119.jpg"' onMouseOut='img_mo2.src="files/IMG_119.jpg"'><img src="files/IMG_119.jpg" name="img_mo2" alt="" width="231px" height="84px"></a></div>

<div class="Object1100"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_120.jpg"' onMouseOut='img_mo3.src="files/IMG_120.jpg"'><img src="files/IMG_120.jpg" name="img_mo3" alt="" width="231px" height="84px"></a></div>

<div align="center" class="Object1101">
    <?php

    echo "Prihlaseny: <a href=\"profil.php\" style=\"text-decoration:none;\"><strong><font color=green>".$_SESSION['prihlaseny']."</font></strong></a> |";
    ?>
    <a href="logout.php">Odhlásiť sa</a>
</div>

<div  align="center" class="Object1102"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div align="center" class="Object1103">
<?php
    echo "Prepojiť sa do role:<a href=\"../prihlaseny_veduci/index.php\" style=\"text-decoration:none;\">Veduci</a>";
    ?>
</div>

<div class="Object1104"><span class="textstyle0">
        <h2><u>Moje projekty</u></h2>
        <br></br>
        <a href="pripojit_sa_do_projektu.php"><img src="files/IMG_161.jpg"  alt=""></a>
        <br></br>
         <?php
        include "../prihlaseniedodatabazi.php";
        $meno = $_SESSION['prihlaseny'];
        $id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$meno'");
        $id2=mysqli_fetch_array($id);
        $id3=$id2['id_meno'];
        $co="SELECT * FROM projekt WHERE zamestnanec='$id3'";
        $result=mysqli_query($con, $co);

        $num_results = mysqli_num_rows($result);


        if (!isset($_GET['strana'])){

            $strana = 1;

        }else{

            $strana = ($_GET['strana']);

        }


        $limit=2;
        $celkovy_pocet=$num_results;
        $pocet_stran=ceil($celkovy_pocet/$limit);
        $pociatok=($strana*$limit)-$limit;

        for ($i=1; $i<=$pocet_stran; $i++)
        {
            if ($i<>$strana)
            {
                echo "<a href=\"index.php?ctrl=1&strana=",$i,"\">",$i,"</a> | ";
            }
            else
            {
                echo "<font color=\"#FF0000\">",$i,"</font> | ";
            }
        }
        if ($strana<>$pocet_stran)
        {
            echo "<a href=\"index.php?ctrl=1&strana=",$strana+1,"\">nasledujúca strana</a>";
        }//endif
        echo "</p>";




        $result=mysqli_query($con, "SELECT * FROM projekt WHERE zamestnanec='$id3' ORDER BY nazov DESC LIMIT $pociatok, $limit") or die ("Spojenie s databázou bolo neúspešné");
        $num_results=mysqli_num_rows($result);
        echo "<table class='tabulka' border='0' width='500'>";
        echo "<tr><th>Projekt</td><th>Zaciatok</td><th>Koniec</td><th></td><th></td></tr>";
        while ($row=mysqli_fetch_array($result))
        {
            $nazov2=$row["nazov"];
            $start=mysqli_query($con,"SELECT start_projektu FROM projekt WHERE nazov='$nazov2'");
            $start2=mysqli_fetch_array($start);
            $end=mysqli_query($con,"SELECT koniec_projektu FROM projekt WHERE nazov='$nazov2'");
            $end2=mysqli_fetch_array($end);
            echo "<tr><td>",$row["nazov"],"</td>";
            echo "<td>",$start2["start_projektu"],"</td>";
            echo "<td>",$end2["koniec_projektu"],"</td>";
            echo "<td><a href=\"uprava_projektu.php?projekt=",$row["nazov"],"\"><img src=\"files/show.png\"  ></a></td>";

            echo "<td><img src=\"files/delete.png\"   ></td></tr>";
        }//end while

        echo "</table>";

        ?>


</span></div>
</div>

</body>
</html>
