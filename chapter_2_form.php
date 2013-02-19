<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>表单练习</title>
</head>
<body>
	<form action="chapter_2_handle_form.php" method="post">
		<fieldset>
			<legend>在下面的表单中输入你的信息</legend>
			<p><b>姓名 : </b><input type="text" name="name" size="20" maxlength="40"/></p>
			<p><b>邮箱 : </b><input type="text" name="email" size="40" maxlength="60"/></p>
			<p><b>性别 : </b><input type="radio" name="gender" value="M"/>男<input type="radio" name="gender" value="F"/>女</p>
			<p><b>年龄 : </b><select name="age">
							<option value="0-29">30以下</option>
							<option value="30-60">30到60之间</option>
							<option value="60-">60以上</option>
							</select></p>
			<p><b>评论 : </b><textarea name="comments" rows="3" cols="40"></textarea></p>
		</fieldset>
		<div align="center">
			<input type="submit" name="submit" value="处理" />
		</div>
	</form>
</body>
</html>