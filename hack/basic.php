﻿<?php 
$user = @$_SERVER['PHP_AUTH_USER']; 
$pass = @$_SERVER['PHP_AUTH_PW'];
if (! $user || ! $pass) 
{
header('HTTP/1.1 401 Unauthorized'); 
header('WWW-Authenticate: Basic realm="Basic Authentication Sample"');
echo " pleas put your accout and password ";    
exit; 
} 
?>
<body>
 已通过认证 <br>
 用户名 :<?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?> <br>
 密码 :<?php echo htmlspecialchars($pass, ENT_NOQUOTES, 'UTF-8'); ?> <br>
</body>