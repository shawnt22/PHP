<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>数组练习</title>
</head>
<body>
	<form action="chapter_2_handle_form.php" method="post">
<?php
	//	数组
	$array[] = 1;
	$array[] = '2';
	$array2[] = 'a';
	$array[] = $array2;
	echo '多维数组 : '.$array[2][0].'<br />';
	
	$array3 = array('x'=>'a','b',6=>'c',2=>'d','6'=>'e',4=>'f','g','h',10=>'i');
	echo $array3[7];
	foreach ($array3 as $key => $value)
	{
		echo '<br />'.$key.' => '.$value;
	}
	echo '<br />数组个数 : '.count($array3);
	
	//	日期练习
	$years = range(1970, 2013);
	$months = array(1=>'一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
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