<?php
session_start();

//Use the below $con command if you are deploying website using AWS RDS, EC2
$con=mysqli_connect("ls-ce1eb672c2222fb22bf65c82d0b2d086c7de3f40.cdb7mxbdnxoe.ap-southeast-1.rds.amazonaws.com","dbmasteruser","ecom$1234","Database-2");

//Use the below command if you want to run the website on Localhost i.e., XAMPP
// $con=mysqli_connect("localhost","root","","ecom");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Electronix-Website/ecom/');

//Edit the IP address (127.0.0.1) with the Public IP address of your EC2 instance
define('SITE_PATH','http://18.143.247.27/Electronix-Website/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
