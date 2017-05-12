<?php include_once("analyticstracking.php") ?>
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
<body class="homepage">
<div id="page-wrapper">
    <!-- Nav -->
    <?php 
    $currentpage = basename($_SERVER["SCRIPT_FILENAME"]);

    include 'assets/layouts/header_nav.php'?>

    <!-- Banner -->

    <!-- Header -->
    <div class="text-center">
        <h1><a href="index.php" id="logo"><strong>BG TAXI&nbsp;&nbsp;&nbsp;&nbsp;19800</strong></a></h1>
        <span id="logoDetail" class="pull-right "></span>
    </div>
<br>
<br>
    <div class="container main_part new_logo">


        

        <img class="img-responsive center-block logo_central_position" src="images/bgtaxi-transparent-slow.gif" alt=""/>

    </div>
    <br>
    <br>
      <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row 200%">
                <div class="12u">

                    <!-- Features -->
                    <section class="box features">
                        <h2 class="major"><span>NOVOSTI</span></h2>
                        <div>
                            <div class="row">
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="http://placehold.it/350x150" alt=""/></a>
                                        <h4><a href="#">Slika 1</a></h4>
                                        <p>
                                            
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                   <section class="box feature">
                                        <a href="#" class="image featured"><img src="http://placehold.it/350x150" alt=""/></a>
                                        <h4><a href="#">Slika 2</a></h4>
                                        <p>
                                            
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="http://placehold.it/350x150" alt=""/></a>
                                        <h4><a href="#">Slika 3</a></h4>
                                        <p>
                                            
                                        </p>
                                    </section>

                                </div>
                                <div class="col-md-3 col-xs-12">

                                    <!-- Feature -->
                                    <section class="box feature">
                                        <a href="#" class="image featured"><img src="http://placehold.it/350x150" alt=""/></a>
                                        <h4><a href="#">Slika 4</a></h4>
                                        <p>
                                            
                                        </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>

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
<script src="assets/js/main.js"></script>

</body>
</html>