<?php include_once("../analyticstracking.php") ?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php include 'assets/layouts/head.php'?>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.html" id="logo">BG TAXI  -  19800</a></h1>
						</div>
					</div>
				</header>

			<!-- Nav -->
			<?php 
    $currentpage = basename($_SERVER["SCRIPT_FILENAME"]);

    include 'assets/layouts/header_nav.php'?>

			<!-- Main -->
				<!--<div id="main-wrapper">-->
					<div class="container">
						<div class="row">
							<div class="3u 12u(mobile)">
								<h3>Call centar</h3>
								<p>19800</p>
							</div>
							<div class="9u 12u(mobile) important(mobile)">
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1415.4210134484304!2d20.478914400598416!3d44.804407984877166!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1494279035833" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="row 200%">
							<div class="12u">



							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
		<?php include 'assets/layouts/footer.php'?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>