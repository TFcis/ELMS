<html>
<?php
include_once("../func/sql.php");
sql("DELETE FROM `elms`.`session` WHERE `session`.`cookie` = '".$_COOKIE["ELMScookie"]."'",false);
setcookie("ELMScookie", "", time(), "/");
?>
<head>
<meta charset="UTF-8">
<title>登出-TFcisELMS</title>
<link href="../res/css.css" rel="stylesheet" type="text/css">
</head>
<body Marginwidth="-1" Marginheight="-1" Topmargin="0" Leftmargin="0">
<iframe src="../header.php" width="100%" height="125px" frameborder="0" scrolling="no"></iframe>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="middle" bgcolor="#0A0" class="message">登出中...
		</td>
	</tr>
</table>
<script>setTimeout(function(){location="../";},1000)</script>
</body>
</html>