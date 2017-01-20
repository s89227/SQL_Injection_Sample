<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>XSS Sample</title>
</head>
<body>
	<div style="text-align:center;">
		<h1>執行結果</h1>
		<h2>防範一：限制輸入/輸出長度</h2>
		<?php
			echo "第一個輸入(限制輸入15字元): ".$_GET[input_1]."<br><br>";
			echo "第二個輸入(限制輸出15字元): ".substr($_GET[input_2], 0, 15)."<br><br>";
		?>
	</div>
</body>
</html>