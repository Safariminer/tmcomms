<?php

/*

TMComms, a tribune for Trackmania²

Written by Safariminer

Helped by development of https://github.com/Safariminer/3bune

*/

header("Content-Type: application/xml");

$output = file_get_contents("xml/manialinkXmlHeader");
$output .= file_get_contents("mp/Main.Script.txt");
$output .= file_get_contents("xml/manialinkXmlFooter");
header("Content-Length: " . strlen($output)); // we need the content length for maniaplanet to register it as good
echo $output;
?>
