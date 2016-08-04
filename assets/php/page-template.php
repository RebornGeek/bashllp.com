<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="icon" href="/assets/images/favicon.png">

    <?php echo head(); ?>
</head>

<body>
    <div class="green-stripe"></div>
    <div class="grey-stripe"></div>

    <nav>
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
                    <li><a href="/lawyers/tchbaldwin.php">Thomas C.H. Baldwin, Q.C.</a></li>
                    <li><a href="/lawyers/asennecke.php">Alexander Sennecke</a></li>
                    <li><a href="/lawyers/jhalman.php">Jeffrey Halman</a></li>
                    <li><a href="/lawyers/etingley.php">Evan L. Tingley</a></li>
                    <li><a href="/lawyers/mpajo.php">Mati E Pajo</a></li>
                    <li><a href="/lawyers/stint.php">Sylvia L. Tint</a></li>
                    <li><a href="/lawyers/dtwhite.php">Dylan T. White</a></li>
                </ul>
            </li>
            <li><a href="/map-directions.php">Map &amp; Directions</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
        </ul>
    </nav>

    <div class="content">
        <?php echo content(); ?>
    </div>

    <footer>
        <p>VICTORIA TOWER &#8226; 25 ADELAIDE STREET EAST &#8226; SUITE 900 &#8226; TORONTO &#8226; ONTARIO &#8226; M5C 3A1
        <br> Copyright &copy;. Baldwin Sennecke Halman LLP. All rights reserved.</p>
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