<?php
	$page_title = '计算';
	include './chapter_3_page_header.inc.html'; 
?>

<div>
	<p>aaaaaaaaaaa
</div>

<?php
	global $var;
	
	function make_calendar_pulldowns($name = NULL, $values = NULL, $selected_key = NULL) {
		if (!isset($name)) {
			return ;
		}
		if (!is_array($values)) {
			return ;
		}
		echo '<select name="'.$name.'">';
		foreach ($values as $key => $value) {
			echo '<option value="'.$key.'"';
			if ($key == $selected_key) {
				echo ' selected="selected"';
			}
			echo '>'.$value.'</ option>';
			echo '<br />';
		}
		echo '</ select>';
		echo '<br />';
	}
	
	function make_calendar_items($begin = 1, $end = 1, $suffix = NULL) {
		$_items = array();
		for ($index = $begin; $index < $end; $index++) {
			$_items[$index] = ''.$index.$suffix; 
		}
		return $_items;
	}
	
	/*
	 * PRC	中华人民共和国
	 * Asia/Shanghai	亚洲/上海
	 * Europe/Paris	欧洲/巴黎
	 */
	date_default_timezone_set('PRC');
	$_date = getdate();
	make_calendar_pulldowns('month', make_calendar_items(1,12,'月'), $_date['mon']);
	make_calendar_pulldowns('day', make_calendar_items(1,30,'日'), $_date['mday']);
	make_calendar_pulldowns('year', make_calendar_items(1980,2100,'年'),  $_date['year']);
?>

<?php
	include './chapter_3_page_footer.inc.html'; 
?>