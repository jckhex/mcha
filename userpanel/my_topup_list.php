        <?php   
         error_reporting(0);
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
				  ?> 
             
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit fa-fw animated flip"></i>  Acocunt Upgrade History
</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						     <div class="panel-heading">  
					
                            View Your Upgrade History.

                           </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Sr. No.</th>
                                        <th>Date</th>
                                        <th> Amount</th> 
                                          <th>Transaction No.</th> 
                                            <th>Status</th> 
                                              
                                     
                                        
                                      
                                       
                                    </tr>
                                </thead>
                                <tbody>
                               
                                
                              
                                    <?php
				
				 
				  include('conn.php');  
				
 


 $schid=$_SESSION['reg_id'];
 
 

              
 
           
		    		   
		   
		      $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where reg_id='$schid'");   
                 while($qrftch=mysqli_fetch_array($sql))           
              {
                ?>
              <tr class="even gradeC">
                                          <td> </td>
                                        <td></td>
                                          <td></td>
                                       
                                       
                                       <td>Account Upgrade details not found</td>
                                       
                                       <td></td>
                                      
                                        
										
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
   
	
	
	
	<style>
	.cc {
    left: -8px;
    position: relative;
    width: 34px;
} 
	</style>

</body>

</html>
