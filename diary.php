<?php

	$conn = mysqli_connect("localhost", "root", "","register");  

	@$title=$_POST['title'];
	@$desc=$_POST['desc'];
	
	$sql="INSERT INTO `diary` (`title`, `description`) VALUES ('".$title."', '".$desc."')";
	if(mysqli_query($conn, $sql)){  
 		echo "Record inserted successfully";  
 		header("location:mainpg.html");
	}else
	{  
		echo "Could not insert record: ". mysqli_error($conn);  
	}	
?>