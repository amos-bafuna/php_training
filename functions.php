<?php
include 'index.php';

$string = 'Un peu de text';

function add_some_extra(&$string){
    $string .= ', et un peu plus';
}

add_some_extra($string);
echo $string;

add_notes();