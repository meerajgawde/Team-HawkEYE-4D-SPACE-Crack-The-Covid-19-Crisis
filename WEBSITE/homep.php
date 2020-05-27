<?php
	include('functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
	<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
							<?php endif ?>
       <?php  if (isset($_SESSION['user'])) : ?>

      	<?php endif ?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script src="js/skel.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.slidertron.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/jquery.nicescroll-modified.min.js"></script>
	<script src="https://kit.fontawesome.com/48fce30c92.js" crossorigin="anonymous"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
</head>
<body>
	<div class="container" id="wrapper">
		<header id="header">
	<nav>
		<a href="index.html" class="primary">Home</a>
		<a href="new.php?logout='1'" style="color: red; float: right; font-size:20px;">logout</a>
		<a href="new.php"style="color: green; " id="b" class="link ">Make Transportaion Request</a>
	</nav>
	</header>
		<div class="slide" id="work">
			<article class="page work">
				<div class="inner">

</style>


				 <?php
				 $servername = "localhost";
				 $username = "Root";
				 $password = "toor@&$321";
				 $dbname = "multi_user";

				 // Create connection
				 $conn = new mysqli($servername, $username, $password, $dbname);
				 // Check connection
				 if ($conn->connect_error) {
				   die("Connection failed: " . $conn->connect_error);
				 }

				 $sql = "SELECT * FROM `transport` WHERE username='$u'";
				 $result = $conn->query($sql);

				 if ($result->num_rows > 0) {
				   // output data of each row
				   while($row = $result->fetch_assoc()) {
				     echo "Transport Type: " . $row["type"]. "<br>Date of departure: " . $row["date"]. "<br>Time of departure: " . $row["date"]. "  <br>         Destination: " . $row["location"]. "       <br>    Motive:" . $row["motive"]. "        <br>  Status:" . $row["Status"]. "<br><br>";
				   }
				 } else {
				   echo "It seems you have not made any requests yet <a href='new.php'>click here to make request</a>";
				 }
				 $conn->close();
				 ?>
	</div>
</body>
</html>
