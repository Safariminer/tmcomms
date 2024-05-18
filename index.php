<?php

/*

TMComms, a tribune for Trackmania²

Written by Safariminer

Helped by development of https://github.com/Safariminer/3bune

*/

if(str_contains($_SERVER['HTTP_USER_AGENT'], "ManiaPlanet") || str_contains($_SERVER['HTTP_USER_AGENT'], "GameBox")){
    header("Content-Type: application/xml");

    $output = file_get_contents("xml/maniaappXmlHeader");
    $output .= file_get_contents("mp/App.Script.txt");
    $output .= file_get_contents("xml/maniaappXmlFooter");
    header("Content-Length: " . strlen($output)); // we need the content length for maniaplanet to register it as good
    echo $output;
}
else{
    echo file_get_contents("webhome.html");
}
?>