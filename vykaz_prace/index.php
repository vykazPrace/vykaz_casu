<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 11:03:22 GMT">


<title> domov </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:bold;font-style:normal;font-size:14pt;text-decoration:none;color:#ffffff;}
.textstyle1 {font-family:Arial;font-weight:bold;font-style:normal;font-size:36pt;text-decoration:none;color:#bf6000;}
.textstyle2 {font-family:Arial;font-weight:normal;font-style:normal;font-size:24pt;text-decoration:none;color:#bf6000;}
.textstyle3 {font-family:Arial;font-weight:normal;font-style:normal;font-size:18pt;text-decoration:none;color:#bf6000;}
.textstyle4 {font-family:Arial;font-weight:normal;font-style:normal;font-size:13pt;text-decoration:none;color:#bf6000;}
   /* OBJECT STYLES */

div.Object3208 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object3209 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object3210 { position:absolute; top:160px; left:867px; z-index:2; }
div.Object3211 { position:absolute; top:160px; left:714px; z-index:3; }
div.Object3212 { position:absolute; top:160px; left:561px; z-index:4; }
div.Object3213 { position:absolute; top:160px; left:408px; z-index:5; }
div.Object3214 { position:absolute; top:264px; left:105px; z-index:6;  background-image: url(files/IMG_113.jpg);width=349px height=204px;}
div.Object3215 { position:absolute; top:34px; left:95px; z-index:7; }
div.Object3216 { position:absolute; top:191px; left:109px; z-index:8; text-align:left; width:165px; }
div.Object3217 { position:absolute; top:272px; left:503px; z-index:9; text-align:center; width:431px; }
div.Object3218 { position:absolute; top:503px; left:120px; z-index:10; text-align:left; width:747px; }


   /* BODY STYLES */

body {
 margin:0px;
 padding :0px;
 text-align:center;
 height:100%;
 width:100%;
 background-color: #ffc891;
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
include "./kontrola_prihlasenia.php";
if ( isset($_SESSION['prihlaseny'])) {
    $con =mysqli_connect("localhost","root","","vykaz4");;
    $select = mysqli_query($con, "SELECT meno FROM uzivatelia WHERE meno='robo'") or die (mysql_error());

    if (mysqli_num_rows($select)==1) {header("Location: ./prihlaseny_veduci/index.php"); }
}

?>
<div id="container">

<div class="Object3208"><img src="files/IMG_107.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object3209"><img src="files/IMG_108.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object3210"><a href="kontakt.php" onMouseOver='img_mo0.src="files/mo_IMG_109.jpg"' onMouseOut='img_mo0.src="files/IMG_109.jpg"'><img src="files/IMG_109.jpg" name="img_mo0" alt="" width="152px" height="84px"></a></div>

<div class="Object3211"><a href="faq.php" onMouseOver='img_mo1.src="files/mo_IMG_110.jpg"' onMouseOut='img_mo1.src="files/IMG_110.jpg"'><img src="files/IMG_110.jpg" name="img_mo1" alt="" width="152px" height="84px"></a></div>

<div class="Object3212"><a href="osysteme.php" onMouseOver='img_mo2.src="files/mo_IMG_111.jpg"' onMouseOut='img_mo2.src="files/IMG_111.jpg"'><img src="files/IMG_111.jpg" name="img_mo2" alt="" width="152px" height="84px"></a></div>

<div class="Object3213"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_112.jpg"' onMouseOut='img_mo3.src="files/IMG_112.jpg"'><img src="files/IMG_112.jpg" name="img_mo3" alt="" width="152px" height="84px"></a></div>

<div align ="center" class="Object3214"><span class="textstyle4">

    <h2>&nbsp&nbspPrihlásenie</h2>
    <form action="prihlasenie.php" method="post">
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrihlasovacie meno: <input type="text" name="login"/></p>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrihlasovacie heslo: <input type="password" name="heslo"/></p>
        <p><input type="submit" value="Prihlásiť" /><a href="registracny_formular.php" style=text-decoration:none;><input type="button" value=" Registrácia " ></a></p>
    </form>
</span>
</div>

<div class="Object3215"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div class="Object3216"><span class="textstyle0">V&#253;kaz prace s.r.o.<br>
<span class="textstyle0"></div>

<div class="Object3217"><span class="textstyle1">Vitajte na webovej 
str&#225;nke <br>
V&#253;kaz pr&#225;ce<br>
</span></div>

<div class="Object3218"><span class="textstyle2">On-line systém pre evidenciu práce a zákaziek:<br>
</span><span class="textstyle3">
&bull; Výkaz práce je nástroj pre sledovanie efektivity práce <br>
&bull; Spolupracujte na svojich zákazkách s kýmkoľvek a odkiaľkoľvek <br>
&bull; Používanie bez nutnosti inštalácie, stačí sa pripojiť a používať <br>
&bull; Jediné čo potrebujete, je pripojenie na internet a webovový prehliadač<br>
&bull; Ponúkaná služba je úplne zdarma<br>
</span></div>
</div>

</body>
</html>
