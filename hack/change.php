<!DOCTMPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title> 全新手机预约 </title>
</head>
 <body>
 <form action="" method="POST"> 
姓    名 <input size="20" name="name" value="<?php echo @$_POST['name']; ?>"><br>
 地    址 <input size="20" name="addr" value="<?php echo @$_POST['addr']; ?>"><br> 
电话号码 <input size="20" name="tel" value="<?php echo @$_POST['tel']; ?>"><br> 
型    号 <input size="10" name="kind" value="<?php echo @$_POST['kind']; ?>"> 
数    量 <input size="5" name="num" value="<?php echo @$_POST['num']; ?>"> <br>
 <input type=submit value=" 申请 ">
</form>
 </body>
 </html>
