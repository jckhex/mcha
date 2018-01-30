        <?php   
             error_reporting(0);
             session_start();
           include('header.php'); 
            include('sidebar.php');
           
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
      <div class="page-header">
        <h3 class="heading"><i class="fa fa-edit fa-fw animated flip"></i> Topup From Wallet</h3>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- Breadcrumbs -->
   
    <!-- // Breadcrumbs -->
    <div class="row">
      <!-- COL MD 6 -->
      <div class="col-md-12">
        <!-- Simple Input -->
        <div class="panel panel-default">
          <div class="panel-heading">Topup From Wallet.</div>
          <div class="panel-body" align="center">
            <div class="col-md-12">
              <div class="error">
                              </div>
              <!--main  content table start -->
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td align="center" valign="top">                  </td>
                </tr>
                <tr>
                  <td height="200" align="center" valign=""><form method="post" name="form1" id="form1" onSubmit="return validateForm(this,0,0,0,1,8);">
                      <table border="0" cellpadding="4" cellspacing="4">
                        <tbody><tr>
                          <td width="97%" align="center" valign="top"><table width="400" border="0" cellpadding="2" cellspacing="2" class="td_box">
                                 <tbody><tr>
                                            <td align="right" valign="top" class="maintxt"><strong>Account Balance : </strong></td>
                                            <td valign="top"><span class="blue_link"><strong>INR 0.00</strong></span> </td>
                                  </tr><tr>
                                            <td align="right" valign="top" class="maintxt"><strong>Topup Username : </strong></td>
                                            <td valign="top" colspan="2"><input type="text" name="topup_username" value="" alt="blank" emsg="User ID can not be blank" onChange="do_get_user_details();"> <br> 
                                 <div align="left" id="details">&nbsp; </div></td>
                        </tr>
                              <tr>
                                <td align="right" valign="top" class="maintxt"><strong> Topup Amount: </strong></td>
                                <td valign="top"> <!--<input name="total_investment"  type="text" class="txtbox" value="" placeholder="$20 - $10000"  alt="numeric|2" emsg="Please enter minimum amount $10"     /> -->
                                  <select name="total_investment" id="total_investment" style="width:192px; height:24px;" alt="select" emsg="Please Select Package">
                                    <option value="">Please Select Package</option>
                                    <option value="1000">INR.1000</option>
                                   <!-- <option value="20000" >INR.20000</option>
                                    <option value="30000" >INR.30000</option>
                                    <option value="50000" >INR.50000</option>
                                    <option value="100000" >INR.100000</option>-->
                                                                        
                                  </select> 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top"></td>
                                <td valign="top">  
								<input type="hidden" name="pay_group" value=""> 
                                    <input name="Submit" type="submit" class="button" value="Continue" style="padding: 7px 10px;"></td>
                              </tr>
                                                          </tbody></table></td>
                         <!-- <td width="3%" align="left" valign="top"></td>-->
                        </tr>
                      </tbody></table>
                    </form></td>
                </tr>
              </tbody></table>
            </div>
          
          </div>
			  
	 
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->

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
