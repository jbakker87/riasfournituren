<?php

//  ATTENTION!
//
//  DO NOT MODIFY THIS FILE BECAUSE IT WAS GENERATED AUTOMATICALLY,
//  SO ALL YOUR CHANGES WILL BE LOST THE NEXT TIME THE FILE IS GENERATED.
//  IF YOU REQUIRE TO APPLY CUSTOM MODIFICATIONS, PERFORM THEM IN THE FOLLOWING FILE:
//  /var/www/vhosts/practical-mclean.85-215-234-61.plesk.page/httpdocs/wp-content/maintenance/template.phtml


$protocol = $_SERVER['SERVER_PROTOCOL'];
if ('HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol) {
    $protocol = 'HTTP/1.0';
}

header("{$protocol} 503 Service Unavailable", true, 503);
header('Content-Type: text/html; charset=utf-8');
header('Retry-After: 600');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="http://practical-mclean.85-215-234-61.plesk.page/wp-content/uploads/2024/10/cropped-cropped-rias-logo-32x32.jpg">
    <link rel="stylesheet" href="http://practical-mclean.85-215-234-61.plesk.page/wp-content/maintenance/assets/styles.css?1732250959">
    <script src="http://practical-mclean.85-215-234-61.plesk.page/wp-content/maintenance/assets/timer.js?1732250959"></script>
    <title>Gepland onderhoud</title>
    <style>body {background-image: url("http://practical-mclean.85-215-234-61.plesk.page/wp-content/maintenance/assets/images/bg.jpg?1732250959");}</style>
</head>

<body>

    <div class="container">

    <header class="header">
        <h1>Deze website ondergaat momenteel ingeroosterd onderhoud.</h1>
        <h2>Onze excuses voor het ongemak. Kom dadelijk nog even terug, we zijn snel klaar!</h2>
    </header>

    <!--START_TIMER_BLOCK-->
        <!--END_TIMER_BLOCK-->

    <!--START_SOCIAL_LINKS_BLOCK-->
    <section class="social-links">
                    <a class="social-links__link" href="https://www.facebook.com/Plesk" target="_blank" title="Facebook">
                <span class="icon"><img src="http://practical-mclean.85-215-234-61.plesk.page/wp-content/maintenance/assets/images/facebook.svg?1732250959" alt="Facebook"></span>
            </a>
                    <a class="social-links__link" href="https://twitter.com/Plesk" target="_blank" title="Twitter">
                <span class="icon"><img src="http://practical-mclean.85-215-234-61.plesk.page/wp-content/maintenance/assets/images/twitter.svg?1732250959" alt="Twitter"></span>
            </a>
            </section>
    <!--END_SOCIAL_LINKS_BLOCK-->

</div>

<footer class="footer">
    <div class="footer__content">
        Powered by WordPress Toolkit    </div>
</footer>

</body>
</html>
