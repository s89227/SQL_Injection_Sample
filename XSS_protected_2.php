<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>XSS Sample</title>
</head>
<body>
	<div style="text-align:center;">
		<h1>執行結果</h1>
		<h2>防範二：HTML特殊符號轉換成代碼(用htmlspecialchars)</h2>
			<?php
			$str_1 = htmlspecialchars($_GET[input_1], ENT_QUOTES);
			echo '第一個輸入: '.$str_1.'<br><br>';
		?>
	</div>
</body>
</html>