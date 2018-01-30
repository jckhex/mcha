        <?php   
error_reporting(0);
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
				  ?> 
             
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">My Direct</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						     <div class="panel-heading">  
					
                             My Direct List
                          
						
						 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Sr No.</th>
                                        <th>Username</th>
                                        <th>Name</th>  
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Joining Date</th>
                                         <th>Package Amount</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
				
				 
				  include('conn.php');  
				
/*
$scholarship_count_sql="select count(*) from user_scholarships ";
$scholarship_sql=mysqli_query($conn,$scholarship_count_sql); 
if($scholarship_sql)
{ while($htf=mysqli_fetch_array($win_sql))
{echo $htf[0]."<br>";}
}else 
{echo "error";}
*/

	     // $sql= mysqli_query($conn ,"select * from register");      
			 
				 
				  //$sql= mysqli_query($conn ,"SELECT b.* FROM user_scholarships a inner join scholarships b on a.scholarship_id=b.id WHERE b.status=1 and a.user_id=".$_SESSION['login_id']);
//$sql= mysqli_query($conn ,"select * from register a inner join user_scholarships b on a.scholarship_id=b.id where b.status=1 and a.user_id=".$_SESSION['login_id']);   


 $schid=$_SESSION['reg_id'];
 
			
			
			 
		   
		      $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where sponsor_id='$schid'  ");  
			                                                //where reg_id='$schid' 
                 while($qrftch=mysqli_fetch_array($sql))           
              {
                ?>
              <tr class="even gradeC">
                                          <td><?php echo $qrftch['reg_id']?></td>
                                        <td><?php echo $qrftch['username']?></td>
                                          <td><?php echo $qrftch['full_name']?></td>
                                         <td><?php echo $qrftch['mobile']?></td>
										<td><?php echo $qrftch['email_id']?></td>
                                        
                                        <?php $tmptime1 = strtotime($qrftch['create_date']);
										    $tmpDeadline1 = date("d M, Y", $tmptime1);
										    ?>
											
                                        
                                        
                                        <td class="date"><?php echo $tmpDeadline1 ?></td>
                                         <td>INR 0.00</td>
                                          <!--<td><?php echo $qrftch['price']?></td>-->
                                       
                                        
										
                                    </tr>

<?php	
}
?>
                                  
  
                                </tbody>
                            </table>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "footer.php"?>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	 <script>
	$(document).ready(function() {
    $('.isactive').click(function(){
			var id=$(this).val();
	//alert(id);
	data={
		id:id
	}
	$.post('ajax.php',data,function(success){
		//alert(success);
		window.location.reload();
	});
            //$('.chk_boxes1').attr('checked',$(this).attr('checked'));
    });
});
function validate_delete(){
return confirm("Are you sure you want to remove this scholarship?");
}
		 </script>  
	
	
	
	<style>
	.cc {
    left: -8px;
    position: relative;
    width: 34px;
} 
	</style>

</body>

</html>
