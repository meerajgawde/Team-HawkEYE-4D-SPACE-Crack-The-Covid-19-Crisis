<?php
	include('functions.php');
    session_start();
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


<?php
$servername='localhost';
$username='Root';
$password='toor@&$321';
$dbname = "multi_user";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
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
		<a href="index.html" class="pimary">Home</a>
		<a href="index.html" class="link">User- <?php $u=$_SESSION['user']['username'] ;echo $_SESSION['user']['username']; ?></a>
		<a href="new.php?logout='1'" style="color: red; float: right;">logout</a>
		
   
	</nav>
	</header>
		<div class="slide" id="work">
			<article class="page work">
				<div class="inner">

						 <h2>Products Ordering</h2>
						 <p>Click on the button at the bottom of this page to open the Ordering Form.</p>
						 <p>After ordering you will get conformation mail and you can pick-up order on your desired time</p>

						 <button class="open-button" onclick="openForm()">Open Form</button>

						 <div class="form-popup" id="myForm">
			              <form method="post" action="new.php" class="form-container>
						     <h1>Oreder Details</h1>
                                <label for="input">Input product name</label>
                               <input type="text" name="p"><br>
                                <label for="input">Date:</label>
                                <input type="date" name="dd"><br>
                                <label for="input">Time of pickup:</label>
                                <input type="text" name="ti"><br>
                                <label for="input">location:</label>
                                <input type="text" name="lo"><br>
                                <label for="input">Shop name</label>
                                <input type="text" name="s"><br>
 			 						 <button type="submit" name="save" value="submit" class="btn">Submit</button>
						     <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
						   </form>
						 </div>
						 
		                 <a href="homep1.php"style="color: green; " id="b" class="link "><br>Order Details</a>
						 <h2><br>Apply for Transportaion</h2>
						 <p>Click on the button at the bottom of this page to open the Transportaion Form.</p>
						 <p>After apply you will get conformation mail and you can wait for your conformation mail.</p>

						 <button class="open-button" onclick="openForm1()">Open Form</button>
						 <div class="form-popup" id="myForm2">
					
							<form method="post" action="new.php" class="form-container">
						     <h1>Transportaion details</h1>
                                <label for="input">Transport type</label>
                               <input type="text" name="p"><br>
                                <label for="input">Date:</label>
                                <input type="date" name="dd"><br>
                                <label for="input">Time:</label>
                                <input type="text" name="ti"><br>
                                <label for="input">location:</label>
                                <input type="text" name="lo"><br>
                                <label for="input">motive</label>
                                <input type="text" name="s"><br>
 			 						 <button type="submit" name="save1" value="submit" class="btn">Submit</button>
						     <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
						   </form>
						 </div>
					
					    <a href="homep.php"style="color: green; " id="b" class="link "><br>Transport Status</a>

						 <script>
						 function openForm() {
						   document.getElementById("myForm").style.display = "inline";
						 }

						 function closeForm() {
						   document.getElementById("myForm").style.display = "none";
						 }
						 function openForm1() {
						   document.getElementById("myForm2").style.display = "inline";
						 }

						 function closeForm1() {
						   document.getElementById("myForm2").style.display = "none";
						 }
						 </script>
				</div>
				</article>
				</div>
				</div>
				 <header class="major">
					 <style media="screen">


				 	  </body>
				 	</html>
					<style>
				
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
#header nav {

}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text],input[type=date],input[type=number], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  margin-bottom:10px;
  opacity: 0.8;
}
#header nav a {
    margin: 0 5.5em 0 -3.5em;
}
header.major {
    /* text-align: center; */
    margin: 0 0 1.5em -4.5em;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
	

<?php
if(isset($_POST['save']))
{
	 $tt = $_POST['p'];
	 $d = $_POST['dd'];
	 $t = $_POST['ti'];
	 $l = $_POST['lo'];
     $m = $_POST['s'];
	 $sql = "INSERT INTO `products`(`username`,`product`, `a`, `b`, `c`, `d`) VALUES ('$u','$tt',$d,$t,'$l','$m')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	      
	      $sql = "SELECT email FROM `users` WHERE username='$u'";
				 $result = $conn->query($sql);

				 if ($result->num_rows > 0) {
				   // output data of each row
				   while($row = $result->fetch_assoc()) {
				       $email= $row["email"];
				       
				      }
		$respond_subject = "Thank you, for Ordering!";

        /* Prepare autoresponder message */
        $respond_message = "Hello!
        
        Thank Using our service! your orders:  $tt Date of pickup:  $d Time of pickup:  $t  Location:  $l  Shop name:  $m has been registered with us
        
        You can pick them up at your registered date and time!

Yours sincerely,

Team Hawkeye.";

mail($email, $respond_subject, $respond_message);
	 } 
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	session_end_clean();

	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);
	session_end_clean();
	}
if(isset($_POST['save1']))
{
	 $tt = $_POST['p'];
	 $d = $_POST['dd'];
	 $t = $_POST['ti'];
	 $l = $_POST['lo'];
     $m = $_POST['s'];
	 $sql = "INSERT INTO `transport`(`username`,`type`, date, `time`, `location`, `motive`) VALUES ('$u','$tt',$d,$t,'$l','$m')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		 $sql = "SELECT email FROM `users` WHERE username='$u'";
				 $result = $conn->query($sql);

				 if ($result->num_rows > 0) {
				   // output data of each row
				   while($row = $result->fetch_assoc()) {
				       $email= $row["email"];
				      
				      }
	if (mysqli_query($conn, $sql)) {
		$respond_subject = "Thank you, for requesting transport!";

        /* Prepare autoresponder message */
        $respond_message = "Hello!

        Thank Using our service! your transportation request Transport Type: '$tt' Date of departure: '$d' Time of departure: '$t'  Destination: '$l'  Motive: '$m' has been registered with us
        
        request will be approved as soon as possible!

        Yours sincerely,

        Team Hawkeye.
";

mail($email, $respond_subject, $respond_message);
	 } 
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	session_end_clean();
}
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	mysqli_close($conn);
	session_end_clean();
	}	
?>
