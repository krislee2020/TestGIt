<?php
$name = @$_POST['name'];
$mail = @$_POST['mail'];
$gender = @$_POST['gender']; 

if(isset($_POST))
{
        $time = time();
        setcookie('user', $name, $time+3600);  // 时间参数需要比当前时间点大，以表示cookie信息的有效时间
        setcookie('mail', $mail, $time+1200);  // 可以存放各种数据 
}
?>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>确认</title>
</head>
<body>

姓名 :<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><br>
邮箱地址 :<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?><br> 
性别 :<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><br> 
<form action="cookie3.php" method="POST">

<input  name="name"    value="<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>"><br> 
<input  name="mail"      value="<?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?>"><br> 
<input name="gender"  value="<?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?>"><br>
<input type="submit" value=" 注册  "> 
</form> 
</html>
