<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>处理表单</title>
</head>
<body>
<?php
	 $name = $_REQUEST['name'];
	 $email = $_REQUEST['email'];
	 $comments = $_REQUEST['comments'];
// 	 $comments = stripslashes($comments);	//	在zend studio中没有必要
	 echo <<< EOT
	  	<p>感谢<b>$name</b>发来的评论<br />
		<tt>$comments</tt></p>
		<p>我们将尽快回复您的Email $email</p>
EOT;
	 
	 //	if-else
	 $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : NULL;
	 if ($gender == NULL) {
	 	echo '您忘记输入了性别';
	 } else {
	 	echo '<p><b>祝您愉快,'.($gender == 'M' ? '先生' : '女士').'</b></p>';
	 }
	 
	 //	switch-case
// 	 $var = 2;
// 	 echo '<br />';
// 	 switch ($var) {
// 	 	case 'M':
// 	 		echo 'switch M';
// 	 	break;
// 	 	case 1:
// 	 		echo 'switch 1';
// 	 	break;
// 	 	default:
// 	 		echo 'switch default';
// 	 	break;
// 	 }
?>
</body>
</html>