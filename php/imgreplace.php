<?php
/**
 * Strips images from a string of text
 * @param  String $string  Full string to parse
 * @param  String $start   Where to start
 * @param  String $end     Where to end
 * @param  String $options Return found string or parsed string
 * @return String          String - images
 *
 * Base code for this was taken from Justin Cook
 * http://www.justin-cook.com/wp/2006/03/31/php-parse-a-string-between-two-strings/
 */
function strip_images ($string, $start, $end, $options = false) {
	$ltr_count = strlen($start);
	$string = " ".$string;
    $ini = strpos($string,$start);
    $ini -= $ltr_count;
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    $to_replace = substr($string,$ini,$len);
    if ($options) {
    	return $to_replace;
    }
    return str_replace($to_replace, '', $string);
    
}

$string = '<p>This is some text here<a href="/blahblah/2349821349/"><img src="/uploads/blahblah/12.jpg" border="0" alt="Random Image To Replace" title="Random Image To Replace" hspace="5" width="330" height="158" align="right"></a> </p>';
$parsed = strip_images($string,'<a','</a>');
echo $parsed;