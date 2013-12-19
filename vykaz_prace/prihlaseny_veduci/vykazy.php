<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 13:08:19 GMT">


<title> vykazy </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:normal;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}


   /* OBJECT STYLES */

div.Object1125 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object1126 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object1127 { position:absolute; top:160px; left:788px; z-index:2; }
div.Object1128 { position:absolute; top:160px; left:556px; z-index:3; }
div.Object1129 { position:absolute; top:160px; left:324px; z-index:4; }
div.Object1130 { position:absolute; top:160px; left:92px; z-index:5; }
div.Object1131 { position:absolute; top:1px; left:723px; z-index:6; background-image: url(files/IMG_121.jpg); height:29px; width:293px; }
div.Object1132 { position:absolute; top:34px; left:95px; z-index:7; }
div.Object1133 { position:absolute; top:1px; left:483px; z-index:8; background-image: url(files/IMG_123.jpg); height:29px; width:236px; }
div.Object1134 { position:absolute; top:268px; left:113px; z-index:9; text-align:left; width:600px; }



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

<div class="Object1125"><img src="files/IMG_142.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object1126"><img src="files/IMG_143.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object1127"><a href="vykazy.php" onMouseOver='img_mo0.src="files/mo_IMG_144.jpg"' onMouseOut='img_mo0.src="files/IMG_144.jpg"'><img src="files/IMG_144.jpg" name="img_mo0" alt="" width="231px" height="84px"></a></div>

<div class="Object1128"><a href="ulohy.php" onMouseOver='img_mo1.src="files/mo_IMG_145.jpg"' onMouseOut='img_mo1.src="files/IMG_145.jpg"'><img src="files/IMG_145.jpg" name="img_mo1" alt="" width="231px" height="84px"></a></div>

<div class="Object1129"><a href="personal.php" onMouseOver='img_mo2.src="files/mo_IMG_146.jpg"' onMouseOut='img_mo2.src="files/IMG_146.jpg"'><img src="files/IMG_146.jpg" name="img_mo2" alt="" width="231px" height="84px"></a></div>

<div class="Object1130"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_147.jpg"' onMouseOut='img_mo3.src="files/IMG_147.jpg"'><img src="files/IMG_147.jpg" name="img_mo3" alt="" width="231px" height="84px"></a></div>

<div align="center" class="Object1131">
    <?php

    echo "Prihlaseny: <a href=\"profil.php\" style=\"text-decoration:none;\"><strong><font color=green>".$_SESSION['prihlaseny']."</font></strong></a> |";
    ?>
    <a href="logout.php">Odhlásiť sa</a>
</div>

<div class="Object1132"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div align="center" class="Object1133">
    <?php
    echo "Prepojiť sa do role:<a href=\"../prihlaseny_zamestnanec/index.php\" style=\"text-decoration:none;\">Zamestnanec</a>";
    ?>
</div>

<div class="Object1134"><span class="textstyle0">
<h2><u>Vykazy</u></h2>
        <br></br>
        <?php
        include "../prihlaseniedodatabazi.php";
        $menoPr = $_SESSION['prihlaseny'];
        $id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$menoPr'");
        $id2=mysqli_fetch_array($id);
        $id3=$id2['id_meno'];


        $co14="SELECT * FROM aktivita WHERE id_meno='$id3'";
        $result15=mysqli_query($con, $co14);


        echo "<form action=\"vykazy.php\" method=\"POST\">";
        echo "<select name=\"select1\">";
        while ($row=mysqli_fetch_array($result15))
        {
            $meno=$row["meno"];
            echo $row["meno"];
            echo "<option value=\"$meno\">",$row["meno"],"</option>";

        }
        echo "<input type=\"submit\" value=\"Vypíš\" />";
        echo "</select>";
        echo "</form>";


        if(isset($_POST['select1'])){
            echo "<h2>Výpis výkazov na aktivite: <font color ='green'><u>",$_POST['select1'],"</u></font></h2>";
            $id_ak=$_POST['select1'];
            $id_proj3 = mysqli_query($con, "SELECT * FROM aktivita WHERE meno='$id_ak'");
            $id_ak2=mysqli_fetch_array($id_proj3);
            $id_ak3=$id_ak2['id_aktivita'];
            $id_proj = mysqli_query($con, "SELECT * FROM vykaz WHERE id_aktivita='$id_ak3'");


            $num_results = mysqli_num_rows($id_proj);


            if (!isset($_GET['strana'])){

                $strana = 1;

            }else{

                $strana = ($_GET['strana']);

            }


            $limit=5;
            $celkovy_pocet=$num_results;
            $pocet_stran=ceil($celkovy_pocet/$limit);
            $pociatok=($strana*$limit)-$limit;

            for ($i=1; $i<=$pocet_stran; $i++)
            {
                if ($i<>$strana)
                {
                    echo "<a href=\"vykazy.php?ctrl=1&strana=",$i,"\">",$i,"</a> | ";
                }
                else
                {
                    echo "<font color=\"#FF0000\">",$i,"</font> | ";
                }
            }
            if ($strana<>$pocet_stran)
            {
                echo "<a href=\"vykazy.php?ctrl=1&strana=",$strana+1,"\">nasledujúca strana</a>";
            }//endif
            echo "</p>";





            echo "<table class='tabulka' border='0' width='700'>";
            echo "<tr><th>Aktivita</td><th>Popis</td><th>Pocet hodin</td><th>Zamestnanec</td><th></td><th></td></tr>";
            while ($row=mysqli_fetch_array($id_proj))
            {
                $nazov2=$row["id_vykaz"];
                $start=mysqli_query($con,"SELECT meno FROM vykaz WHERE id_vykaz='$nazov2'");
                $start2=mysqli_fetch_array($start);
                $poecthodin=mysqli_query($con,"SELECT pocet_hodin FROM vykaz WHERE id_vykaz='$nazov2'");
                $poecthodin2=mysqli_fetch_array($poecthodin);
                $end=mysqli_query($con,"SELECT * FROM vykaz WHERE id_vykaz='$nazov2'");
                $end2=mysqli_fetch_array($end);
                $end3=$end2["id_meno"];
                $meno=mysqli_query($con,"SELECT meno FROM uzivatelia WHERE id_meno='$end3'");
                $meno2=mysqli_fetch_array($meno);

                //echo "<tr><td><a href=\"ulohy.php?ctrl=1&strana=",$strana,"&aktivita=",$row["nazov"],"\"style=\"text-decoration:none;\">",$row["nazov"],"</a></td>";
                echo "<tr></tr><td>",$start2["meno"],"</td>";
                echo "<td>",$end2["popis"],"</td>";
                echo "<td>",$end2["id_meno"],"</td>";
                echo "<td>",$meno2["meno"],"</td>";
                echo "<td><img src=\"files/show.png\"></td>";

                echo "<td><img src=\"files/delete.png\"   ></td></tr>";
            }
            echo "</table>";
        }
        ?>

</span></div>
</div>

</body>
</html>
