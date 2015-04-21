<!DOCTYPE html>
<head>
    <title></title>
</head>

<body>
<?php

session_start();
$user="root";
$r=0;
$email = $_POST["email"];
$password = $_POST['password'];
$con=mysql_connect ('localhost',$user,"");
mysql_select_db('hotel');
$query="select * from signup where email='$email' and password='$password'";
$res=mysql_query($query,$con);



	if($res)
    {
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
$_SESSION['email']=$email;
setcookie("email",$email);
header("Location:book.html");

$r=1;
    }
}
if($r==0)
{
	echo "<h3>please check username and password</h3>";
}

?>
    </body>
</html>
