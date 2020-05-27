<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <script src="js/skel.min.js"></script>
  <script src="js/jquery.min.js"></script>
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
		<a href="index.html" class="link primary">Home</a>
		<a href="login.php" class="link pad-after primary">Login</a>
 </nav>
	</header>
 <div class="slide" id="work">
	 <article class="page work">
		 <div class="inner">
			<header class="major">
				<style media="screen">
				header.major h2 {
	margin: 0 0 0 90px;
	
	background: #fff;
	display: inline-block;
	padding: 0 0.75em;
}#header nav a.pad-after {
    margin-right: 1.5em;
}
				</style>
		<h2>Register</h2>
	</div>
		</header>

	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>

</div>
</article>
</div>
</div>
</body>
</html>
