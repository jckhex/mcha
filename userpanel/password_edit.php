<?php
error_reporting(0);
session_start();
include('../conn.php');
include('header.php');
include('sidebar.php');
include ('../function.php');
$userId = $_SESSION['user_id'];
if (isset($_POST['updt_submit'])) {
    if ((empty($_SESSION['user_id'])) || empty($_POST['oldpassword']) || empty($_POST['newpassword']) || empty($_POST['cpassword'])) {
        $msg = 'Please enter required information';
    } elseif ($_POST['newpassword'] != $_POST['cpassword']) {
        $msg = "New password and confirm password not match";
    } else {
        $resultId = checkPassword($userId, $_POST['oldpassword']);
        if ($resultId > 0) {
            $success = updatePassword($userId, $_POST['newpassword']);
            if ($success) {
                $msg = "Password updated successfully!";
            } else {
                $msg = "Error occurred";
            }
        } else {
            $msg = "Wrong password";
        }
    }
}
?>  
<div id="page-wrapper" style="min-height: 411px;">
    <div class="row">
        <div class="col-lg-12">
        </div>  
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Username & Password Edit</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">  
                        <form role="form" method="POST"   enctype="multipart/form-data">
                                      <?php if (isset($msg)) { ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                           <?php echo $msg; ?>
                                           </div>
                                           <?php } ?>
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input class="form-control"  type="password" id="oldPassword"   name="oldpassword" placeholder="Old Password">      
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input class="form-control"  type="password" id="newpassword"   name="newpassword" placeholder="New Password">      
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control"  type="password" id="cpassword"  name="cpassword" placeholder="Confirm Password">      
                                </div>
                                <button type="submit" name="updt_submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>  
                       <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>    
<?php include('footer.php'); ?>  