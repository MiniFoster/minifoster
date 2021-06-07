<?php
require_once('connect.php');

$response_arr=array();

if($_SERVER['REQUEST_METHOD']=="POST"){

    $fstnames = $_POST['fname'];
    $lstnames = $_POST['lname'];
    $e_mails = $_POST['email'];
    $comments = $_POST['feedback'];
    
$query ="INSERT INTO `feedback_info_table` (`S.No`,`First_Name`,`Last_Name`,`E-Mail`,`Comment`) VALUES (null, '$fstnames',  '$lstnames','$e_mails','$comments')";

   $response=mysqli_query($conn, $query) or die('Error querying database.');
   if($response)
   { 
       echo '<script language="javascript">';
       echo 'alert("Your Feedback Submit Successfully"); location.href="http://www.minifoster.com/home"';
       echo '</script>';
   }
   else
   { 
       echo '<script language="javascript">';
       echo 'alert("OOPS!.. Somthing goes wrong"); location.href="http://www.minifoster.com/home"';
       echo '</script>';
    } 
    mysqli_close($conn);
  }
?>