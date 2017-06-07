<?php
	$id=$_GET['id'];
	$con= mysqli_connect('localhost','root','root','student_registration');
	$sql="select * from s_registration where id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
?>

<?php
	if($con)
	{
			//$nameerr= $rollerr= $addresserr = $phoneerr = $emailerr ="";

		if (empty($_POST["name"])) 
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

		}
		else
		{
					
					$name=$_POST['name'];
					$roll=$_POST['roll'];
					$address=$_POST['address'];
					$phone=$_POST['phone'];
					$email=$_POST['email'];
					$id=$_POST['id'];

					$sql="UPDATE s_registration SET name='$name',roll='$roll',address='$address',phone='$phone',email='$email' WHERE id='$id'";
					$result=mysqli_query($con,$sql);
					if($result)
					{
						//echo "updated successfully";
						header('Location:admin_dashboard.php');
					}
			
					else
					{
						echo "fail to update";
					}
				
		}


	}
	else
	{
		die ("CONNECTION FAIL").mysqli_connect_error($con);
	}
?>
<html>
			<head>
			<style>
				table, td, th {
    					border: 1px solid black;
								}

						table {
    							border-collapse: collapse;
    							width: 100%;
    							box-shadow:10px 10px 5px orange;
								}
						</style>
			</head>
			<body>
					<center><div style="background-image:url('001-wood-melamine-subttle-pattern-background-pat.jpg');width:600px;height:auto">
					<h3>Update User</h3>	
	
					<form method="post" action="" method="post" name="nm"> 
		   			<center>
           			<table>
					<tr>
						<td><label>Name*:</label></td><td><input type="text" name="name" placeholder="enter name" value="<?php echo $row['name']; ?>"/><br></td><td style="border:none"><span class="error"><?php echo $nameerr;?></span></td>
					</tr>


					<tr>
						<td><label>Roll_No*:</label></td><td><input type="text" name="roll" placeholder="enter roll no" value="<?php echo $row['roll']; ?>"/><br></td><td style="border:none"><span class="error"><?php echo $rollerr;?></span></td>
					</tr>

					<tr>
						<td><label>Address*:</label></td><td><input type="text" name="address" placeholder="enter address" value="<?php echo $row['address']; ?>"/><br></td><td style="border:none"><span class="error"><?php echo $addresserr;?></span></td>
					</tr>

					<tr>
						<td><label>Phone Number*:</label></td><td><input type="text" name="phone" placeholder="enter phone number" value="<?php echo $row['phone']; ?>"/><br></td><td style="border:none"><span class="error"><?php echo $phoneerr;?></span></td>
						<input type="hidden" name="id" value="<?php echo $id;?>"/>
					</tr>

					<tr>
						<td><label>Email Id*:</label></td><td><input type="email" name="email" value="<?php echo $row['email']; ?>"placeholder="enter email"/></td><td style="border:none"><span class="error"><?php echo $emailerr;?></span></td>           
					</tr>

					<tr>
						<td style="border:none"><center><input type="submit" value="submit" name="update"></center></td>
					</tr>
			</table>
		</center>
		</fieldset>
	</form>
</div>
</center>

	<!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script>
	$(function() {
   $("form[name='nm']").validate({
    
				    rules: {
				      		name:"required",

				      		roll:{
        
       						 	minlength:3,
        						required:true
      							
      							},

      							address:"required",

      							phone: {
       								 required:true,
       								 number:true,
       								 maxlength:10,
        							minlength:10
        						},
     						 
        						email:"required"
				   			},


				    messages:
				     {
				    	
				    	name:"Please enter the name",
				    	roll:{
				    			required:"Please enter password",
				    			number:" Please enter number"
				    		  },	
								address:"Please enter the address",

				       			phone:{
				       					 required:"Please enter a contact number",
        						 		 number:"Please enter a valid number",
       							         maxlength:"Maxlength is 10",
       							         minlength:"Minlength is 10"

				       					},


				       		email:"Please enter valid email id",
				    },
				    
				    submitHandler: function(form) {
				      form.submit();
				    }
  										});
});

</script>

-->
</body>
</html>






