
<?php
  $result="";
if(isset($_POST["submit"])){
 require 'phpmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 587;
 $mail->SMTPAuth = TRUE;
 $mail->SMTPSecure = 'tsl';
 $mail->Username = 'sandyurce@gmail.com';
 $mail->Password = 'san@1995';

   $mail->setFrom($_POST["email"],$_POST["name"]);
   $mail->addAddress('sandyurce@gmail.com');
   $mail->addReplyTo($_POST["email"],$_POST["name"]);

 $mail->isHtml(TRUE);
 $mail->Subject = 'Form Submission: '.$_POST["subject"];
   $mail->Body = '<h1 align=center>Name: '.$_POST["name"].' <br>Email: '.$_POST["email"].'<br>Messages: '.$_POST["message"].'</h1>';
   if(!$mail->send()){
       $result="Something went wrong. PLease try again.";
   }else{
   	$result="Thank you ".$_POST["name"]."for contacting us.We will get back to you soon";
   }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baan Banchi - Contact Us</title>
	<link rel="icon" href="images/BBC_icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="external/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="external/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="external/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="external/css/flexslider.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="external/css/owl.carousel.min.css">
	<link rel="stylesheet" href="external/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="external/css/style.css">
	<link rel="stylesheet" href="css/commonstyles.css">
	<link rel="stylesheet" href="css/font-awesome.css">

	<!-- Modernizr JS -->
	<script src="external/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
	

		<div id="colorlib-main">
			
			<div class="colorlib-contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">Get in Touch</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                               <h5 class="text-center text-success"><?= $result; ?></h5>
									<form action="" id="form-box" method="post">
										<div class="col-md-4 form-group">
											<input type="text"name="name" id="name" class="form-control" placeholder="Name">
										</div>
										<div class="col-md-4 form-group">
											<input type="text" name="email" id="email" class="form-control" placeholder="Email">
										</div>
										<div class="col-md-4 form-group">
											<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
										</div>
										<div class="col-md-12 form-group">
											<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="col-md-12 form-group">
											<input type="submit" name="submit" id="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>

	<!-- jQuery -->
	<script src="external/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="external/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="external/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="external/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="external/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="external/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="external/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="external/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="external/js/main.js"></script>

	</body>
</html>

