<?php
echo $name1=$_POST['name'];
echo $roll_no1=$_POST['roll'];
echo $address1=$_POST['address'];
echo $phone1=$_POST['phone'];
echo $email=$_POST['email'];
$con= mysqli_connect('localhost','root','root','student_registration');
if(!$con)
{
	die ("CONNECTION FAIL").mysqli_connect_error($con);
	
}
else
{
	echo "connection successfull";
}


	/*	if (empty($_POST["name"])) 
  		{
    			$nameerr = "Name is required";
  		}

 		if (empty($_POST["roll"])) 
 		{
   				
   				$rollerr = "Roll number is required"; 
 		}
 
  		if (empty($_POST["address"])) 
  		{
  				$addresserr="Address field is also require";
 		}
  		if (empty($_POST["phone"]))
  		{
    			$phoneerr= "Phone number also require";
  		} 
		
  			$email = $_POST["email"];
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    	{
     			$emailerr = "Invalid email format";
   		}

		if ( isset($nameerr) || isset($rollerr) || isset($addresserr) || isset($phoneerr) || isset($emailerr) )
		{
			header("Location:admin_dashboard.php?"."nameerr="$nameerr."rollerr="$rollerr."addresserr="$addresserr."phoneerr="$phoneerr."emailerr="$emailerr);
		}
		else
		{*/


				echo $sql="insert into s_registration(name,roll,address,phone,email) values('$name1','$roll_no1','$address1','$phone1','$email')";
				$result=mysqli_query($con,$sql);
				if($result)

				{
					echo "table updated";
					header('Location: admin_dashboard.php');

				}
				else
				{
					echo "fail to update table";
				}

?>
