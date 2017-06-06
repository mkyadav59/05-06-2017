<?php
session_start();
if(!array_key_exists('id', $_SESSION))
{
		header('Location:admin.html');
}
echo "<center><u><span style='color:blue'>Welcome ".$_SESSION['id']."</span></u></center>";
echo '<a href="logout.php">LOGOUT</a>';
$con= mysqli_connect('localhost','root','root','student_registration');




if(!$con)
{
	die ("CONNECTION FAIL").mysqli_connect_error($con);

}
else
{
	//echo 'connected successful';
}
$sql="select * from s_registration";

$result=mysqli_query($con,$sql);
?>




<html>
<body style="background-image:url('001-wood-melamine-subttle-pattern-background-pat.jpg')";>

<style>
table, td, th {
    border: 1px solid black;
				}

table 
{
    	border-collapse: collapse;
    width: 80%;
	}

</style>
<br>
<br>

			
	<td><a href="insert_student.html?id=<?php echo  $row['id'] ?>" style="text-decoration:none;color:black"><button type="button" style="width:150px;height:50;color:green;text-align:center"><h1>Insert</h1></button></a></td>
	<center><h2 style="color:brown">STUDENT RECORD</h2></center>
	<center>
	

	<table  border: 1px solid black;>
  	<tr>
     <th>ID</th>
     <th>NAME</th>
    <th>ROLL NUMBER</th>
      <th>ADDRESS</th>
     <th>PHONE NUMBER</th>
     <th>EMAIL</th>
     <th>DELETE</th>
     <th>UPDATE</th>

    </tr>

</body>
</html>





<?php
	while($row=mysqli_fetch_assoc($result))
	{
	?>
		<tr>
			<td>
			<?php echo $row['id']; ?>
			</td>
	
			<td>
				<?php echo $name = $row['name']; ?>
			</td>

			<td>
				<?php echo $roll = $row['roll']; ?>
			</td>

			<td>
				<?php echo $address = $row['address']; ?>
			</td>

			<td>
				<?php  echo $phone = $row['phone']; ?>
			</td>

			<td>
				<?php echo $image = $row['email']; ?>
			</td>
		<td><a href="delete.php?id=<?php echo  $row['id'] ?>" style="text-decoration:none;color:red"><button type="button" id="up" style="color:red">Delete</button></a></td>
		<td><a href="update.php?id=<?php echo  $row['id'] ?>" style="text-decoration:none;color:blue"><button type="button" id="up" style="color:green">Update</button></a></td>
	</tr>
<?php		
} 
?>

</table>

</center>