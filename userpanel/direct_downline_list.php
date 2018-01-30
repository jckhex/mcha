        <?php   
error_reporting(0);
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
				  ?> 
             
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Level Wise Report
</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						     <div class="panel-heading">  
					
                            Total Downline

                           </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>Level</th>
                                        <th>Total Users</th>
                                        <th>Total Investment</th> 
                                        <th></th>
                                        
                                      
                                        
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
 
 

              
          //SELECT b.category_name,count(a.categories) as tot_act FROM categories_table b left outer join scholarships a on a.categories=b.category_name group by b.category_name
 
           
		    		   
		   
		      $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where reg_id='$schid'");   
                 while($qrftch=mysqli_fetch_array($sql))           
              {
                ?>
              <tr class="even gradeC">
                                          <td><?php

                         
$cntct_select="select count(*) from tbl_paylife_registartion where sponsor_id='$schid' ";
$a13=mysqli_query($conn,$cntct_select); 
if($a13)
{ 




while($g=mysqli_fetch_array($a13))
{
	echo $g[0]."<br>";
	
	}

}
else 
{
	echo "error";}
	     

?> </td>
                                        <td><?php

                       
//$cntct_select="select count(*) from tbl_paylife_registartion where sponsor_id='$schid' ";

$cntct_select="select count(*)  from tbl_paylife_registartion where sponsor_id='$schid' Union select count(*)  from tbl_paylife_registartion where sponsor_id in (select reg_id from tbl_paylife_registartion where sponsor_id='$schid')";





$a13=mysqli_query($conn,$cntct_select); 
if($a13)
{ 




while($g=mysqli_fetch_array($a13))
{
	echo $g[0]."<br>";
	
	}

}
else 
{
	echo "error";}
	     

?></td>
                                          <td>0</td>
                                       <td>view Details</td>
                                       
                                        
										
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
