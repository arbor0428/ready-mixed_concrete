<!-- <?
if($_SERVER['SERVER_PORT'] == '443'){
	$siteLogo = "https://".$_SERVER['HTTP_HOST']."/images/sns.jpg";
	$siteShortcut = "https://".$_SERVER['HTTP_HOST']."/images/shortcut.png";
}else{
	$siteLogo = "http://".$_SERVER['HTTP_HOST']."/images/sns.jpg";
	$siteShortcut = "http://".$_SERVER['HTTP_HOST']."/images/shortcut.png";
}
?> -->

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--<meta name="viewport" content="width=device-width" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<!--<meta name="viewport" content="width=1280">-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/images/common/favicon.png"><!--파비콘-->

<!--<meta name="naver-site-verification" content="ebb512c47e26ac00bd8ea43dc2d5f690ff250f0b" />-->
<meta name="description" content="">

<meta property="og:url" content="http://hkone.smilework.kr/">
<meta property="og:title" content="Heungkuk Industry’">
<meta property="og:type" content="website">
<meta property="og:image" content="/images/common/sns.jpg"><!--sns이미지-->
<meta property="og:description" content="">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Heungkuk Industry">
<link rel="apple-touch-icon-precomposed" href="<?=$siteShortcut?>">



<link rel="canonical" href="http://hkone.smilework.kr/">

<?
/*
if($_SERVER['SERVER_PORT'] != '443'){
	$sslUrl = "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	echo ("<script>location.href='$sslUrl';</script>");
	exit;
}
*/
?>