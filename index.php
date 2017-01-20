<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>XSS Sample</title>
	<style type="text/css">
    .hidden{
      position: relative;
      width: 70px;
      height: 35px;
      float: left;
      left: 365px;
      top: 5px;
      z-index: 2;
    }
  </style> 
</head>
<body>
<a class="hidden" href="http://www.google.com/"></a>
<div style="text-align:center; z-index:1;">
	<h1>XSS範例</h1>
	<h2>沒有防護的input</h2>
	<form action="XSS.php">
		第一輸入欄位:<br>
		<input type="text" name="input_1" size="25"><br><br>
		第二輸入欄位:<br>
		<input type="text" name="input_2" size="25"><br><br>
		<input type="submit" value="送出">
	</form>
	<h2>防護一：限制輸入/輸出長度</h2>
	<form action="XSS_protected_1.php">
		限制輸入15字元的欄位:<br>
		<input type="text" name="input_1" size="25" maxlength="15"><br><br>
		限制輸出15字元的欄位:<br>
		<input type="text" name="input_2" size="25"><br><br>
		<input type="submit" value="送出">
	</form>
	<h2>防護二：HTML特殊符號轉換成代碼</h2>
	<form action="XSS_protected_2.php">
		輸入欄位:<br>
		<input type="text" name="input_1" size="25"><br><br>
		<input type="submit" value="送出">
	</form>
</div>
</body>
</html>