<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>XYZ Company | <?php echo $this->title; ?></title>
	<?php
		foreach ($this->stylesheets as $stylesheet) {
			echo '<link href="' . $stylesheet . '" rel="stylesheet">' . "\n";
		}
	?>
</head>
<body>
	<div style="text-align: center;">
		<div class="container">
			<div id="header">
				<span id="cname">XYZ Company</span>
				<ul id="nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>

			<img src="images/blockimage.jpg" alt="Block Image">

			<?php echo $this->body; ?>

			<div id="copyright">&copy; Copyright 2008 XYZ Company. All rights reserved.</div>
		</div>
	</div>

	<?php
		foreach ($this->javascripts as $javascript) {
			echo '<script src="' . $javascript . '></script>' . "\n";
		}
	?>
</body>
</html>