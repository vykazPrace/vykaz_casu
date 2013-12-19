<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 13:08:19 GMT">


<title> ulohy </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:normal;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}


   /* OBJECT STYLES */

div.Object1115 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object1116 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object1117 { position:absolute; top:160px; left:788px; z-index:2; }
div.Object1118 { position:absolute; top:160px; left:556px; z-index:3; }
div.Object1119 { position:absolute; top:160px; left:324px; z-index:4; }
div.Object1120 { position:absolute; top:160px; left:92px; z-index:5; }
div.Object1121 { position:absolute; top:1px; left:723px; z-index:6; background-image: url(files/IMG_121.jpg); height:29px; width:293px; }
div.Object1122 { position:absolute; top:34px; left:95px; z-index:7; }
div.Object1123 { position:absolute; top:1px; left:483px; z-index:8; background-image: url(files/IMG_123.jpg); height:29px; width:236px; }
div.Object1124 { position:absolute; top:268px; left:113px; z-index:9; text-align:left; width:600px; }



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

<div class="Object1115"><img src="files/IMG_133.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object1116"><img src="files/IMG_134.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object1117"><a href="vykazy.php" onMouseOver='img_mo0.src="files/mo_IMG_135.jpg"' onMouseOut='img_mo0.src="files/IMG_135.jpg"'><img src="files/IMG_135.jpg" name="img_mo0" alt="" width="231px" height="84px"></a></div>

<div class="Object1118"><a href="ulohy.php" onMouseOver='img_mo1.src="files/mo_IMG_136.jpg"' onMouseOut='img_mo1.src="files/IMG_136.jpg"'><img src="files/IMG_136.jpg" name="img_mo1" alt="" width="231px" height="84px"></a></div>

<div class="Object1119"><a href="personal.php" onMouseOver='img_mo2.src="files/mo_IMG_137.jpg"' onMouseOut='img_mo2.src="files/IMG_137.jpg"'><img src="files/IMG_137.jpg" name="img_mo2" alt="" width="231px" height="84px"></a></div>

<div class="Object1120"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_138.jpg"' onMouseOut='img_mo3.src="files/IMG_138.jpg"'><img src="files/IMG_138.jpg" name="img_mo3" alt="" width="231px" height="84px"></a></div>

<div align="center" class="Object1121">
    <?php

    echo "Prihlaseny: <a href=\"profil.php\" style=\"text-decoration:none;\"><strong><font color=green>".$_SESSION['prihlaseny']."</font></strong></a> |";
    ?>
    <a href="logout.php">Odhlásiť sa</a>
</div>

<div class="Object1122"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div align="center" class="Object1123">
    <?php
    echo "Prepojiť sa do role:<a href=\"../prihlaseny_veduci/index.php\" style=\"text-decoration:none;\">Veduci</a>";
    ?>
</div>

<div class="Object1124"><span class="textstyle0">
         <h2><u>Úlohy</u></h2>
        <br></br>

        Úlohy na projekte:

        <?php
        include "../prihlaseniedodatabazi.php";
        $menoPr = $_SESSION['prihlaseny'];
        $id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$menoPr'");
        $id2=mysqli_fetch_array($id);
        $id3=$id2['id_meno'];
        $co="SELECT * FROM projekt WHERE zamestnanec='$id3' AND zamestnanec IS NOT NULL";
        $result=mysqli_query($con, $co);


        echo "<form action=\"ulohy.php\" method=\"POST\">";
        echo "<select name=\"select1\">";
        while ($row=mysqli_fetch_array($result))
        {
            $nazov=$row["nazov"];
            echo $row["nazov"];
            echo "<option value=\"$nazov\">",$row["nazov"],"</option>";

        }
        echo "<input type=\"submit\" value=\"Vypíš\" />";
        echo "</select>";
        echo "</form>";


        if(isset($_POST['select1'])){
            echo "<h2>Výpis vašich úloh na projekte: <font color ='green'><u>",$_POST['select1'],"</u></font></h2>";
            $nazov_proj = $_POST['select1'];
            $id_proj = mysqli_query($con, "SELECT * FROM projekt WHERE nazov='$nazov_proj'");
            $id_proj2=mysqli_fetch_array($id_proj);
            $id_proj3=$id_proj2['id_projekt'];
            $result2=mysqli_query($con, "SELECT * FROM aktivita WHERE id_projekt='$id_proj3'");
            $num_results = mysqli_num_rows($result2);


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
                    echo "<a href=\"ulohy.php?ctrl=1&strana=",$i,"\">",$i,"</a> | ";
                }
                else
                {
                    echo "<font color=\"#FF0000\">",$i,"</font> | ";
                }
            }
            if ($strana<>$pocet_stran)
            {
                echo "<a href=\"ulohy.php?ctrl=1&strana=",$strana+1,"\">nasledujúca strana</a>";
            }//endif
            echo "</p>";


            $idmeno=mysqli_query($con, "SELECT id_meno FROM uzivatelia WHERE meno ='$menoPr'") or die ("Spojenie s databázou bolo neúspešné");
            $idmeno2=mysqli_fetch_array($idmeno);
            $idmeno3=$idmeno2["id_meno"];


            $result=mysqli_query($con, "SELECT * FROM aktivita WHERE id_projekt='$id_proj3' AND id_meno='$idmeno3'") or die ("Spojenie s databázou bolo neúspešné");
            $num_results=mysqli_num_rows($result);
            echo "<table class='tabulka' border='0' width='600'>";
            echo "<tr><th>Aktivita</td><th>Popis</td><th>Pocet hodin</td><th>Veduci</td><th></td><th></td></tr>";
            while ($row=mysqli_fetch_array($result))
            {
                $nazov2=$row["id_aktivita"];
                $start=mysqli_query($con,"SELECT meno FROM aktivita WHERE id_aktivita='$nazov2'");
                $start2=mysqli_fetch_array($start);
                $poecthodin=mysqli_query($con,"SELECT pocet_hodin FROM aktivita WHERE id_aktivita='$nazov2'");
                $poecthodin2=mysqli_fetch_array($poecthodin);
                $end=mysqli_query($con,"SELECT popis FROM aktivita WHERE id_aktivita='$nazov2'");
                $end2=mysqli_fetch_array($end);
                $id_meno=mysqli_query($con,"SELECT id_projekt FROM aktivita WHERE id_aktivita='$nazov2'");
                $id_meno2=mysqli_fetch_array($id_meno);
                $id_meno3=$id_meno2["id_projekt"];
                $id_meno4=mysqli_query($con,"SELECT veduci FROM projekt WHERE id_projekt='$id_meno3'");
                $id_meno5=mysqli_fetch_array($id_meno4);
                $id_meno55=$id_meno5["veduci"];
                $id_meno6=mysqli_query($con,"SELECT meno FROM uzivatelia WHERE id_meno=' $id_meno55'");
                $id_meno7=mysqli_fetch_array($id_meno6);
                $spravene=mysqli_query($con,"SELECT stav FROM aktivita WHERE id_aktivita='$nazov2'");
                $spravene2=mysqli_fetch_array($spravene);
                //echo "<tr><td><a href=\"ulohy.php?ctrl=1&strana=",$strana,"&aktivita=",$row["nazov"],"\"style=\"text-decoration:none;\">",$row["nazov"],"</a></td>";
                echo "<td>",$row["meno"],"</td>";
                echo "<td>",$end2["popis"],"</td>";
                echo "<td>",$poecthodin2["pocet_hodin"],"</td>";
                echo "<td>",$id_meno7["meno"],"</td>";



                if($spravene2["stav"]==0){
                echo "<form action=\"ulohy.php?id_aktivita=",$nazov2,"\" method=\"POST\">";
                echo "<td><input value=\"Spraveny\" type=\"submit\" /></td>";


                    echo "</form>";

                }else{
                    echo "<td align=\"center\"><font color='red'><b>Spravene</b></font></td>";
                }

                echo "<td><img src=\"files/show.png\"></td></tr>";


            }//end while

            echo "</table>";

        }
        if(isset($_GET['id_aktivita'])){
            $id_ak=$_GET['id_aktivita'];

            $sql="UPDATE aktivita SET stav ='1' WHERE id_aktivita='$id_ak'";

            if (!mysqli_query($con,$sql))
            {
                die('Error: ' . mysqli_error($con));
            }
            echo "Ste úspešne registrovaný!";
            echo "<a href=\"ulohy.php\">Spat</a>";
        }
        ?>
</span></div>
</div>

</body>
</html>
