    <?php
$link1 = 'index.php';
$link2 = 'friends.php';
$link3 = 'gallery.php';
$link4 = 'contact.php';
$link5 = 'about.php';


?>
    <nav id="nav">
        <div class="container">
        <ul>
            <li class="<?php echo ($link1 == $currentpage) ? 'current' : "" ?> pull-left"><a href="<?php echo $link1?>">Home</a></li>
            <li class="<?php echo ($link2 == $currentpage) ? 'current' : "" ?> pull-left"><a href="<?php echo $link2?>">Friends</a></li>
            <li class="<?php echo ($link3 == $currentpage) ? 'current' : "" ?> pull-left"><a href="<?php echo $link3?>">Gallery</a></li>
            <li class="<?php echo ($link4 == $currentpage) ? 'current' : "" ?> pull-left"><a href="<?php echo $link4?>">Contact</a></li>
            <li class="<?php echo ($link5 == $currentpage) ? 'current' : "" ?> pull-left"><a href="<?php echo $link5?>">About</a></li>
            <li class="pull-right"><a href="../index.php"><img src="images/rs.png"></a></li>
            <li class="pull-right"><a href="index.php"> <img src="images/uk.png"></a></li>
        </ul>
        </div>

    </nav>