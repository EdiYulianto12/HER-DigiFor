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
	<table align="center">
		<tr>
			<td colspan="2" align="CENTER"> Log Pada Server Apache</td>
		</tr>
		<tr>
			<td width="30%">Pilih Jenis File </td>
			<td width="70%">
			<select name="filenya" id="filenya">
				<option value="Access">Access</option>
				<option value="Error">Error</option>
				
			</select>
			</td>
		</tr>
		<tr>
			<td> <input type="submit" name="bcek" id="bcek" value="submit"></td>
		</tr>
	</table>
	</form></td>
</table>
</body>
</html>
<?php 	
if(isset($_POST['filenya'])){
$filenya='C:\xampp\Apache\logs/' .$_POST['filenya'].'.log';
$data= file($filenya);
var_dump($data);
echo "<br><br>";

}
 ?>
