<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "welcome";
$db = "mlm";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("unable to connect");
if ($conn->connect_errno){
    echo "$conn->connect_errno";
}
?>      
