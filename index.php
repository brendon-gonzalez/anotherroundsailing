<?php include('php/config.php');  
if(in_array($params[2], $safe_pages)) {  
	include('pages/'.$params[2].".php");  
}
elseif ($params[2]=='') {
	include('pages/home.php');
} else {  
	include("/pages/404.php");  
} ?>