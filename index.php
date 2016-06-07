<html>
<?php
$title="";
if(isset($_GET["class"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/c101".urlencode($_GET["class"]).".html";
	$html=@file_get_contents($url);
	$html=iconv("BIG5", "UTF-8//IGNORE", $html);
	$html=preg_replace('/href=".*?t(.*?).html"/','href="?teach=$1"',$html);
	$html=preg_replace('/href=".*?_(.*?).html"/','href="?main=$1"',$html);
	$title=urlencode($_GET["class"]);
}
else if(isset($_GET["teach"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/t".urlencode($_GET["teach"]).".html";
	$html=@file_get_contents($url);
	$html=iconv("BIG5", "UTF-8//IGNORE", $html);
	$html=preg_replace('/href=".*?c101(.*?).html"/','href="?class=$1"',$html);
	$html=preg_replace('/href=".*?_(.*?).html"/','href="?main=$1"',$html);
	preg_match("/blue.*?>(.+?)<\/.+?> *?教師課表/", $html, $match);
	$title=$match[1];
}
else if(isset($_GET["main"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/_".urlencode($_GET["main"]).".html";
	$html=@file_get_contents($url);
	$html=iconv("BIG5", "UTF-8//IGNORE", $html);
	$html=preg_replace('/href=".*?c101(.*?).html"/','href="?class=$1"',$html);
	$html=preg_replace('/href=".*?t(.*?).html"/','href="?teach=$1"',$html);
	if ($_GET["main"]=="classindex") $title="班級索引";
	else if ($_GET["main"]=="teachindex") $title="教師索引";
}
else {
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/course.html";
	$html=@file_get_contents($url);
	$html=iconv("BIG5", "UTF-8//IGNORE", $html);
	$html=preg_replace('/href=".*?_(.*?).html"/','href="?main=$1"',$html);
}
?>
<head>
	<meta charset="UTF-8">
	<title>南一中<?php echo $title; ?>課表</title>
	<meta name=viewport content="width=600, initial-scale=1">
	<link rel="Shortcut Icon" href="res/icon/60.png">
	<link rel="apple-touch-icon" href="res/icon/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="res/icon/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="res/icon/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="res/icon/152.png">
</head>
<body bgColor="#D0D0D0">
<center>
<h2>臺南一中課表查詢系統 for UTF-8</h2>
若你想要使用 <b>BIG5</b> 或是想看<b>亂碼</b>，建議你使用<a href="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/course.html">正版網站</a><br><br>
<?php
$html=str_replace("big5", "UTF-8", $html);
echo $html;
?>
<hr>
<?php
@include("function/Xiplus-Facebook-Badge/badge.php");
?>
</center>
</body>
</html>
