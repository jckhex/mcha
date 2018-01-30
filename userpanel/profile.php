<?php
error_reporting(1);
error_reporting(E_ALL);
session_start();
include('../conn.php');
require_once('../function.php');
if (!$_SESSION['is_login']) {
    ob_start();
    echo "<script type='text/javascript'>window.location=\"../login.php\";</script>";
} else {
    $userId = $_SESSION['user_id'];
    $row= get_user_details($userId);
    if(!$row){ $msg='User Not found!';}
    ?> 

    <div id="wrapper">
        <!-- Navigation -->
        <?php include('header.php'); ?>
        <?php include('sidebar.php'); ?> 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading padding padding-all" style="text-align:center;     ">
                            NEWS & EVENT                      
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-4 -->
                                <div class="col-lg-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" style="text-align:center;">
                                            <marquee align="absmiddle" direction="left" behavior="top" width="100%" style="font-size:25px; background-color:#000; color:#fff;" class="whitetxt" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">
                                                RECHARGE SERVICE OF PAYLIFE WILL NOT AVAILABLE FOR TECHNICAL REASONS. SORRY FOR INCONVENIENCE TEAM PAYLIFE 
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center;">
                                PERSONAL DETAILS                           
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <tbody>
                                   <?php if(isset($msg)) {echo $msg;}?>
                                <tr><th>Full name</th>
                                    <td><?php echo $row['full_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td><?php echo $row['username'] ?></td>
                                </tr>
                                <tr> <th>Sponsor</th>
                                    <td><?php echo $row['sponsor_id'] ?></td>
                                </tr>
                                <tr><th>Joining Date</th>

                                    <td><?php echo $row['register_date'] ?></td>
                                </tr>
                                <tr><th>Email</th>
                                    <td><?php echo $row['email'] ?></td>
                                </tr>
                                <tr><th>Mobile</th>
                                    <td><?php echo $row['mobile_no'] ?></td>
                                </tr>
                                   
                                       </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-8">
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                         </div>
                            <!-- /.panel-body -->
                  </div>
                    </div>
                    <div class="col-lg-4">

            <!-- /.panel -->
           <div class="panel panel-default">
          <div class="panel-heading" style="text-align:center; font-weight:bold;">
          
              <span style="text-transform:uppercase;"> <?php echo $row['full_name']; ?></span>
                       </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                               </tr>
                                                </thead>
                                                <tbody>
   
                                <tr>
                                    <td style="text-align:center;"> <img src="../images/user-image/<?php echo $row['user_image'] ?>"style=" width:200px; height:230px; padding:10px; " />
                                       <h4>Size:413x531 pixels</h4></td>

                                </tr>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-8">
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.panel-body -->
                      </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->

                <div class="row">
                    <div class="col-lg-12">
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center;">
                                SUMMARY REPORTS                          
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                   <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                MY TEAM
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>4</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                MY DIRECT
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>3</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                MY TOPUP
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                DIRECT INCOME
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                CYCLE INCOME
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                ROYALTY INCOME
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                MY EARNING
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                WORKING WALLET
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">
                                                BOL INDIA WALET
                                            </div>
                                            <div class="panel-body" style="text-align:center; font-weight:bold;">
                                                <p>INR 0.00</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                </div></div></div></div></div>



                <!--- TABLE CYCLE REPORTS ---->
      <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center;">
                                CYCLE REPORTS
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>CYCLE</th>
                                            <th>AMOUNT RECEIVED</th>
                                            <th>UPGRADE</th>
                                            <th>PENDING</th>
                                            <th>NET PROFIT</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>CYCLE 1</td>
                                            <td>INR 0.00</td>
                                            <td>INR 1,000.00</td>
                                            <td>INR 1,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>

                                        </tr>
                                        <tr class="even gradeC">
                                            <td>CYCLE 2</td>
                                            <td>INR 0.00</td>
                                            <td>INR 2,000.00</td>
                                            <td>INR 2,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>CYCLE 3</td>
                                            <td>INR 0.00</td>
                                            <td>INR 4,000.00</td>
                                            <td>INR 4,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>CYCLE 4</td>
                                            <td>INR 0.00</td>
                                            <td>INR 8,000.00</td>
                                            <td>INR 8,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>CYCLE 5</td>
                                            <td>INR 0.00</td>
                                            <td>INR 16,000.00</td>
                                            <td>INR 16,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>CYCLE 6</td>
                                            <td>INR 0.00</td>
                                            <td>INR 32,000.00</td>
                                            <td>INR 32,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>CYCLE 7</td>
                                            <td>INR 0.00</td>
                                            <td>INR 64,000.00</td>
                                            <td>INR 64,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>CYCLE 8</td>
                                            <td>INR 0.00</td>
                                            <td>INR 128,000.00</td>
                                            <td>INR 128,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>CYCLE 9</td>
                                            <td>INR 0.00</td>
                                            <td>INR 256,000.00</td>
                                            <td>INR 256,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>CYCLE 10</td>
                                            <td>INR 0.00</td>
                                            <td>INR 512,000.00</td>
                                            <td>INR 512,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>CYCLE 11</td>
                                            <td>INR 0.00</td>
                                            <td>INR 1,024,000.00</td>
                                            <td>INR 1,024,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>CYCLE 12</td>
                                            <td>INR 0.00</td>
                                            <td>INR 2,048,000.00</td>
                                            <td>INR 2,048,000.00</td>
                                            <td class="center">INR 0.00</td>
                                            <td class="center">view Details</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12">

                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center;">
                                SPONSER LINK                         
                            </div>
                            <div class="panel-body">
                                <div class="row">


                                    <!-- /.col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="text-align:center; ">

                                                http://paylife.in/~paylife/?ref=<?php echo $row['username']  ?>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- /.col-lg-4 -->
                                </div>
                            </div>
                        </div>
                    </div>

    <?php include('footer.php'); ?>  

<?php } ?>