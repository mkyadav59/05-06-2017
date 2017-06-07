<?php

$con=mysqli_connect('localhost','root','root','student_registration');
if(!$con)
{
	die("Error in Connection").mysqli_connect_error($con);
}
else
{
	//echo "connection sucessful";
}
$email=$_POST['email1'];
$sql="select * from s_registration where email='".$email."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
    
     $e="User Already Exists";
}
else
{
      $e="Available !";
    
}

?>
<html>
<body>
<h4 id="em" name="eml"> <?php echo $e ;?> </h4>
</body>
</html>