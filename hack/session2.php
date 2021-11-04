<?php 
session_start();
// 会话开始  
$id = @$_POST['ID'];  
$pwd = @$_POST['PWD']; 
 // 用户名和密码中任意一项未输入时则登录失败
if ($id == '' || $pwd == '') 
{
	die(' 登录失败 '); 
 }  
$_SESSION['ID'] = $id; 
$_SESSION['PWD'] =$pwd; 
?>
<html>
	<head>
		<title> 登录 </title>
	</head>
		<body> 登录成功 <a href="session3.php"> 我的账号 </a>
		</body>
</html>