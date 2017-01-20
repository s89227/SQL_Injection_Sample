<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>XSS Sample</title>
</head>
<body>
	<div style="text-align:center;">
		<h1>執行結果</h1>
		<h2>沒有防範</h2>
		<?php
			echo "第一個輸入: ".$_GET[input_1]."<br><br>";
			echo "第二個輸入: ".$_GET[input_2]."<br><br>";
		?>
		<h2>使用相對路徑的圖片:</h2>
		<img src="01.jpg" alt="Picture" height="250">
	</div>
</body>
</html>