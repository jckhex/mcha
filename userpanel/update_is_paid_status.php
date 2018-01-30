 
 
 <?php
include('conn.php'); 
$id = $_REQUEST['id'];	
$sid = $_REQUEST['sid'];	

$pid = $sid==0? 1:0;


       //$is_active = !empty($_POST['is_featured']) ? 1 : 0; // where $_POST['test'] is the name of your checkbox // here you would update the database 


 $sql= "update tbl_paylife_registartion set  is_paid='$pid' where reg_id='$id'";   

$abc=($sql);     
if(mysqli_query($conn, $abc)===true){               
	
//echo "<script type='text/javascript'>window.location=\"userlist.php\";           
echo "Updated Suceessful";
}
	else
	{
		
		
	//echo "no";	
	echo "Error not Updated";		
		
	}

?>  

