<html>
<body style="text-align:center;">
<marque><h2>Hello, Thankyou for visiting the webpage</h2></marque>
Now you are here for
<?php
session_start();
if(!(isset($_SESSION['count'])))
	$_SESSION['count']=0;
else
	$_SESSION['count']+=1;
if($_SESSION['count']==20)
	session_destroy();
echo $_SESSION['count'];
?>
<a href="wtaprog6.html">Press here to move back home</a>
</body>
</html>
