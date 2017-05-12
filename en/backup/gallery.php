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
    
        <div class="row">
		  <div class="column">
		    <img src="images/img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow img-responsive">
		  </div>
		  <div class="column">
		    <img src="images/img2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow img-responsive">
		  </div>
		  <div class="column">
		    <img src="images/img3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow img-responsive">
		  </div>
		  <div class="column">
		    <img src="images/img4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow img-responsive">
		  </div>
		</div>

		<div id="myModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">&times;</span>
		  <div class="modal-content">

		    <div class="mySlides">
		      <div class="numbertext">1 / 4</div>
		        <img src="images/img_nature_wide.jpg" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">2 / 4</div>
		        <img src="images/img_fjords_wide.jpg" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">3 / 4</div>
		        <img src="images/img_mountains_wide.jpg" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">4 / 4</div>
		        <img src="images/img_lights_wide.jpg" style="width:100%">
		    </div>

		    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>

		    <div class="caption-container">
		      <p id="caption"></p>
		    </div>

		    <div class="column">
		      <img class="demo  img-responsive" src="images/img1.jpg" onclick="currentSlide(1)" alt="Nature">
		    </div>

		    <div class="column">
		      <img class="demo  img-responsive" src="images/img2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
		    </div>

		    <div class="column">
		      <img class="demo img-responsive" src="images/img3.jpg" onclick="currentSlide(3)" alt="Mountains">
		    </div>

		    <div class="column">
		      <img class="demo img-responsive" src="images/img4.jpg" onclick="currentSlide(4)" alt="Lights">
		    </div>
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
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>