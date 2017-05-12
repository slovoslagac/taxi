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


    <!-- Nav -->
    <?php 
    $currentpage = basename($_SERVER["SCRIPT_FILENAME"]);

    include 'assets/layouts/header_nav.php'?>

    <!-- Main -->
    <div id="page-wrapper">
        <div id="main" class="container">
            <!-- Features -->
                    <section class="box features">
                        <h2 class="major"><span>Naši prijatelji</span></h2>
                        <div>
                            <div class="row">
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/petrol.jpg" alt=""/></a>
                                        <h4><a href="#">Gorivo koje koristimo</a></h4>
                                        <p>
                                            Naša vozila idu na najbolje gorivo....
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/petrol.jpg" alt=""/></a>
                                        <h4><a href="#">Gorivo koje koristimo</a></h4>
                                        <p>
                                            Naša vozila idu na najbolje gorivo....
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/petrol.jpg" alt=""/></a>
                                        <h4><a href="#">Gorivo koje koristimo</a></h4>
                                        <p>
                                            Naša vozila idu na najbolje gorivo....
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="images/petrol.jpg" alt=""/></a>
                                        <h4><a href="#">Gorivo koje koristimo</a></h4>
                                        <p>
                                            Naša vozila idu na najbolje gorivo....
                                        </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
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