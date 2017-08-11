<?php
/*
Plugin Name: Photo URL
Description: Replaces photo URL's wrapped in "[" and "]" with embed code for that photo.
Version: 1.0
Author: LMP
Author URI: http://liamparker.com/
*/
function makePhoto($matches){
$photoURL = $matches[1];
$result = "<a href='$photoURL'><img src='$photoURL' /></a>";
return($result);
}
function photoURL($content){
$pattern = "/\[(([^\n]+)(.jpg|.png))\]/";
$content = preg_replace_callback($pattern,'makePhoto',$content);
return($content);
}
add_filter('the_content', 'photoURL');
?>