<?php

//output buffering
ob_start();

//session_check
session_start();

//connect database
mysql_connect('localhost','root','testfbe') or die("Could not connect to host");
mysql_select_db('weekend') or die("Could not connect to database");


//include functions
include 'func/album.func.php';
include 'func/image.func.php';
include 'func/user.func.php';
include 'func/thumb.func.php';
//include 'func/location.func.php';
?>