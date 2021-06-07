<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Minifoster');
define('DB_PASSWORD', 'FoodProducts');
define('DB_NAME', 'adminLog');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>