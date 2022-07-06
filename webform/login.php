<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sign Up/In Example Form - TREBAS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>Sign In Example Form - TREBAS</h1>
	</div>
	<?php
	if($_REQUEST['error']=='congats'){
		echo '<div style="background-color:powderblue;">';
		echo '	<h1>Congrats, your account was created!</h1>';
		echo '</div>';
	}else if($_REQUEST['error']=='account'){
		echo '<div style="background-color:powderblue;">';
		echo '	<h1>You alredy have a account. Please sing in!</h1>';
		echo '</div>';
	}else if($_REQUEST['error']=='wrong'){
		echo '<div style="background-color:powderblue;">';
		echo '	<h1>Wrong email or password!</h1>';
		echo '</div>';
	}
	?>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign In</h2>
		<div class="sub-main">	
			<form action="validate.php" method="post">
				<input placeholder="Email" name="mail" class="email" type="text" required="">
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
				<input type="submit" value="sign up">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy;  <?php echo date('Y-m-d'); ?> - Flat Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>