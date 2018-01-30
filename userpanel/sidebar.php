  
  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>   Account Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="profile_view.php">View Profile</a>  
                                </li>
                                <li>
                                    <a href="profile_edit.php">Update Profile</a>     
                                </li>
                                 <li>
                                    <a href="password_edit.php">Change Username Password</a>     
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> My Team<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                           
                                  <?php
								  $admin=$_SESSION['username'];
								  //echo "$admin";
								   if ( $admin == "admin" ) { ?>
                                 <li>
                                    <a href="total_count_member.php">Total Count Member</a>  
                                </li>
                                <?php	}else{ ?>
                           
							<li>
                                    <a href="direct_list.php"> My Direct</a>  
                                </li>
                                <li>
                                    <a href="downline_list.php">Total Downline</a>     
                                </li>
                                <?php } ?>
                                 <li>
                                    <a href="direct_downline_list.php">Level Wise Report</a>     
                                </li> 
                                 <li>
                                    <a href="test_tree.php">My network tree</a>     
                                </li>   
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                         <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Paylife Wallet<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="my_ewallet_statement.php">Wallet Statement</a>     
                                </li>  
                                
                                  <li>
                                    <a href="my_ewallet_investment.php">Topup Account</a>     
                                </li>  
                                <li>
                                    <a href="my_ewallet_fund_transfer.php">Fund Transfer to User</a>     
                                </li> 
                                 <li>
                                    <a href="my_topup_list.php">My Topup History</a>     
                                </li>
                            </ul>
                             </li>
                            <!-- /.nav-second-level -->
                            <li>
                            <a href="#"><i class="fa fa-calendar-o fa-fw"></i> Working Wallet<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="direct_income.php">Direct Income</a>  
                                </li>
                                <li>
                                    <a href="cycle_income.php">Cycle Income</a>     
                                </li> 
                                  
                                  <li>
                                    <a href="withdrawal_details.php">WithDrawal History</a>     
                                </li> 
                                  <li>
                                    <a href="account_statement.php">Account Statement</a>     
                                </li> 
                                  <li>
                                    <a href="withdrawal_request.php">Withdrawal Request</a>     
                                </li> 
                                
                                  <li>
                                    <a href="transfer_in_my_account.php">Transfer in My Wallet</a>     
                                </li> 
                                  <li>
                                    <a href="upgrade_account.php">Upgrade Account</a>     
                                </li>   
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                          <li>
                            <a href="#"><i class="fa fa-calendar-o fa-fw"></i>  Recharge<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mobile_recharge.php">Mobile Recharge</a>  
                                </li>
                                <li>
                                    <a href="dth_recharge.php">DTH Recharge</a>     
                                </li> 
                                 <li>
                                    <a href="data_card_recharge.php">DATA Card Recharge</a>     
                                </li>   
                            </ul>
                            <!-- /.nav-second-level -->
                            </li> 
                            <li>
                            <a href="complain.php"><i class="fa fa-table fa-fw"></i> Complaint Box<span class="fa arrow"></span></a>
                           
                            <!-- /.nav-second-level -->
                         
                        </li>
                       
                         <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout<span class="fa arrow"></span></a>
                           
                         
                        </li>
                          
                         <!--  <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>-->
                        </li>
                     
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>