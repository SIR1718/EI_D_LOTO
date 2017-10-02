<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<link rel="stylesheet" type="text/css" href="euro.css">
</head>
<body>

<h1> Chave do euromilhões </h1>

<?php
//for ($i=0; $i<10; $i++) {
// echo "ola\n";
//}

//$textJSON = file_get_contents("http://62.28.241.149/~pmoreira/KEYSERVER/KeyServerJSON.php");

$textJSON = file_get_contents("http://localhost/SIR1718/LOTO_EI_D/keyServerJSON.php");

$chave = json_decode($textJSON);

//var_dump($chave);

?>
<div class="key">
<ul class="numbers">
<?php 
	for($n=0; $n<count($chave->numbers); $n++) {
		echo "<li>".$chave->numbers[$n]."</li>";
	}
 ?>
</ul>

<ul class="stars">
<?php 
	foreach ($chave->stars as $starnumber) {
		echo "<li>".$starnumber."</li>";
	}
 ?>
</ul>
</div>

<div class="key">
<!--ul style="color:#FF0000;"-->
<ul class="numbers">
	<li>2</li>
	<li>7</li>
	<li>17</li>
	<li>23</li>
	<li>45</li>
</ul>
<ul class="stars">
	<li>2</li>
	<li>8</li>
</ul>
</div>

</body>
</html>