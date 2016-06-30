<html>
<?php
$title="";
if(isset($_GET["class"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/c101".urlencode($_GET["class"]).".html";
}
else if(isset($_GET["teach"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/t".urlencode($_GET["teach"]).".html";
}
else if(isset($_GET["main"])){
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/_".urlencode($_GET["main"]).".html";
}
else {
	$url="http://w3.tnfsh.tn.edu.tw/deanofstudies/course/course.html";
}
?>
<head>
	<meta charset="UTF-8">
	<title>南一中課表</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="15; url=<?php echo $url; ?>">
	<link rel="Shortcut Icon" href="res/icon/60.png">
	<link rel="apple-touch-icon" href="res/icon/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="res/icon/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="res/icon/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="res/icon/152.png">
</head>
<body bgColor="#D0D0D0">
<center>
<h2>臺南一中課表查詢系統 for UTF-8</h2>
由於臺南一中課表已修正編碼設定，能夠於手機瀏覽器正常顯示，所以此專案已不再必要，決定此專案將不再更新，真是可喜可賀。<br>
即將為你重新導向至正版網站，或是<a href="<?php echo $url; ?>">點我立即前往</a><br><br>
<hr>
<?php
@include("function/Xiplus-Facebook-Badge/badge.php");
?>
</center>
</body>
</html>
