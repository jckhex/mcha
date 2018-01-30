        <?php  
        error_reporting(0); 
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
				  ?> 
                  <style>.error {
    font-size: 14px;
    text-transform: none;
    color: #FF0000;}
				  </style>
             
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-angle-double-down"></i>  Withdrawal Request

</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						    
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" style="background-color:#fff;" id="dataTables-example">
                             
      <tbody><tr>
        <td valign="top" align="left">          <table width="97%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <td height="300" valign="top"><br>
                <form method="post" name="form1" id="form1" onSubmit="return validateForm(this,0,0,0,1,8);">
                  <div class="error">
<br>Pleaes refer 3 direct joinning to take withdrawal<br>Pleaes update your bitcoin address before withdrawal request<br>Your Account is not Topuped/Activated yet. Please topup your account first than you can make any transaction<br>No sufficient account balance for transfer!<br>Sorry, Your allowed withdrawal limit is over, Please Re-Topup your account to make Withrawal</div>
                  <a href="upgrade_account.php"> Click here </a> to Upgrade Your Account <table width="500" border="0" align="center" cellpadding="1" cellspacing="1" class="td_box">
                    					  
					                   </table>
                </form></td>
            </tr>
            <tr>
              <td valign="top" class="error"> Note : <br>
                1. Your Withdrawal request will be processed every monday<br>
                2. Make sure your bitcoin address is display above is correct if not, contact to support </td>
            </tr>
            <!-- <tr>

              <td valign="top" > Note : <br />

                - Bank withdrawal request will take upto 7 working days.<br />

                - Minimum Bank withdrwal request amount will be Rs.500/-<br />

                - Bank widthrwal request open on 15th of every month. <br />

              </td>

            </tr>-->
          </tbody></table>
                  </td>
      </tr>
    </tbody></table>
                           
                           
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
   
	
	


</body>

</html>
