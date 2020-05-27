<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<a href="register.php" class="link pad-after primary">Sing In</a>
 </nav>
 	</header>
 <div class="slide" id="work">
	 <article class="page work">
		 <div class="inner">
    	<header class="major">
		<h2>Login</h2>
		</header>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>

</div>
</article>
</div>
</div>

</body>
</html>
