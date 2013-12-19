<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta name="generator" content="CoffeeCup Visual Site Designer, Version 7.0 Build 19 for Windows">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="generator" content="CoffeeCup Visual Site Designer (www.coffeecup.com)">
<meta name="created" content="Tue, 17 Dec 2013 11:03:22 GMT">


<title> kontakt </title>

<style type="text/css">

   /* TEXT STYLES */

.textstyle0 {font-family:Arial;font-weight:bold;font-style:normal;font-size:14pt;text-decoration:none;color:#ffffff;}
.textstyle1 {font-family:Arial;font-weight:bold;font-style:normal;font-size:24pt;text-decoration:none;color:#bf6000;}
.textstyle2 {font-family:Arial;font-weight:bold;font-style:normal;font-size:18pt;text-decoration:none;color:#bf6000;}
.textstyle3 {font-family:Arial;font-weight:normal;font-style:normal;font-size:18pt;text-decoration:none;color:#bf6000;}
.textstyle4 {font-family:Arial;font-weight:normal;font-style:normal;font-size:18pt;text-decoration:underline;color:#bf6000;}
.textstyle5 {font-family:Arial;font-weight:normal;font-style:normal;font-size:36pt;text-decoration:underline;color:#bf6000;}


   /* OBJECT STYLES */

div.Object3134 { position:absolute; top:137px; left:69px; z-index:0; }
div.Object3135 { position:absolute; top:239px; left:87px; z-index:1; }
div.Object3136 { position:absolute; top:160px; left:867px; z-index:2; }
div.Object3137 { position:absolute; top:160px; left:714px; z-index:3; }
div.Object3138 { position:absolute; top:160px; left:561px; z-index:4; }
div.Object3139 { position:absolute; top:160px; left:408px; z-index:5; }
div.Object3140 { position:absolute; top:34px; left:95px; z-index:6; }
div.Object3141 { position:absolute; top:414px; left:132px; z-index:7; }
div.Object3142 { position:absolute; top:377px; left:134px; z-index:8; }
div.Object3143 { position:absolute; top:377px; left:168px; z-index:9; }
div.Object3144 { position:absolute; top:580px; left:375px; width:447px; z-index:10; }
div.Object3145 { position:absolute; top:191px; left:109px; z-index:11; text-align:left; width:165px; }
div.Object3146 { position:absolute; top:378px; left:223px; z-index:12; text-align:left; width:443px; }
div.Object3147 { position:absolute; top:436px; left:130px; z-index:13; text-align:left; width:209px; }
div.Object3148 { position:absolute; top:438px; left:404px; z-index:14; text-align:left; width:240px; }
div.Object3149 { position:absolute; top:440px; left:679px; z-index:15; text-align:left; width:249px; }
div.Object3150 { position:absolute; top:270px; left:134px; z-index:16; text-align:left; width:163px; }



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

<div class="Object3134"><img src="files/IMG_47.jpg"  alt="" width="973px" height="130px"></div>

<div class="Object3135"><img src="files/IMG_48.jpg"  alt="" width="942px" height="726px"></div>

<div class="Object3136"><a href="kontakt.php" onMouseOver='img_mo0.src="files/mo_IMG_49.jpg"' onMouseOut='img_mo0.src="files/IMG_49.jpg"'><img src="files/IMG_49.jpg" name="img_mo0" alt="" width="152px" height="84px"></a></div>

<div class="Object3137"><a href="faq.php" onMouseOver='img_mo1.src="files/mo_IMG_50.jpg"' onMouseOut='img_mo1.src="files/IMG_50.jpg"'><img src="files/IMG_50.jpg" name="img_mo1" alt="" width="152px" height="84px"></a></div>

<div class="Object3138"><a href="osysteme.php" onMouseOver='img_mo2.src="files/mo_IMG_51.jpg"' onMouseOut='img_mo2.src="files/IMG_51.jpg"'><img src="files/IMG_51.jpg" name="img_mo2" alt="" width="152px" height="84px"></a></div>

<div class="Object3139"><a href="index.php" onMouseOver='img_mo3.src="files/mo_IMG_52.jpg"' onMouseOut='img_mo3.src="files/IMG_52.jpg"'><img src="files/IMG_52.jpg" name="img_mo3" alt="" width="152px" height="84px"></a></div>

<div class="Object3140"><img src="files/Baner4.png"  alt="" width="924px" height="122px"></div>

<div class="Object3141"><img src="files/IMG_54.jpg"  alt="" width="855px" height="1px"></div>

<div class="Object3142"><img src="files/flag_sk.png"  alt="" width="32px" height="32px"></div>

<div class="Object3143"><img src="files/flag_cz.png"  alt="" width="32px" height="32px"></div>

<div class="Object3144"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=sk&amp;geocode=&amp;q=Jedl%C3%ADkova+9,+Ko%C5%A1ice,+Slovensk%C3%A1+republika&amp;aq=0&amp;oq=jedlikova+9&amp;sll=37.0625,-95.677068&amp;sspn=37.188995,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Jedl%C3%ADkova+1335%2F9,+040+11+Ko%C5%A1ice,+Slovensk%C3%A1+republika&amp;z=14&amp;ll=48.697454,21.233464&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=sk&amp;geocode=&amp;q=Jedl%C3%ADkova+9,+Ko%C5%A1ice,+Slovensk%C3%A1+republika&amp;aq=0&amp;oq=jedlikova+9&amp;sll=37.0625,-95.677068&amp;sspn=37.188995,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Jedl%C3%ADkova+1335%2F9,+040+11+Ko%C5%A1ice,+Slovensk%C3%A1+republika&amp;z=14&amp;ll=48.697454,21.233464" style="color:#0000FF;text-align:left">Zvýrazniť mapu</a></small></div>

<div class="Object3145"><span class="textstyle0">Výkaz prace s.r.o.<br>
</span></div>

<div class="Object3146"><span class="textstyle1">Slovensko a Česká republika<br>
</span></div>

<div class="Object3147"><span class="textstyle2">Výkaz práce, s.r.o.<br>
</span><span class="textstyle3">Jedlíkova 9<br>
060 01 Košice<br>
</span><span class="textstyle4">www.vykazprace.sk<br>
</span></div>

<div class="Object3148"><span class="textstyle2">Obchodné oddelenie<br>
</span><span class="textstyle3">- T: +421 908 678 043<br>
- E: </span><span class="textstyle4">obchod@vykaz.sk<br>
</span></div>

<div class="Object3149"><span class="textstyle2">Technická podpora:<br>
</span><span class="textstyle3">- T: +421 949 033 520<br>
- E: </span><span class="textstyle4">podpora@vykaz.sk<br>
</span></div>

<div class="Object3150"><span class="textstyle5">Kontakt<br>
</span></div>
</div>

</body>
</html>
