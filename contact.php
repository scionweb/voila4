<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body>



<div id="container">
	<div id = "header">
		<h1 id="logo">VOILA</h1>
		<h2 id="motto">streamline your look with style and <span class="red">grace</span></h2>
		<div id="nav">
		<ul>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#photo">Photography</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#movie">Movie Wardrobe</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#personal">Personal Stylist</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#album">Photo Album</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#contact">Contact Grace</a></li>		
		</ul>
		</div><!-- end Nav -->
	</div>
	<div id="thanks">
			<img src="images/red-lady2.png" class="flt-left">
			<h1>Thank You!</h1>
			<br />
			<!-- <p>Your information has been submitted and you should hear from me within 48 hours.</p>
			<br /> -->
			<?php 
				$to = "grace.voila@gmail.com";
				$subject = "Request for information.";
				$message = "";
				$from = $_REQUEST['email'];
				$headers = "From: $from";
				$block = $_REQUEST['block'];
				
				if ($block) die;
				
				foreach ($_POST as $key => $value) {
					$message.=$key . ": " . $value . "\n";
				}

				$sm = mail($to, $subject, $message, $headers);				

				if (!$sm) {
					print "A problem occured. Please try again later. 
					If the problem persists, please call me at 978.430.9889.";
				}

				else {
					print "Your request for information has been submitted. 
					You should hear from me within 48 hours. If you need to reach me sooner, just give me a call at 978.430.9889.";
				}
			

				?>

				<br /><br />

			<h2 class="red">grace</h2>

	</div><!--end Thanks -->
	<div id = "footer">
	&copy; 2013 Voila
	</div><!--end Footer -- >
</div><!--end container -->

</body>
</html>