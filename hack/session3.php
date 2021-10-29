<?php  
session_start();
// 会话开始  
$id = $_SESSION['ID'];
$pwd = $_SESSION['PWD']; 
if ($id == '') {
die(' 请登录 ');  } ?>
<html>
<head>
<title> 我的账号 </title>
</head>
<body>
 用户名 :<?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?><br>
 密码 : <?php echo htmlspecialchars($pwd, ENT_NOQUOTES, 'UTF-8'); ?><br>
 </body>
</html>
