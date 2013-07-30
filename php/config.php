<?php 
$base_url='http://localhost:81/dadio/';

$to_email= 'mike@anotherroundsailing.com';


#remove the directory path we don't want 
$request  = str_replace("/pages/", "", $_SERVER['REQUEST_URI']); 
 
#split the path by '/'  
$params     = explode("/", $request); 
#keeps users from requesting any file they want  
$safe_pages = array();    