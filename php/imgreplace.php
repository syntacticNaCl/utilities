<?php
/**
 * Strips images from a string of text
 * @param  String $string Full string to parse
 * @param  String $start  Where to start
 * @param  String $end    Where to end
 * @return String         String - images
 */
function strip_images ($string, $start, $end) {
	$ltr_count = strlen($start);
	$string = " ".$string;
    $ini = strpos($string,$start);
    $ini -= $ltr_count;
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    $to_replace = substr($string,$ini,$len);
    return str_replace($to_replace, '', $string);
}

$string = '<p>This is some text here<a href="/floorplans/05302570/"><img src="/uploads/pagesfiles/99.jpg" border="0" alt="Luxury House Plans" title="Luxury House Plans" hspace="5" width="330" height="158" align="right"></a> </p>';
$parsed = strip_images($string,'<a','</a>');
echo $parsed;