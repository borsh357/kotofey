<?php
/*
Plugin Name: slider
Description: слайдер
Version: 1.0
Author: boRsh
*/

$dir = $_SERVER['DOCUMENT_ROOT'] . '/plugins/slider/img/';
$path = 'http://pitomnik:8888/plugins/slider/img/';
$img = array_diff( scandir( $dir), array('..', '.', '.DS_Store'));
sort($img);

function headslider() {
global $dir;
global $img;
global $path;
echo '<ul id="slides">
 <li class="slide showing"><img class="img-fluid slidimg" src="' .$path.$img[0].'" alt="Сибирская кошка"></li>';
 for ($i = 1; $i <= count($img)-1; $i++) {
 	echo '<li class="slide"><img class="img-fluid slidimg" src="'.$path.$img[$i].'" alt="Сибирская кошка"></li>';
 }
 echo '</ul>';
	echo '<script src="/plugins/slider/slider.js"></script>';
}
?>

				
