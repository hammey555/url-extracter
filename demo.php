<?php
///Include main functions
include('url-extracter.php');

//Calling of the function
$url		=	 "http://www.cygnismedia.com/";
$responce	=	 file_get_contents_curl($url);

echo '<pre>';
print_r($responce);
echo '</pre>';
?>