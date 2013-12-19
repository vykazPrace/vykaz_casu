<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 11:03:22 GMT">


<title> faq </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:bold;font-style:normal;font-size:14pt;text-decoration:none;color:#ffffff;}
.textstyle1 {font-family:Arial;font-weight:normal;font-style:normal;font-size:36pt;text-decoration:underline;color:#bf6000;}
.textstyle2 {font-family:Arial;font-weight:bold;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}
.textstyle3 {font-family:Arial;font-weight:normal;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}


   /* OBJECT STYLES */

div.Object3123 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object3124 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object3125 { position:absolute; top:160px; left:867px; z-index:2; }
div.Object3126 { position:absolute; top:160px; left:714px; z-index:3; }
div.Object3127 { position:absolute; top:160px; left:561px; z-index:4; }
div.Object3128 { position:absolute; top:160px; left:408px; z-index:5; }
div.Object3129 { position:absolute; top:34px; left:95px; z-index:6; }
div.Object3130 { position:absolute; top:191px; left:109px; z-index:7; text-align:left; width:165px; }
div.Object3131 { position:absolute; top:282px; left:145px; z-index:8; text-align:left; width:98px; }
div.Object3132 { position:absolute; top:390px; left:148px; z-index:9; text-align:left; width:186px; }
div.Object3133 { position:absolute; top:456px; left:147px; z-index:10; text-align:left; width:225px; }



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

<div class="Object3123"><img src="files/IMG_40.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object3124"><img src="files/IMG_41.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object3125"><a href="kontakt.php" onMouseOver='img_mo0.src="files/mo_IMG_42.jpg"' onMouseOut='img_mo0.src="files/IMG_42.jpg"'><img src="files/IMG_42.jpg" name="img_mo0" alt="" width="152px" height="84px"></a></div>

<div class="Object3126"><a href="faq.php" onMouseOver='img_mo1.src="files/mo_IMG_43.jpg"' onMouseOut='img_mo1.src="files/IMG_43.jpg"'><img src="files/IMG_43.jpg" name="img_mo1" alt="" width="152px" height="84px"></a></div>

<div class="Object3127"><a href="osysteme.php" onMouseOver='img_mo2.src="files/mo_IMG_44.jpg"' onMouseOut='img_mo2.src="files/IMG_44.jpg"'><img src="files/IMG_44.jpg" name="img_mo2" alt="" width="152px" height="84px"></a></div>

<div class="Object3128"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_45.jpg"' onMouseOut='img_mo3.src="files/IMG_45.jpg"'><img src="files/IMG_45.jpg" name="img_mo3" alt="" width="152px" height="84px"></a></div>

<div class="Object3129"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div class="Object3130"><span class="textstyle0">V&#253;kaz prace s.r.o.<br>
</span></div>

<div class="Object3131"><span class="textstyle1">FAQ<br>
</span></div>

<div class="Object3132"><span class="textstyle2">Ako sa registrujem?<br>
</span><span class="textstyle3">Na hlavnej str&#225;nke.<br>
</span></div>

<div class="Object3133"><span class="textstyle2">Ako si vytvor&#237;m projekt?<br>
</span><span class="textstyle3">Pomocou ikonky Vytvorit projekt.<br>
</span></div>
</div>

</body>
</html>
