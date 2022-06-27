<?php 
function getExcerpt($string){
    $start = strpos($string, '<p>');
    $string = substr($string, $start, 100);
    $string = strip_tags($string, '<figcaption>');
    return $string . "…";
    }
