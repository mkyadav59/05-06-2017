<?php
	$tid=$_POST['admin_id'];
	$tpass=$_POST['admin_pass'];
	$encryptedpassword = md5($tpass);
	session_start();

$con= mysqli_connect('localhost','root','root','admin_db');
if(!$con)
{
	die ("CONNECTION FAIL").mysqli_connect_error($con);

}
else
{
	//echo 'connected successful';
}

$sql="select * from admin where admin_name='$tid' and password='$encryptedpassword'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
	$_SESSION['id']=$_POST['admin_id'];
	header('Location:admin_dashboard.php');

}
else
{	
	echo "<span>fail login</span>";
}

?>