

<?php
session_start();
include('conn.php'); 
 include('tree_header.php');
include('header.php');
include('sidebar.php'); ?> 
       
   

              <div id="page-wrapper">
                   <!-- /.row -->
                <div class="row fleet-content">  
                     
               <form id="form1" name="form1" method="get" action="http://paylife.in/userpanel/direct_level_tree.php">
              <input type="hidden" name="current_id" value="2">
              <br><br><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td align="center" valign="top"> <table border="0" align="center" cellpadding="0" cellspacing="0" class="">
                <tbody><tr>
                      <td valign="top" align="center"><table border="0" align="center" cellpadding="2" cellspacing="2" class="table">
                         <tbody><tr>
                                    <td align="center" width="80"><img src="./Bolindia.biz_files/tree_green.png"><br>Topup </td>
                                    <td align="center" width="80"><img src="./Bolindia.biz_files/tree_red.png"><br>Registration</td>
                                    <td align="center" width="80"><img src="./Bolindia.biz_files/tree_gray.png" align="middle" border="0"><br> Available</td>
                               </tr>
                        </tbody></table>
                      </td>
                  <td align="center" valign="top">
                  	                             <?php
                                                $schid=$_SESSION['reg_id'];
                                                $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where reg_id='$schid'"); 
												    while($abc=mysqli_fetch_array($sql))           
													 {
													?>
                              <table width="400" border="0" align="center" cellpadding="4" cellspacing="4">
                                    <tbody>
                                        <tr>
                                                <td width="50%" align="center" class="maintxt"><strong>User ID : </strong>
                                                                      <?php echo $abc['username']?></td>
                                       </tr><tr>
                                                <td width="50%" align="center" class="maintxt"><strong> Name : </strong>
                                                                      <?php echo $abc['full_name']?></td>
                                       </tr>
                                    </tbody>
                              </table>
                                <br>                
                                <?php
                                }
                                ?>  </td>
                              
                              <td align="center" valign="top">
                                      <div class="error"></div>
                              </td></tr>
                              </tbody></table>
                                     </td></tr>
                               
                               
                             <!-- top level user ---->
                             
                             <tr>
                                 <td align="center" valign="top">
                            
                            					<?php
												$schid=$_SESSION['reg_id'];
                                                $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where reg_id='$schid' "); 
												while($abc=mysqli_fetch_array($sql))           
													{
													?>
				
			
       
				 
				            <table border="0" align="center" cellpadding="0" cellspacing="0">
                               <tbody><tr>
                                          <td align="center" colspan="7">
                                                <div class="smalltxt" align="center"> 
                                                        <strong><?php echo $abc['username']?></strong>
                                                 </div>
                                                    <a class="info" href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=2737">
                                                    <img src="./Bolindia.biz_files/tree_red.png" align="middle" border="0" onMouseOver="do_get_downline_details(reg_id);">
                                               <span class="smalltxt">
                          <div align="center" id="2737" class="error">
	                          <table width="100%" border="1" cellspacing="3" cellpadding="3" class=" ">
                                  <tbody>
                                        <tr class="tdOdd">
                                                      <td width="25%" align="right" class="maintxt"> <strong>Name :</strong></td>
                                                       <td width="25%" class="maintxt" nowrap="nowrap"><?php echo $abc['full_name']?></td>
                                         </tr><tr>
                                                      <td width="25%" align="right" class="maintxt"><strong>Date of joining</strong> </td>
                                                                        <?php $tmptime1 = strtotime($abc['create_date']);
                                                                        $tmpDeadline1 = date("d M, Y", $tmptime1); ?>
                                                       <td width="25%" align="left" class="maintxt"><?php echo $tmpDeadline1 ?></td>	
                                 
                                          </tr><tr> 
                                                        <td align="right" class="maintxt"><strong>Total ID  :</strong></td>
                                                        <td align="left" class="maintxt"> 
														                     <?php
                                                                            $cntct_select="select count(*) from tbl_paylife_registartion where sponsor_id='$schid' ";
																						$a13=mysqli_query($conn,$cntct_select); 
																						if($a13)
																						{ while($g=mysqli_fetch_array($a13)){
																								echo $g[0]."<br>";}}
																							else 
																							{echo "error";}?></td>
																		
                                           </tr><tr>
                                                        <td align="right" class="maintxt"><strong>Total Paid ID :</strong></td>
                                                        <td align="left" class="maintxt">0 </td>
                                           </tr>
                                        </tbody>
                                 </table>
                          </div>
                          </span> </a> 
                          
                          <?php
                          }
						  ?></td>
                      </tr>
                      
                      <!-- top level user end ---->
                      
               
                      <tr>
                        <td colspan="7" align="center"><img src="./Bolindia.biz_files/tree_arrow.gif" width="492">&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                      <!--22222222222222222222222222-->
                      
                      <!---- leg b start ---->
                      
                        
                      <!--- leg b end ------>
                      
                      
                      
                      
                      <tr>
                      
                      
                      
                      <!---- level 2 start ----->
                      
                        <td width="3"></td>
                                                    <?php
									                $schid=$_SESSION['reg_id'];
												  $sql= mysqli_query($conn ,"select * from tbl_paylife_registartion where   sponsor_id='$schid'   "); 
												         while($abc=mysqli_fetch_array($sql))           
														{
														?>
							<td width="242" align="center"> 
                        
                                 <div class="smalltxt" align="center"> 
                                                     <strong> <?php echo $abc['username']?></strong> </div>
                                                  <a class="info" href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=3395">
                                                    <img src="./Bolindia.biz_files/tree_red.png" align="middle" border="0" onMouseOver="do_get_downline_details(sponsor_id);">
                                                    <span class="smalltxt">
                          <div align="center" id="3395" class="error">
	 
                                <table width="100%" border="1" cellspacing="3" cellpadding="3" class=" ">
                                  <tbody>
                                       <tr class="tdOdd">
                                                        <td width="25%" align="right" class="maintxt"> <strong>Name :</strong></td>
                                                        <td width="25%" class="maintxt" nowrap="nowrap"><?php echo $abc['full_name']?></td>
                                               </tr><tr>
                                                        <td width="25%" align="right" class="maintxt"><strong>Date of joining</strong> </td>
                                                                        <?php $tmptime1 = strtotime($abc['create_date']);
                                                                        $tmpDeadline1 = date("d M, Y", $tmptime1);?>
                                                        <td width="25%" align="left" class="maintxt"><?php echo $tmpDeadline1 ?> </td>	
                                                 </tr><tr> 
                                                         <td align="right" class="maintxt"><strong>Total ID  :</strong></td>
                                                         <td align="left" class="maintxt">   <?php echo $abc['sponsor_id']?> </td>
                                                </tr><tr>
                                                        <td align="right" class="maintxt"><strong>Total Paid ID :</strong></td>
                                                        <td align="left" class="maintxt">0 </td>
                                        </tr>
	 
                                  </tbody></table>
                                   </div>
                                             </span> </a>
                                             
                                       </td>
									   
									   
									   <?php
											  }
											  ?>
                          
                                           </tr>
                      
                       <!---- level 2 End ----->
                        
                               <!---- leg b start ---->
                      
                        
                      <!--- leg b end ------>
                      
                        
                        
                       
                  
                       <!---- level 3 Start ----->
                      <tr>
                        <td width="3"></td>
                       
                                                 <?php
									$schid=$_SESSION['reg_id'];
									$sql= mysqli_query($conn ,"select *  from tbl_paylife_registartion where sponsor_id in (select reg_id from tbl_paylife_registartion where sponsor_id='$schid')  ");
								while($abc=mysqli_fetch_array($sql)) {?>            
						 <td width="242" align="center">             
                         <table width="93%" border="0" align="center" cellpadding="1" cellspacing="0">
                            <tbody>
                                <tr>
                                       <td colspan="7" align="center"><img src="./Bolindia.biz_files/tree_arrow2.gif" width="180"></td>
                               </tr><tr>
                                       <td width="-1"></td>
                                       <td width="50" align="center">                               
                                               <div class="smalltxt" align="center"> 
                                                     <strong><?php echo $abc['username']?></strong>
                                               </div>
                                                    <a class="info" href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=3395">
                                                    <img src="./Bolindia.biz_files/tree_red.png" align="middle" border="0" onMouseOver="do_get_downline_details(sponsor_id);">
                                                    <span class="smalltxt">
                          <div align="center" id="3395" class="error">
	 
                                <table width="100%" border="1" cellspacing="3" cellpadding="3" class=" ">
                                        <tbody>
                                      <tr class="tdOdd">
                                               <td width="25%" align="right" class="maintxt"> <strong>Name :</strong></td>
                                               <td width="25%" class="maintxt" nowrap="nowrap"><?php echo $abc['full_name']?></td>
                                      </tr><tr>
                                               <td width="25%" align="right" class="maintxt"><strong>Date of joining</strong> </td>
                                                                        <?php $tmptime1 = strtotime($abc['create_date']);
                                                                        $tmpDeadline1 = date("d M, Y", $tmptime1);?>
                                                <td width="25%" align="left" class="maintxt"><?php echo $tmpDeadline1 ?> </td>	
                                     </tr><tr> 
                                                <td align="right" class="maintxt"><strong>Total ID  :</strong></td>
                                                <td align="left" class="maintxt"><?php echo $abc['sponsor_id']?> </td>
                                     </tr><tr>
                                                <td align="right" class="maintxt"><strong>Total Paid ID :</strong></td>
                                                <td align="left" class="maintxt">0 </td>
                                     </tr>
                                       </tbody>
                                </table>
                             </div>
                                                      </span>
                                                      
                                           </a>
                                                            
                                
                                           </td>
                                                             
                               <td width="29"></td>
                              <td width="55" align="right">  
                              
                                                         
                                       <div class="smalltxt" align="center"> 
                                             <strong><?php echo $abc['username']?></strong>
                                        </div>
                                              <a class="info" href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=3395">
                                  <img src="./Bolindia.biz_files/tree_red.png" align="middle" border="0" onMouseOver="do_get_downline_details(sponsor_id);">
                                  <span class="smalltxt">
                                 <div align="center" id="3395" class="error">
                          
                          
	 
                            <table width="100%" border="1" cellspacing="3" cellpadding="3" class=" ">
                              <tbody><tr class="tdOdd">
                                          <td width="25%" align="right" class="maintxt"> <strong>Name :</strong></td>
                                          <td width="25%" class="maintxt" nowrap="nowrap"><?php echo $abc['full_name']?></td>
                                </tr><tr>
                                         <td width="25%" align="right" class="maintxt"><strong>Date of joining</strong> </td>
                                                                    <?php $tmptime1 = strtotime($abc['create_date']);
                                                                    $tmpDeadline1 = date("d M, Y", $tmptime1); ?>
                                         <td width="25%" align="left" class="maintxt"><?php echo $tmpDeadline1 ?> </td>	
                               </tr><tr> 
                                        <td align="right" class="maintxt"><strong>Total ID  :</strong></td>
                                        <td align="left" class="maintxt">   <?php echo $abc['sponsor_id']?> </td>
                               </tr><tr>
                                        <td align="right" class="maintxt"><strong>Total Paid ID :</strong></td>
                                        <td align="left" class="maintxt">0 </td>
                                    </tr>
                             
                              </tbody></table>
	                     </div>
                                  </span> </a>
                           
                                  </td>
                                 
                                 
                              <td width="27"></td>
                              <td width="50" align="right">                               
                               <div class="smalltxt" align="center"> 
                                      <strong><?php echo $abc['username']?> </strong>
                                </div>
                          <a class="info" href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=3395">
                               <img src="./Bolindia.biz_files/tree_red.png" align="middle" border="0" onMouseOver="do_get_downline_details(sponsor_id);">
                                           <span class="smalltxt">
                          <div align="center" id="3395" class="error">
	 
                    	<table width="100%" border="1" cellspacing="3" cellpadding="3" class=" ">
                      			<tbody><tr class="tdOdd">
                      				       <td width="25%" align="right" class="maintxt"> <strong>Name :</strong></td>
                        			      <td width="25%" class="maintxt" nowrap="nowrap"><?php echo $abc['full_name']?></td>
                          		</tr><tr>
                        			      <td width="25%" align="right" class="maintxt"><strong>Date of joining</strong> </td>
                         								<?php $tmptime1 = strtotime($abc['create_date']);
                                                            $tmpDeadline1 = date("d M, Y", $tmptime1);?>
                                         <td width="25%" align="left" class="maintxt"><?php echo $tmpDeadline1 ?> </td>	
                         		</tr><tr> 
                      				    <td align="right" class="maintxt"><strong>Total ID  :</strong></td>
                        			     <td align="left" class="maintxt">   <?php echo $abc['sponsor_id']?> </td>
                        		</tr><tr>
                                        <td align="right" class="maintxt"><strong>Total Paid ID :</strong></td>
                                         <td align="left" class="maintxt">0 </td>
                                 </tr>
	                           </tbody>
                        </table>
	                     </div>
                                 </span> 
                          </a>
                              
                            </td>
                          </tr>
                          </tbody></table>
                        </td>
                       
                          <?php
						  }
						  ?>
                  
                </tr>
              </tbody></table>
            			 <!---- level 3 End ----->
                            
                            <p style="font-size:16px;margin-top: 50px; "> Next Page:
				            <a href="http://bolindia.biz/userpanel/direct_level_tree.php?u_id=2737" style="padding-left:3px;color:#FF0000">1</a> </p>
                       </form>
           
  
 									</div>
          								</div>
                                                </div>
                            <!-- // Simple Input -->
                            <!-- Checkboxes & Radios -->
         
    
     
  
   
       
<!-- /#wrapper -->
<script src="./Bolindia.biz_files/jquery-1.10.2.js.download"></script>
<script src="./Bolindia.biz_files/jquery.cookie.js.download"></script>
<script type="text/javascript">
        var primaryColor = '#303641',
            dangerColor = '#F22613',
            successColor = '#2ecc71',
            warningColor = '#F5AB35',
            infoColor = '#3498db',
            inverseColor = '#111',
            cursorColor = ( $.cookie('cursorColor') ) ? $.cookie('cursorColor') : '#333';
        
                $.cookie('dev', false);
        
        // Setting URL 
        var url = 'D:\htdocs\iforexgold.com\userpanel\assets\css',
            time = '1411036864';

        var themeStyle = ( $.cookie('themeStyle') ) ? $.cookie('themeStyle') : 'style_default';
        
        if ( $.cookie('dev') == 'true') {
            $("#style_color").attr('href', url + 'less/'+themeStyle+'.less?' + time);
        } else {
            $("#style_color").attr('href', url + 'css/'+themeStyle+'.css');
        }
    </script>
<!-- jQuery easing | Script -->
<script src="./Bolindia.biz_files/jquery.easing.min.js.download"></script>
<!-- Bootstrap minimal -->
<script src="./Bolindia.biz_files/bootstrap.min.js.download"></script>
<!-- Bootstrap Switch | Script -->
<script src="./Bolindia.biz_files/bootstrap-switch.js.download"></script>
<!-- Sparkline | Script -->
<script src="./Bolindia.biz_files/jquery.sparkline.js.download"></script>
<!-- Easy Pie Charts | Script -->
<script src="./Bolindia.biz_files/jquery.easypiechart.min.js.download"></script>
<!-- Date Range Picker | Script -->
<script src="./Bolindia.biz_files/moment.min.js.download"></script>
<script src="./Bolindia.biz_files/daterangepicker.js.download"></script>
<!-- BlockUI for reloading panels and widgets -->
<script src="./Bolindia.biz_files/jquery.blockui.js.download"></script>
<script src="./Bolindia.biz_files/jquery-ui.custom.min.js.download"></script>
<script src="./Bolindia.biz_files/holder.js.download"></script>
<script src="./Bolindia.biz_files/jquery.metisMenu.js.download"></script>
<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="./Bolindia.biz_files/raphael-2.1.0.min.js.download"></script>
<script src="./Bolindia.biz_files/jquery.flot.js.download"></script>
<script src="./Bolindia.biz_files/jquery.flot.tooltip.min.js.download"></script>
<script src="./Bolindia.biz_files/jquery.flot.resize.js.download"></script>
<script src="./Bolindia.biz_files/jquery.nicescroll.min.js.download"></script>
<!-- Init Scripts - Include with every page -->
<script src="./Bolindia.biz_files/init.js.download"></script>
<!-- Page-Level Demo Scripts - Dashboard && Calendar - Use for reference -->
<!-- // <script src="assets/js/jquery-ui.custom.min.js"></script> -->
<!-- // <script src='assets/js/plugins/calendar/lib/moment.min.js'></script> -->
<script src="./Bolindia.biz_files/fullcalendar.js.download"></script>
<script src="./Bolindia.biz_files/calendar.js.download"></script>
<!-- Page-Level Demo Scripts - Maps - Use for reference -->
<script src="./Bolindia.biz_files/js"></script>
<script type="text/javascript">
        var load = true;
        </script>
<script src="./Bolindia.biz_files/jquery-jvectormap-1.2.2.min.js.download"></script>
<script src="./Bolindia.biz_files/jquery-jvectormap-world-mill-en.js.download"></script>
<script src="./Bolindia.biz_files/maps.js.download"></script>
<script src="./Bolindia.biz_files/dashboard.js.download"></script>
<!-- Bootstrap Tour CSS - Include in Dashboard|Fleet Management|Page Tour Page -->



</body></html>