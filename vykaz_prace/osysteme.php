<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 11:03:22 GMT">


<title> osysteme </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:bold;font-style:normal;font-size:14pt;text-decoration:none;color:#ffffff;}
.textstyle1 {font-family:Arial;font-weight:normal;font-style:normal;font-size:14pt;text-decoration:none;color:#bf6000;}
.textstyle2 {font-family:Arial;font-weight:normal;font-style:normal;font-size:36pt;text-decoration:underline;color:#bf6000;}


   /* OBJECT STYLES */

div.Object3112 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object3113 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object3114 { position:absolute; top:160px; left:867px; z-index:2; }
div.Object3115 { position:absolute; top:160px; left:714px; z-index:3; }
div.Object3116 { position:absolute; top:160px; left:561px; z-index:4; }
div.Object3117 { position:absolute; top:160px; left:408px; z-index:5; }
div.Object3118 { position:absolute; top:34px; left:95px; z-index:6; }
div.Object3119 { position:absolute; top:191px; left:109px; z-index:7; text-align:left; width:165px; }
div.Object3120 { position:absolute; top:400px; left:133px; z-index:8; text-align:left; width:868px; }
div.Object3121 { position:absolute; top:276px; left:130px; z-index:9; text-align:left; width:228px; }
div.Object3122 { position:absolute; top:608px; left:137px; z-index:10; text-align:left; width:506px; }



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

<div class="Object3112"><img src="files/IMG_33.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object3113"><img src="files/IMG_34.jpg"  alt="" width="942px" height="750px"></div>

<div class="Object3114"><a href="kontakt.php" onMouseOver='img_mo0.src="files/mo_IMG_35.jpg"' onMouseOut='img_mo0.src="files/IMG_35.jpg"'><img src="files/IMG_35.jpg" name="img_mo0" alt="" width="152px" height="84px"></a></div>

<div class="Object3115"><a href="faq.php" onMouseOver='img_mo1.src="files/mo_IMG_36.jpg"' onMouseOut='img_mo1.src="files/IMG_36.jpg"'><img src="files/IMG_36.jpg" name="img_mo1" alt="" width="152px" height="84px"></a></div>

<div class="Object3116"><a href="osysteme.php" onMouseOver='img_mo2.src="files/mo_IMG_37.jpg"' onMouseOut='img_mo2.src="files/IMG_37.jpg"'><img src="files/IMG_37.jpg" name="img_mo2" alt="" width="152px" height="84px"></a></div>

<div class="Object3117"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_38.jpg"' onMouseOut='img_mo3.src="files/IMG_38.jpg"'><img src="files/IMG_38.jpg" name="img_mo3" alt="" width="152px" height="84px"></a></div>

<div class="Object3118"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div class="Object3119"><span class="textstyle0">V&#253;kaz prace s.r.o.<br>
</span></div>

<div class="Object3120"><span class="textstyle1">Systém Výkaz práce je určený pre každého, kto chce mať ucelený
        prehľad o svojej práci a práci svojích zamestnancoch. Umožňuje evidenciu zákaziek a práce. On-line prístup
        cez webové rozhranie umožňuje vkladanie zákaziek a odpracovaných hodín kedykoľvek a kdekoľvek. Systém
        taktiež ponúka možnost pridelenia rozdielných prístupových práv pracovníkom podľa ich funkcie. Pred vstupom
        neoprávneného užívateľa je zabezpečený užívateľským menom a heslom. Hlavným cieľom systému Výkaz práce
        je úspora času nutného k evidenci pracovných procesov na jednotlivých zákazkách.<br>
</span></div>

<div class="Object3121"><span class="textstyle2">O syst&#233;me<br>
</span></div>

<div class="Object3122"><span class="textstyle1">Základné vlastnosti: <br>
&bull; evidencia práce a zakáziek <br>
&bull; on-line prístup z akéhokoľvek miesta cez webové rozhranie<br>
&bull; kompletný prehľad všetkých zákaziek <br>
&bull; prehľadné spracovanie úloh a pracovných výkazov <br>
&bull; jednoduché sledovanie efektivity práce <br>
&bull; nezávislost na platforme a webovom prehliadači<br>
&bull; filtrovanie a vyhľadávanie projektov <br>
&bull; zabezpečenie heslom pred prípadným zneužitím <br>
&bull; viacúrovňové prístupové práva<br>
</span></div>
</div>

</body>
</html>
