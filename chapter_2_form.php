<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>����ϰ</title>
</head>
<body>
	<form action="chapter_2_handle_form.php" method="post">
		<fieldset>
			<legend>������ı������������Ϣ</legend>
			<p><b>���� : </b><input type="text" name="name" size="20" maxlength="40"/></p>
			<p><b>���� : </b><input type="text" name="email" size="40" maxlength="60"/></p>
			<p><b>�Ա� : </b><input type="radio" name="gender" value="M"/>��<input type="radio" name="gender" value="F"/>Ů</p>
			<p><b>���� : </b><select name="age">
							<option value="0-29">30����</option>
							<option value="30-60">30��60֮��</option>
							<option value="60-">60����</option>
							</select></p>
			<p><b>���� : </b><textarea name="comments" rows="3" cols="40"></textarea></p>
		</fieldset>
		<div align="center">
			<input type="submit" name="submit" value="����" />
		</div>
	</form>
</body>
</html>