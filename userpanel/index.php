
<?php
session_start();
include ('conn.php');  
  
if (!$_SESSION['id']) {
	ob_start();  
  echo "<script type='text/javascript'>window.location=\"../login.php\";</script>";        
} else {  



echo "<script type='text/javascript'>window.location=\"profile.php\";</script>";        
}
     
	
            
            
   
?> 
