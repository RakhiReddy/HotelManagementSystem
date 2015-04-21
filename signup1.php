<!DOCTYPE html>
<html>
<body>
 
<?php


$con=mysql_connect("localhost","root","") or die("Unable to connect to MySql");
$db=mysql_select_db("hotel");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address = $_POST['address'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender = $_POST['gender'];

$query="insert into signup(fname,lname,address,dob,email,password,gender) values ('$fname','$lname','$address','$dob','$email','$password','$gender')";
$res=mysql_query($query,$con);
if($res)
{
    ?>
    <script type="text/javascript">
        alert("account created");
	window.open("userlogin.html");
    </script>
    <?php
}
else
{
	echo "values are not inserted";
}
mysql_close();
?>

</body>
</html>
