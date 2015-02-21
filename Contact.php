<!DOCTYPE HTML>
<html>
<head>
		<meta charset="UTF-8">
		<title> AG | Contact </title>
		<link rel="stylesheet" type="text/css" href="ContactCSS.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$("#contactform").validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 20
					}
				},
				messages: {
					name: {
						required: "Please Enter Your Name",
						minlength: "Your name seems a little too short"
					},
					email: {
						required: "Please Enter Email Address"
						email: "Please enter a valid email address"
					},
					message: {
						required: "Please Enter Your Message"
						minlength: "This message is a bit too short. Enter at least 20 characters"
					}
				}
			});
		});
		</script>
	</head>
	<body>
		<div class="container">
			<header>
    <div id = "header-content">
        <a id="return" href="file:///Users/Andrew/Desktop/Codes/My%20Website/MyWebsite.html"> Andrew Garrison </a>
    <div id="nav">
      <ul>
        <li><a href="">Contact</a></li>
        <li><a href="#home">About</a></li>
        <li><a href="#news">Resume</a></li>
        <li><a href="#contact">Projects</a></li>
        <li><a href="file:///Users/Andrew/Desktop/Codes/My%20Website/Blog.html">Blog</a></li>
      </ul>
    </div>
    </div>
  </header>
			<h1>Contact Me</h1>
			
					<input type="text" name="name" value="<?php echo (isset($name) ? $name : ""); ?>" placeholder="Your Name">
					<input type="email" name="email" value="<?php echo (isset($email) ? $email : ""); ?>" placeholder="Your Email">
					<textarea name="message" placeholder="Your Message"><?php echo (isset($message) ? $message : ""); ?></textarea>
				</form>
			</div>
		</body>
		</html>
