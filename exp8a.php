<!DOCTYPE HTML>
<html>
<head>
<body>
	<style>
		table,td,th
		{
			width:35%;
			text-align: center;
			background-color: DarkGray;
			border:1px solid black; 
		}
		table{margin:auto;}
		input,p{text-align:right;}
	</style>
</head>
<form method="post";>
<caption><h1>SIMPLE CALCULATOR</h1></caption>
<table>
	<tr>
		<td>First number</td><td><input type="text" value="num1"/></td>
		<td colspan="2"><input type="submit" name="submit" value="calculate";/></td>

	</tr>
	<tr>
		<td>Second number</td><td><input type="text" value="num2"/></td>
	</tr>
</form>
</table>
<?php
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];

	if(is_numeric($num1) and is_numeric($num2))
	{
		echo "<tr><td>Addition:</td><td colspan='2'<p>".($num1+$num2)."</p></td>";
		echo "<tr><td>Subtraction:</td><td colspan='2'<p>".($num1-$num2)."</p></td>";
		echo "<tr><td>Multiplicationtion:</td><td colspan='2'<p>".($num1*$num2)."</p></td>";
		echo "<tr><td>Division:</td><td colspan='2'<p>".($num1/$num2)."</p></td>";
	}
	else
	{
		echo "<script type='text/javascript'> alert ('Enter valid input');</script>";
	}
}
?>
</form>
</body>
</head>
</html>
