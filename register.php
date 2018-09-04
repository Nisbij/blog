<?php

	$conn = mysqli_connect("localhost", "root", "","register") or die(mysqli_err());  

	@$name=$_POST['username'];
	@$pass=$_POST['password'];
	@$cpassword=$_POST['cpassword'];
	
	$sql="INSERT INTO `signup` (`username`, `password`, `cpassword`) VALUES ('".$name."', '".$pass."', '".$cpassword."')";
	if(mysqli_query($conn, $sql)){  
 		echo "Record inserted successfully";  
 		header("location:Login 01.html");
	}else
	{  
		echo "Could not insert record: ";  
	}	
?>
