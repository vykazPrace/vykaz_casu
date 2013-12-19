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
            background-color: #dedede;
        }
        table.tabulka td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
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
        echo "Prepojiť sa do role:<a href=\"../prihlaseny_veduci/index.php\" style=\"text-decoration:none;\">Veduci</a>";
        ?>
    </div>

    <div class="Object1134"><span class="textstyle0">
<h2><u>Vytváranie úlohy</u></h2>
        <br></br>

        <form action="vytvor_vykaz.php" method="POST">
            <table>

                <tr><td>Meno:</td><td> <input type="text" name="meno"/></td></tr>
                <tr><td>Popis: </td><td><textarea name="popis" maxlength="1000" cols="25" rows="6"></textarea></td></tr>
                <tr><td>Pocet hodin: </td><td><input type="text" name="hodiny" /></td></tr>

                <?php
                include "../prihlaseniedodatabazi.php";
                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $login = $_SESSION['prihlaseny'];
                $id=mysqli_query($con,"SELECT id_meno FROM uzivatelia WHERE meno='$login'");
                $id2=mysqli_fetch_array($id);
                $id3=$id2['id_meno'];
                $result3 = mysqli_query($con,"SELECT meno FROM aktivita WHERE id_meno='$id3'");

                ?>
                <p>Názov projektu<br>
                    <select name="nazov_aktivity">
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result3)) {
                            ?>
                            <option value="<?=$row["meno"];?>"><?=$row["meno"];?>
                            </option>
                            <?php
                            $i++;
                        }
                        ?>
                    </select>
                </p>
                <tr><td><input type="submit" /></td></tr>
            </table>
        </form>

</span></div>
</div>

</body>
</html>
