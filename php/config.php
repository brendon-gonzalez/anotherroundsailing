<?php
$base_url= 'http://www.anotherroundsailing.com/';
//$base_url='http://localhost/dadio/';
#remove the directory path we don't want
$request  = str_replace("/pages/", "", $_SERVER['REQUEST_URI']);

#split the path by '/'
$params     = explode("/", $request);
#keeps users from requesting any file they want
$safe_pages = array();

//the email to receive your requests to
$to_email="mike@anotherroundsailing.com";
$email_config = array ('host' => "mail.anotherroundsailing.com",
        'port' => 26,
        'auth' => true,
        //This needs to be a gmail address. Otherwise you have to update the host and port numbers.
        'username' => "mike@anotherroundsailing.com",
        //your GMAIL password. This just routes the email on your site through gmail's open smtp services.
        'password' => "85Oday28");

//1 for live, 2 for test - Probably won't need to change this. Email me if there is a problem. bmgonzalezmm@gmail.com
$pkey=2;
