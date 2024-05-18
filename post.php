<?php

/*

TMComms, a tribune for Trackmania²

Written by Safariminer

Helped by development of https://github.com/Safariminer/3bune

*/

include "config.php";
date_default_timezone_set($tmcomms_timezone);
if(str_contains($_SERVER['HTTP_USER_AGENT'], "ManiaPlanet") || str_contains($_SERVER['HTTP_USER_AGENT'], "GameBox") || $tmcomms_tmonly == false){
    header("Content-Type: application/xml");

    $output = file_get_contents("messagehistory.txt");

    $output = date('j-M-Y h:i:s A ') . htmlentities($_REQUEST["username"]) . " : " . htmlentities($_REQUEST["message"]) . "\$z\r\n" . $output;
    file_put_contents("messagehistory.txt", $output);
    header("Content-Length: " . strlen($output));  // we need the content length for maniaplanet to register it as good
    echo $output;
}
else{
    echo file_get_contents("sorry.html");
}
?>