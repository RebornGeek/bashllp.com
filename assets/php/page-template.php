<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/assets/js/nav.js"></script>
    <link rel="icon" href="/assets/images/favicon.png">

    <?php echo head(); ?>
</head>

<body>
    <div class="green-stripe"></div>
    <div class="grey-stripe"></div>

    <div class="logo-wrapper"><img src="/assets/images/logo.jpg" alt="Logo" class="img-responsive" /></div>

    <nav>
        <div class="nav-wrap">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/areas-of-law.php">Areas of Law</a>
                    <ul>
                        <li><a href="/areas-of-law/corporate.php">Corporate &amp; Commercial</a></li>
                        <li><a href="/areas-of-law/securities.php">Securities</a></li>
                        <li><a href="/areas-of-law/real-estate.php">Real Estate</a></li>
                        <li><a href="/areas-of-law/litigation.php">Litigation</a></li>
                        <li><a href="/areas-of-law/immigration.php">Immigration</a></li>
                        <li><a href="/areas-of-law/estates.php">Estates</a></li>
                        <li><a href="/areas-of-law/employment.php">Employment</a></li>
                        <li><a href="/areas-of-law/family.php">Family</a></li>
                        <li><a href="/areas-of-law/international-trade.php">International Trade</a></li>
                    </ul>
                </li>
                <li><a href="/lawyers.php">Lawyers</a>
                    <ul>
                        <li><a href="/lawyers/baldwin.php">Thomas C.H. Baldwin, Q.C.</a></li>
                        <li><a href="/lawyers/sennecke.php">Alexander Sennecke</a></li>
                        <li><a href="/lawyers/halman.php">Jeffrey Halman</a></li>
                        <li><a href="/lawyers/tingley.php">Evan L. Tingley</a></li>
                        <li><a href="/lawyers/pajo.php">Mati E Pajo</a></li>
                        <li><a href="/lawyers/tint.php">Sylvia L. Tint</a></li>
                    </ul>
                </li>
                <li><a href="/map-directions.php">Map &amp; Directions</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/privacy-policy.php">Privacy Policy</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </nav>

    <div class="content">
        <?php echo content(); ?>
    </div>

    <div class="clear"></div>
    
    <footer>
        <p>VICTORIA TOWER &#8226; 25 ADELAIDE STREET EAST &#8226; SUITE 900 &#8226; TORONTO &#8226; ONTARIO &#8226; M5C 3A1
        <br> Copyright <?=date('Y') ?>. Baldwin Sennecke Halman LLP. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
function addMeta($name, $content){
    if($name == "title"){
        echo "<title>".$content."</title>";
    }else{
        echo "<meta name=\"".$name."\" content=\"".$content."\">";
    }
}
?>