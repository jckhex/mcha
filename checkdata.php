<?php
include('conn.php');
if(isset($_POST['sponsor']))
{
 $sponsor=$_POST['sponsor'];
 $checkdata=" SELECT user_id,username FROM users WHERE username='$sponsor'";
 $query=mysqli_query($conn,$checkdata);
 //$row =  mysqli_fetch_assoc($query);
 //print_r($row);
 if(mysqli_num_rows($query)>0)
 {
  echo "OK";
 }
 else
 {
  echo "Invalid ID";
 }
 exit();
}


?>
