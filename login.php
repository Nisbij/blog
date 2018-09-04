<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "","register") or die('Error connecting to database'); 

	@$user=$_POST['username'];
	@$pass=$_POST['password'];

	$sql="SELECT id FROM signup WHERE username='$user' and password='$pass'";
	

	$query= mysqli_query($conn, $sql) or die('Error firing the query');
	$num= mysqli_num_rows($query);

	if( $num==1){
		$_SESSION['login_user']=$user;
		header("location:mainpg.php");

	}else{
		$error= "Your username or password is wrong!";
		echo $error;
	}	

?>