<?php 
    //$flavor = $_COOKIE['flavor'];
    $flavor = empty($_COOKIE['flavor']) ? "The cookie 'flavor' does not exist." :
        $_COOKIE['flavor'];
    print "Flavor = $flavor";
?>