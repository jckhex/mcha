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
.error {  font-size: 14px;	text-transform: none;	color: #FF0000; text-align:center;}

a.info{   position:relative;  z-index:24; background-color:#f2f2f2;  color:#000;  text-decoration:none}
a.info:hover{z-index:25; background-color:#FEE2AB}
a.info span{display: none}
a.info:hover span{   display:block;   position:absolute;   top:2em; left:-10em; width:45em;   border:1px solid #0cf;  background-color:#FEE2AB; color:#000;    text-align: left}
	
	


</style> 

            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-edit fa-fw animated flip"></i> Please Select Fund Transfer
</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
						     <div class="panel-heading">  
					Please Select Fund Transfer

                           </div>
                            <div class="error"> 
<br>No suficient account balance for transfer</div>

                           <!--ist -->
                             <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
           
              <tbody><tr>
                
                <td height="300" align="center" valign="top"><br>
<form method="post" name="form1" id="form1" onSubmit="return validateForm(this,0,0,0,1,8);">
                    <table width="676" border="0" cellpadding="1" cellspacing="1" class="td_box">
                      
                      <tbody><tr>
                        <td colspan="3"></td>
                      </tr> 
					                         <tr>
                        <td align="right" class="maintxt">Account Balance : </td>
                        <td align="left" class="maintxt"><strong>
						INR 0.00</strong></td>
                        <td align="left" class="maintxt">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" class="maintxt">Transfer Date : </td>
                        <td align="left" class="maintxt">3 Jan, 2018</td>
                        <td align="left" class="maintxt">&nbsp;</td>
                      </tr>
					 
 					  <tr>
                        <td align="right" class="maintxt"> Receiver User ID : </td>
                        <td align="left" nowrap="" class="maintxt"><input type="text" class="txtbox" name="pay_username" value="" alt="blank" emsg="Username can not be blank" onChange="do_get_user_details();"></td>
                        <td align="left" nowrap="" class="maintxt">  <div align="left" id="details"></div> </td>
 					  </tr>
                      <tr>
                        <td width="39%" align="right" class="maintxt">Transfer Amount : </td>
                        <td width="35%" align="left" class="maintxt"><input type="text" class="txtbox" name="pay_amount" value="" alt="number" emsg="Credit/debit amount can not be blank">                        </td>
                        <td width="26%" align="left" class="maintxt">&nbsp;</td>
                      </tr>
                     <!--  <tr>
                        <td align="right" valign="top" class="maintxt">Naration : </td>
                        <td align="left" class="maintxt"><textarea name="pay_for" cols="30" class="txtbox" rows="3" alt="blank" emsg="Naration can not be blank" ></textarea></td>
                        <td align="left" class="maintxt">&nbsp;</td>
                      </tr>-->
					  
                      <tr>
                        <td class="maintxt">&nbsp;</td>
                        <td align="left" class="maintxt">
												</td>
                        <td align="left" class="maintxt">&nbsp;</td>
                      </tr>
					  					  
					   
            </tbody></table>
                </form></td>
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
   
	
	
	
	<style>
	.cc {
    left: -8px;
    position: relative;
    width: 34px;
} 
	</style>

</body>

</html>
