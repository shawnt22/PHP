<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>������ϰ</title>
</head>
<body>
	<form action="chapter_2_handle_form.php" method="post">
<?php
	//	����
	$array[] = 1;
	$array[] = '2';
	$array2[] = 'a';
	$array[] = $array2;
	echo '��ά���� : '.$array[2][0].'<br />';
	
	$array3 = array('x'=>'a','b',6=>'c',2=>'d','6'=>'e',4=>'f','g','h',10=>'i');
	echo $array3[7];
	foreach ($array3 as $key => $value)
	{
		echo '<br />'.$key.' => '.$value;
	}
	echo '<br />������� : '.count($array3);
	
	//	������ϰ
	$years = range(1970, 2013);
	$months = array(1=>'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����');
	$days_31 = range(1, 31);
	$days_30 = range(1, 30);
	$days_28 = range(1, 28);
	$days_29 = range(1, 29);
	
	echo '<select name="year"/>';
	foreach ($years as $k_year => $v_year)
	{
		echo '<option value="'.$k_year.'">'.$v_year.'</option><br/>';	
	}
	echo '</select>';
	
	echo '<select name="month"/>';
	foreach ($months as $k_month => $v_month)
	{
		echo '<option value="'.$k_month.'">'.$v_month.'</option><br/>';
	}
	echo '</select>';
	
	echo '<select name="day"/>';
	foreach ($days_31 as $k_day => $v_day)
	{
		echo '<option value="'.$k_day.'">'.$v_day.'</option><br/>';
	}
	echo '</select>';
?>
	</form>
</body>
</html>