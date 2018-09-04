











<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<link rel="stylesheet" type="text/css" href="css/mainpg.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie ">
	 <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
</head>
<body>

	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
            


	<form action="mainpg.php" method="post">
	
	<!--The cover photo-->	
	<div class="coverphoto"><img src="css/Resources1/bg.21.png" style="padding-top: 80px;padding-left: 550px;" ></div>
	


	<!--Fixed action button-->
	<div class="fixed-action-btn">
	<a href="diary.html" class="btn-floating red btn-large"><i class="large material-icons">add</i></a>
		<ul>
		<li><a href="diary.html" class="btn-floating yellow btn-large"><i class="large material-icons">mode_edit</i></a>
		</li>	
		</ul></div>


	
		<img src="css/resources1/bg.22.png" style="padding-top:45%;padding-left:50%; ">
		<img src="css/Resources1/bg.23.png" style="padding-top: 5%;padding-left: 65%; height: 200px;">
		<img src="css/Resources1/bg.19.png" style="padding-top: 20%;padding-left: 57%;">
	<div class="photo">
		<img src="css/Resources1/bg.24.jpg" style="padding-top: 20px;padding-left: 10px; border-radius: 100% 100% 100% 100%; height: 300px;width: 300px;">
		<img src="css/Resources1/bg.17.jpeg" style="padding-left: 100px; border-radius: 20px 20px 20px 20px;">
		<img src="css/Resources1/bg.25.png" style="padding-left: 100px;height: 200px;width: 200px;">
		<img src="css/Resources1/bg.26.jpg" style="padding-left: 100px;">	
	</div>

	<img src="css/Resources1/bg.27.png" style="padding-top: 55%;padding-left: 50%;">
	<img src="css/Resources1/bg.28.png" style="padding-top: 10px;padding-left: 60%; ">
	<div class="eyes">
		<img src="css/Resources1/bg.29.png" >
		<img src="css/Resources1/bg.30.png" style="padding-left: 30px;">
	</div>
	<img src="css/Resources1/bg.31.png" style="padding-top: 35%;padding-left: 65%;">
	<img src="css/Resources1/bg.32.png" style="padding-top: 10px;padding-left: 65%;">
	<div class="diary_entry"><div class="diary_edit">


		<!--CONTAINER-->



		<?php
	$conn = mysqli_connect("localhost", "root", "", "register" ) or die("The database is not connected");

	$sql="SELECT * FROM diary";
	$query=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		$title=$row['title'];
		$description=$row['description'];
		echo $title;
		echo "<br>";
		echo $description;
		echo "<br>";
		echo "<br><br><br>";
		
	}
	
?>
		</div>
		</div>
	</form>
	
</body>
</html>
