<?php

echo $name1=$_POST['name'];
echo $roll_no1=$_POST['roll'];
echo $address1=$_POST['address'];
echo $phone1=$_POST['phone'];
echo $image1=$_FILE['file']['name'];

$con= mysqli_connect('localhost','root','root','student_registration');
if(!$con)
{
	die ("CONNECTION FAIL").mysqli_connect_error($con);

}
else
{
	echo 'connected successful';
}	

	
echo $sql= "INSERT INTO s_registration (name,roll,address,phone,image) VALUES ('$name1','$roll_no1','$address1','$phone1','$image1')";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count>0)

{
	echo "table updated";

}
else
{
	echo "fail to update table";
}

?>
