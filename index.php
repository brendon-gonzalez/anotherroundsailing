<?php include('php/config.php');
$pkey = 2;
if(in_array($params[$pkey], $safe_pages)) {
	include('pages/'.$params[$pkey].".php");
} elseif ($params[$pkey]=='') {
	include('pages/home.php');
} else {
	include("/pages/404.php");
} ?>