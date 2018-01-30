              <?php   
           error_reporting(0);
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
				  ?> 
           
				  ?> 
                           <style type="text/css">

.td_box {
 
font-size:13px;
border: 1px solid #dddddd;
 
}

.td_box .tdhead {
 
background-color: #000; padding-top:5px; color:#FFF3DC;font-weight:bold;height:40px;border-bottom:3px solid #dddddd; border-left:1px solid #dddddd; padding-left:3px; 
 
}


.td_box tr:nth-child(2n+1) {background-color:#f9f9f9;border-bottom:1px solid #dddddd;height:35px;padding-top:5px;  }

.td_box tr:nth-child(2n) {border-bottom:1px solid #dddddd;height:35px;padding-top:5px;  }
  
/*.td_box tr:hover {  background:#f2f2f2;height:30px; }*/
.td_box thead tr{	color: #333;height:30px;	border: 0px solid #e0e0e0; border-left:1px solid #dddddd; }
.td_box thead th, .td_box th{	background-color: #000; padding-top:5px; color:#fff;font-weight:bold;height:40px;border-bottom:3px solid #dddddd; border-left:1px solid #dddddd; padding-left:3px;  }
.td_box tbody tr td{	border: 0px solid #e0e0e0;height:30px;padding-top:5px; font-weight:bold; font-size:14px; border-left:1px solid #dddddd; padding-left:3px;  }

.title{ font-size: 20px;  font-style: none;font-weight: bold;color:#999;  text-decoration: none; height: 25px; background-image: url(../images/page.png); background-repeat:repeat-x; }
.subtitle{ font-size:14px; font-weight:bold; color:#999999; }
.error {  font-size: 14px;	text-transform: none;	color: #FF0000;}

a.info{   position:relative;  z-index:24; background-color:#f2f2f2;  color:#000;  text-decoration:none}
a.info:hover{z-index:25; background-color:#FEE2AB}
a.info span{display: none}
a.info:hover span{   display:block;   position:absolute;   top:2em; left:-10em; width:45em;   border:1px solid #0cf;  background-color:#FEE2AB; color:#000;    text-align: left}
	
	


</style> 

            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-angle-double-down"></i>Data Card Recharge
</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						     <div class="panel-heading">  
					
                      Recharge your Data Card

                           </div>
                           <div class="panel-body">
                           <!--ist -->
                           <div align="center" class="error">
                                  </div>
 			 				  
				                      <form id="recharge_form" name="recharge_form" method="post" style="margin:0px;" action="#" enctype="application/x-www-form-urlencoded" onSubmit="return validateForm(this,0,0,0,1,8);">
                      <table width="50%" align="center" class="td_box">
                        <tbody><tr>
                          <td colspan="2"><b>Recharge Your Data Card </b></td>
                        </tr>
                        <tr>
                          <td nowrap="nowrap" height="38" align="left">&nbsp;&nbsp; 
                            Data Card                            Number : </td>
                          <td> 
						  
						  
						 <input name="mobileno" type="text" class="wpcf8-form-control wpcf_rk8-text wpcf8-validates-as-required" id="mobileno" maxlength="16" alt="number" emsg="Please enter mobile number" style="width:200px;" placeholder=" ">   
						  
						  </td>
                        </tr>
                        <tr>
                          <td align="left" nowrap="nowrap">&nbsp;&nbsp; Select Operator : </td>
                          <td>
 						  <select name="opt_code" id="opt_code" style="width:200px; height:30px; border:1px solid #d4d4d4; margin-bottom:2px;" onChange="do_get_operator_plan_details();"><option value="">Select Your Operator</option><option value="AIRCDC">AIRCEL POCKET INTERNET</option><option value="BSNLDC">BSNL DC</option><option value="MTNLDC">MTNL DELHI</option><option value="MTNLDCM">MTNL MUMBAI</option><option value="MTSDC">MTS M-BLAZE </option><option value="MTSDCB">MTS MBROWSE</option><option value="RIMDC">RELIANCE NET CONNECT</option><option value="RIMDCG">RELIANCE NET CONNECT 3G</option><option value="RIMDCP">RELIANCE NET CONNECT+</option><option value="TDCDCW">TATA PHOTON WHIZ</option><option value="TDCDC">TATA PHOTON+</option><option value="VODADC">VODAFONE 3G</option></select> 
                           </td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;&nbsp; Enter Amount : </td>
                          <td> 
 						   <input name="recharge_amount" type="text" class="wpcf8-form-control wpcf_rk8-text wpcf8-validates-as-required" id="recharge_amount" maxlength="5" alt="number" emsg="Please enter Amount" style="width:200px;" placeholder=" ">   
						  
						  </td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                          <td align="left"><input type="hidden" name="opt_type" value="DC">
                            <input name="Submit" type="submit" value="Proceed to Next" class="btn btn-success">
                          </td>
                        </tr>
                      </tbody></table>
                    </form>
                           
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
