        <?php  
        error_reporting(0);
             
             session_start();
           include('header.php'); 
            include('sidebar.php');
			error_reporting();
           
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
                                        <th>Is Paid</th>
                                         <th>Package Amount</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
				  include('conn.php');  
				


                  $schid=$_SESSION['reg_id'];
             
			
			$sql= mysqli_query($conn ,"select * from tbl_paylife_registartion    ");
			  //$sql= mysqli_query($conn ,"select * from tbl_paylife_registartion "); 
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
                                      
                                         <td><input type="checkbox" class="checkbox" style="width:30px; float:none;" value="bit" name="is_paid" <?php echo ($qrftch['is_paid']==0? '' : 'checked'); ?> onclick="updateStatus(<?php echo $qrftch['reg_id'];?>,<?php echo $qrftch['is_paid'];?>)" /></td>
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
    <!-- checkbox script -->

function updateStatus(a,b) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
    }
  };
  xhttp.open("GET", "update_is_paid_status.php?id="+a+"&sid="+b+"&t=" + Math.random(), true);
  xhttp.send();
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
