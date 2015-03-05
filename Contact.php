<?php

if($_POST["submit"]) {
    $recipient="agarrison15@ymail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="Contact.js"></script>
  <link href ="ContactCSS.css" rel="stylesheet">
  <link href="css/hover.css" rel="stylesheet" media="all">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300|Abel|Dosis:300,400,700' rel='stylesheet' type='text/css'>
		<title> Contact </title>
<link rel="icon" type="image/png" href="Images/Favicon.png">
</head>
<body>
		<header>
<a id="menu-icon"><img id="navOpacity" src="Images/NavIcon.png"></a>
<nav>
<div id = "header-content">
        <a id="return1" href="index.html"><img src="Images/home-icon.png"></a> 
    <a id="mobileNav"><img src="Images/mobileNav.jpeg"></a>
        <a id="return" href="index.html"> Andrew Garrison </a> 
        <h5 id="webTitle">Andrew Garrison</h5>
        <div id="nav">
  <ul>
    <li><a id="blue" href="About.html">About</a></li>
    <li><a id="green" href="Projects.html">Projects</a></li>
    <li><a id="orange" href="Blog.html">Blog</a></li>
    <li><a id="yellow" href="Resume.html">Resume</a></li>
    <li><a id="grey" href="Contact.html" class="current">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<script>
$(document).ready(function() {
    // trigger the function when clicking on an assigned element
    $("#menu-icon, #mobileNav").click(function() {
      $("#nav").toggle("25ms");
    });
$(window).resize(function(){

       if ($(window).width() >= 1055) {  

          $("#nav").show();

       } else {
        
          $("#nav").hide();
       
       }
});
});
</script>
</header>
<div id="banner">
  	<form id="myForm">
			<h1>Contact Me</h1>
				<form class="cmxform" id="commentForm" method="get" action="">
    <p>
      <label for="cname">Name</label>
      <input id="name" name="name" minlength="2" type="text" required>
    </p>
    <p>
      <label for="cemail">E-Mail</label>
      <input id="email" type="email" name="email" required>
    </p>
    <p>
      <label for="ccomment">Your Message</label>
      <textarea id="message" name="message" required></textarea>
    </p>
    <p>
      <input class="submit" type="submit" value="Submit">
    </p>
</form>
<?=$thankYou ?>
<script>
$("#commentForm").validate();
</script>
			</div>
			</div>
			</div>
		</body>
		</html>
