<html>
<?php
include_once("func/checklogin.php");
?>
<head>
<meta charset="UTF-8">
<title>頁首-TFcisELMS</title>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
  	<td width="50%" height="100" align="center" valign="middle" bgcolor="#F0F0F0" style="font-weight: bold;">
		<span style="font-size: 36px; color: #888;">E-</span><span style="font-size: 36px">LM</span><span style="font-size: 36px; color: #888;">S</span>
		<br>
		<span style="color: #999">E-Library Management System</span><br>
		<span style="color: #999">電子化圖書管理系統</span>
	</td>
    <td width="100%" bgcolor="#F0F0F0" style="text-align: right" colspan="2"><img src="http://www.tfcis.org/images/TFcisweb3_03.gif"height="100px"></td>
  </tr>
  <tr>
    <td width="50%" height="25" valign="middle" bgcolor="#0000FF" style="color: #FFF">
    	&nbsp;&nbsp;&nbsp;&nbsp;<a href="./" target="_parent" style="color:#FFF" >首頁</a>&nbsp;|&nbsp;<a href="./search" target="_parent" style="color:#FFF">館藏查詢</a>&nbsp;|&nbsp;<a href="./user" target="_parent" style="color:#FFF">讀者資料查詢</a>
    </td>
    <td width="50%" height="25" valign="middle" bgcolor="#0000FF" style="text-align: right; color: #FFF;">
    	<?php 
		$islogin=checklogin();
		if($islogin==false){
		?>
		<a href="login" target="_parent" style="color:#FFF">登入</a>
		<?php
		}
		else{ echo "目前登入: ".$islogin[1]."(".$islogin[4].")";
		?>
		<a href="logout" target="_parent" style="color:#FFF">登出</a>
		<?php
		}
		?>
		&nbsp;&nbsp;
    </td>
  </tr>
</table>
</body>
</html>