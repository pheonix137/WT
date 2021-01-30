<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
<style>
p {
color:white;
font-size:90px;
position: absolute;
top: 20%;
left: 5%;
transform: translate(50%, 50%);
}
body
{background-color:black;}
</style>
</head>
<body>
<p> <?php 
	date.date_default_timezone_set('Asia/Calcutta');
echo date(" h: i : s A");?> </p>
</body>
</html>
