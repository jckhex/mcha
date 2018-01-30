<?php
session_start();
include ('../conn.php');
include('header.php'); 
include('sidebar.php'); 
include ('../function.php');
if (!$_SESSION['user_id']) {
    ob_start();
    echo "<script type='text/javascript'>window.location=\"../login.php\";</script>";
}
 $userId = $_SESSION['user_id'];
 $row= get_user_cscity($userId);
?> 
<style>.ft{float:right;}</style>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-angle-double-down"></i> View Profile</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        Online Account Details                        
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <th class=" col-lg-4 col-md-4">Username</th>
                                                <td  class=" col-lg-8 col-md-8"><?php echo $row['username'] ?></td>
                                            </tr>
                                            <tr><th class="ft_right">Full name</th>
                                                <td><?php echo $row['full_name'] ?></td>
                                            </tr>
                                            <tr><th class="ft_right">Email</th>
                                                <td><?php echo $row['email'] ?></td>
                                            </tr>
                                            <tr><th class="ft_right">Mobile</th>
                                                <td><?php echo $row['mobile_no'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>

                        </div>
                    </div></div></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        Personal Details                    
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                      <tbody>
                                                <tr>
                                                    <th class=" col-lg-4 col-md-4">Address</th>
                                                    <td class=" col-lg-8 col-md-8"><?php echo $row['address'] ?></td>
                                                </tr>
                                                <tr><th>City</th>
                                                    <td><?php echo $row['city_name'] ?></td>
                                                </tr>
                                                <tr> <th>State</th>
                                                    <td><?php echo $row['state_name'] ?></td>
                                                </tr>
                                                <tr><th>Country</th>
                                                    <td><?php echo $row['country_name'] ?></td>
                                                </tr>
                                                <tr><th>Postal Code</th>
                                                    <td><?php echo $row['pincode'] ?></td>
                                                </tr>
                                                <tr><th>Pan Card Number</th>
                                                    <td><?php echo $row['pan_card_number'] ?></td>
                                                </tr>
                                                <tr><th>Aadhar Number</th>
                                                    <td><?php echo $row['aadahr_card'] ?></td>
                                                </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div></div>
<?php include('footer.php'); ?>