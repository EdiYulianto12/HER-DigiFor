<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Log Server</title>
</head>
<body>
<table>
	<tr>
		<td><form id="form1" name="form1" method="post" action="">
	</tr>
	<p align="center" style="font-size: 30px; font-family: sans-serif;">Log Server Pada Aplikasi Saat Login Pada Aplikasi Ini</p>
	<table align="center" style="font-size: 20px; background-color: lightgoldenrodyellow; ">
		
		<tr style="font-size: 20px; background-color: lightgoldenrodyellow;">
			<td width="30%">Pilih Jenis File </td>
			<td width="70%">
			<select name="filenya" id="filenya">
				<option value="logharian2022-08-10"style="font-size: 20px; background-color: lightgoldenrodyellow;"><p style="font-size: 20px; background-color: lightgoldenrodyellow;">Log Harian</option></p>
				<option value="logbulanan2022-08" style="font-size: 20px; background-color: lightgoldenrodyellow;"><p style="font-size: 20px; background-color: lightgoldenrodyellow;">Log Bulanan</option></p>
				
			</select>
			</td><br>	<br>
		</tr>
		<tr align="center">
			<td > <input type="submit" name="bcek" id="bcek" value="submit" align="center" style="font-size: 20px; background-color: lightblue;"></td>
		</tr>
	</table>
	</form></td>
</table>
</body>
</html>
<?php 	
if(isset($_POST['filenya'])){
$filenya='C:\xampp\htdocs\HER Digital Forensik/log/' .$_POST['filenya'].'.log';
$data= file($filenya);
var_dump($data);
echo "<br><br>";

}
 ?>
