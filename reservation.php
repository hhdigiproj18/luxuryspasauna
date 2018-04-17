<?php
  $user = 'id5357600_admin';
  $pass = 'password';
  $db = new PDO( 'mysql:host=localhost;dbname=your_data_base_name', $user, $pass );

  $sql = "SELECT * FROM huoneet";
  $result = $db->query( $sql );

  foreach( $result as $row ){
    print_r( $row );
  }
 ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Travel Tours Travel Category Bootstrap Responsive Web Template | Contact :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Travel Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header-w3l">
		<!-- navigation -->
		<div class="nav-agile">
			<nav class="navbar navbar-default">
				<div class="navbar-header logo-w3layouts">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- logo -->
					<h1>
						<a href="index.html">Travel Tours</a>
					</h1>
					<!-- //logo -->
				</div>
				<!-- navbar-header -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="w3l-navtop">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li>
										<a href="icons.html">Web Icons</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="contact.html" class="active">Contact</a>
							</li>
						</ul>
					</div>
					<!-- social icons -->
					<div class="social-icons">
						<ul>
							<li>
								<a href="#" class="fa fa-facebook icon-border facebook"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-twitter icon-border twitter"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-google-plus icon-border googleplus"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-rss icon-border rss"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
					<div class="clearfix"> </div>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header -->

	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<h3 class="title">Varaus</h3>
			<div class="contact-block-left">
				<form action="reservation.php" method="post">
					<input type="text" placeholder="Asiakasnumero" required="" name="asiakasnumero"><a href="rekisteroidy.php">Rekisteröi asiakasnumero</a>
					<input type="date" class="date" placeholder="Date" name="pvm" required="">
          <input type="number" placeholder="Vierailijoiden lkm" name="lkm" required="">
          <input type="time" placeholder="Sisäänkirjautumisaika" name="aika" required="">
          <select>
            <?php foreach($huoneet as $huone): ?>
                <option value="<?= $huone['id']; ?>"><?= $huone['koko'].$huone['vrkhinta']; ?></option>
            <?php endforeach; ?>
          </select>
					<textarea placeholder="Message" name="message" required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="contact-seco">
				<div class="col-md-5 col-xs-5 contact-left-w3ls">
					<h3>Get In Touch</h3>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
							<h4>Visit us</h4>
							<p>Parma Via Modena,BO, Italy</p>
							<p>Lorem ipsum dolor.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-w3">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
							<h4>Mail us</h4>
							<p>
								<a href="mailto:info@example.com">info@example.com</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
							<h4>Call us</h4>
							<p>+18044261149</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6 social-w3">
					<div class="main">
						<ul>
							<li class="f1">
								<a href="#" class="social-contact-w3">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
									<p>Facebook</p>
								</a>
							</li>
							<li class="f2">
								<a href="#" class="social-contact-w3">
									<i class="fa fa-google-plus f2" aria-hidden="true"></i>
									<p>Google Plus</p>
								</a>
							</li>
							<li class="f3">
								<a href="#" class="social-contact-w3">
									<i class="fa fa-twitter f3" aria-hidden="true"></i>
									<p>Twitter</p>
								</a>
							</li>
							<li class="f4">
								<a href="#" class="social-contact-w3">
									<i class="fa fa-linkedin f5" aria-hidden="true"></i>
									<p>Linkedin</p>
								</a>
							</li>
							<li class="f5">
								<a href="#" class="social-contact-w3">
									<i class="fa fa-dribbble f6" aria-hidden="true"></i>
									<p>Dribbble</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Contact -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 col-xs-4 footer-grids">
					<h2>More Information</h2>
					<p class="footer-one-w3ls">This is a great you can use this space to go into a little more detail about your company. Talk about your team and
						what services you provide. </p>
				</div>
				<div class="col-md-5 col-xs-5 footer-grids w3l-agileits">
					<h3>Newsletter</h3>
					<p>Recieve our latest news straight to your inbox</p>
					<form action="#" method="post">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="submit" value="Subscribe" />
					</form>
				</div>
				<div class="col-md-3 col-xs-3 footer-grids social-agileits">
					<h3>Connect With Us</h3>
					<div class="social-w3l">
						<ul>
							<li>
								<a href="#" class="wthree_facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_twitter">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_dribbble">
									<i class="fa fa-dribbble" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="social-w3r">
						<ul>
							<li>
								<a href="#">Facebook</a>
							</li>
							<li>
								<a href="#">Twitter</a>
							</li>
							<li>
								<a href="#">Dribbble</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- copyright -->
	<div class="copy-section">
		<p>© 2018 Travel Tours. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling-bottom-to-top -->
	<!-- //Js files -->

</body>

</html>
