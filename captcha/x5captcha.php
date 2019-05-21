<?php
include("../res/x5engine.php");
$nameList = array("zc8","5nx","htr","zem","gkj","3pt","75j","22v","8xa","hda");
$charList = array("5","4","S","8","D","5","2","6","T","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
