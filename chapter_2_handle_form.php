<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>�����</title>
</head>
<body>
<?php
	 $name = $_REQUEST['name'];
	 $email = $_REQUEST['email'];
	 $comments = $_REQUEST['comments'];
// 	 $comments = stripslashes($comments);	//	��zend studio��û�б�Ҫ
	 echo <<< EOT
	  	<p>��л<b>$name</b>����������<br />
		<tt>$comments</tt></p>
		<p>���ǽ�����ظ�����Email $email</p>
EOT;
	 
	 //	if-else
	 $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : NULL;
	 if ($gender == NULL) {
	 	echo '�������������Ա�';
	 } else {
	 	echo '<p><b>ף�����,'.($gender == 'M' ? '����' : 'Ůʿ').'</b></p>';
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