<?php
$del=$_GET['id'];

$con= mysqli_connect('localhost','root','root','student_registration');
if(!$con)
{
	die ("CONNECTION FAIL").mysqli_connect_error($con);

}
else
{
	echo 'connected successful';
}

echo $sql = "DELETE FROM s_registration WHERE id='$del'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count>0)

{
	echo "not deleted";

}
else
{
	echo "deleted successfully";
	header('Location:admin_dashboard.php');
}

?>