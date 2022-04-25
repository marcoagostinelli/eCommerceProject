<?php
$localizations = ['en', 'fr_CA'];


if(isset($_GET['lang'])){ 
	$lang = $_GET['lang'];
}elseif (isset($_SESSION["lang"])){
	$lang=$_SESSION["lang"];
}else
	$lang = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);

$lang = Locale::lookup($localizations, $lang, true, 'en');

$_SESSION['lang'] = $lang;

$rootlang = preg_split('/_/', $lang); $rootlang = (is_array($rootlang)?$rootlang[0]:$rootlang);

bindtextdomain($lang, "locale");
textdomain($lang);