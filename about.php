<?php include_once("analyticstracking.php");
?>
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
                <h1><a href="index.html" id="logo">BG TAXI - 19800</a></h1>
            </div>
        </div>
    </header>



    <!-- Nav -->
    <?php 
    $currentpage = basename($_SERVER["SCRIPT_FILENAME"]);

    include 'assets/layouts/header_nav.php'?>

    <!-- Main -->
    <div id="page-wrapper">
        <div id="main" class="container">
            <!-- Features -->
            <div class="row">
                <div class="col-xs-12">
                    <img src="images/izrada.jpg" class="img-responsive center-block">
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
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>