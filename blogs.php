<?php session_start(); if(!isset($_SESSION['denied'])) { die('Direct access not permitted');} time() -   $_SESSION['denied'] > 3; session_unset(); session_destroy(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head><meta charset="utf-8"><meta name="description" content=" miniFoster - miniFoster is a Homemade Food Delivery site, we always respect our customer and provide home made delicious food delivery" /><meta name="keywords" content="minifoster, MiniFoster, miniFoster, MINIFOSTER, Mini Foster, Order Home Made Food, Food Delivery, Homemade Food, Home Made Food" /><meta name="author" content="miniFoster" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="content-language" content="en" /><meta name="distribution" content="global" /><meta name="rating" content="general" />
	<link href="../logo/icon.jpg" rel="icon" sizes="16x16" type="image/jpg" />
	<title>Blog - MiniFoster</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="nav.css">
	<style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

@media screen and (max-height: 450px) {
  .topnav {padding-top: 15px;}
  .topnav a {font-size: 18px;}
}
.mySlides {
    display:none;
}
</style>
</head>
<body oncontextmenu="return false;">
<div class="topnav">
  <a href="home">Home</a>
  <a href="services">Our Service</a>
  <a class="active" href="blogs">Blog</a>
  <a href="feedback">FeedBack</a>
</div>
<p style="text-align: center;"><img src="..\logo\logo.jpg" width="150" height="150"/></p>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>