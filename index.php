<?php

define('__APP__', TRUE);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("includes/database.php");

if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

if (!isset($menu)) { $menu = 1; }

include_once("includes/functions.php");

print '
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/style.css">
	
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="fkuser@tvz.hr">
        
		<link rel="icon" href="img/icon.jpg" type="image/png"/>

		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<title>Example page - PHP API</title>
		';
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
      echo '<script src="js/delete_articles.js"></script>';}
print '
	</head>
<body>
	<header>';

include("menu.php");

print '</header>
	<main>';

if (isset($_SESSION['message'])) {
    print $_SESSION['message'];
    unset($_SESSION['message']);
}

# Homepage
if (!isset($menu) || $menu == 1) { include("home.php"); }

# Music and Sport
else if ($menu == 2) { include("category.php"); }

# Article
else if ($menu == 3) { include("article.php"); }

# Admin
else if ($menu == 4) {
    if (!isset($_SESSION['username'])){
        include("login.php");
    }else{
        include("admin.php");
    }
}

else if ($menu == 5) { include("register.php");}

print '
	</main>
	<footer>
	</footer>
</body>
</html>';
?>