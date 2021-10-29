<?php 
session_start(); 
// 会话开始 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title> 请登录 </title>
</head>
<body>
<form action="session2.php" method="POST">
用户名 <input type="text" name="ID"><br>
密码 <input type="password" name="PWD"><br>
<input type="submit" value=" 登录 ">
</form>
</body>
</html>
