<?php

if(!defined('__APP__')){

    die("Hacking attempt");
}

$conn = mysqli_connect("localhost", "root", "filip2003kuser", "sopitas")
or die('Error connecting to MySQL server.');