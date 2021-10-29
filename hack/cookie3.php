<?php
$name = @$_POST['name'];
$mail = @$_POST['mail']; 
$gender = @$_POST['gender'];  
// 下面开始处理 ?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title> 注册成功 </title>
</head>
<body> 
姓名 :<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><br> 
邮箱地址 :<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?><br>
 性别 :<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><br>
 已注册 </body>
</html>
