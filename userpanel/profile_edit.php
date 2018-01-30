<?php session_start();
include('../conn.php');    
include('header.php'); 
include('sidebar.php'); 
include('../function.php'); 
if (!$_SESSION['user_id']) {
    ob_start();
    echo "<script type='text/javascript'>window.location=\"../login.php\";</script>";
}
$userId = $_SESSION['user_id'];
if(isset($_POST['updt_submit'])){
 $sponsor_id=addslashes($_POST['sponsor_id']);
 $full_name=addslashes($_POST['full_name']);
 $email_id=addslashes($_POST['email_id']);
 $mobile=addslashes($_POST['mobile']);
 $address=addslashes($_POST['address']);
 $country=addslashes($_POST['country']);
 $state=addslashes($_POST['state']);
 $city=addslashes($_POST['city']); 
 $pincode=addslashes($_POST['pincode']);
 $pan_number=addslashes($_POST['pan_number']);
 $aadhar_number=addslashes($_POST['aadhar_number']);
 $user_image=addslashes($_FILES['user_image']['name']);
if($user_image)
{
    move_uploaded_file($_FILES['user_image']['tmp_name'],"../images/user-image/".$_FILES['user_image']['name']);
}
$sql_updt= "update users set full_name='$full_name' , email='$email_id' , mobile_no='$mobile' ,address='$address' ,city_id='$city', state_id='$state' ,country_id='$country' , pincode='$pincode' ,pan_card_number='$pan_number',aadahr_card='$aadhar_number', user_image='$user_image' where user_id='$userId'";

$qr_updt=($sql_updt);     
if(mysqli_query($conn, $qr_updt)===true){               
 $msg="Updated Successful ";
}
else
{
$error="Error not Updated";	
}
}
$row= get_user_details($userId); 
$sponser_name = get_sponser_name($row['sponsor_id']);
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
                           <h4>Update Profile</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">  
                                    <form role="form" method="POST" <?php if(isset($_GET['userId'])){ echo "profile_view.php"; } else{  echo "profile.php"; }  ?>  enctype="multipart/form-data">
                                     <?php if(isset($msg)){ ?>
                                        <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $msg; ?>
                            </div>
                            <?php } ?>
                             <?php if(isset($error)){ ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <?php echo $error; ?>
                            </div>
                                <?php } ?> 
                                     
                                       
                                        <div class="form-group">
                                            <label>SponsorID</label>
                                            <input class="form-control"  value="<?php echo $sponser_name;?>" type="text"   name="sponsor_id" placeholder="Sponsor ID" readonly="readonly">      
                                        </div>
                                       <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control"  value="<?php echo $row['username'];?>" type="text"   name="sponsor_id" placeholder="Sponsor ID" readonly="readonly">      
                                        </div>
                                         <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control"  value="<?php echo $row['full_name'];?>" type="text"   name="full_name" placeholder="Full Name">      
                                        </div>
                                         <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control"  value="<?php echo $row['email'];?>" type="text"   name="email_id" placeholder="Email ID">      
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control"  value="<?php echo $row['mobile_no'];?>" type="text"   name="mobile" placeholder="Phone ">      
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control"  value="<?php echo $row['address'];?>" type="text"   name="address" placeholder="Address">      
                                        </div>
                                        <div class="form-group">
                                         <label>Country</label>
                                             <?php
                                              global $conn;
                                              $query = $conn->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                              $rowCount = $query->num_rows;
                                           ?>
                                        <select id="country" name="country" class="form-control">
                                            <option value="">Select Country</option>
                                            <?php
                                            if($rowCount > 0){
                                                while($row1 = $query->fetch_assoc()){ 
                                                    ?>
                                                    <option value="<?php echo $row1['country_id']; ?>" <?php 
                                                    if ($row['country_id'] == $row1['country_id']) {
                                                        echo ' selected=selected';
                                                    }
                                        ?>><?php echo $row1['country_name'] ?></option>
                                                    <?php
                                                }
                                            }else{
                                                echo '<option value="">Country not available</option>';
                                            }
                                            ?>
                                        </select>
                                        </div>
                                          <div class="form-group">
                                            <label>State</label>
                                            <select id="state" name="state" class="form-control">
                                             <option value="">Select country first</option>
                                             </select>
                                          </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select id="city" name="city" class="form-control">
                                            <option value="">Select state first</option>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input class="form-control"  value="<?php echo $row['pincode'];?>"    name="pincode" placeholder="Pincode">      
                                        
                                        </div>
                                          <div class="form-group">
                                            <label>Pan Number</label>
                                            <input class="form-control"  value="<?php echo $row['pan_card_number'];?>"    name="pan_number" placeholder="Pan Number">      
                                        
                                        </div>
                                           <div class="form-group">
                                            <label>Aadhar Card Number</label>
                                            <input class="form-control"  value="<?php echo $row['aadahr_card'];?>"    name="aadhar_number" placeholder="Aadhar Card Number">      
                                        
                                        </div>
                                       <div class="form-group">
                                            <label>User Image</label>
                                            <input type="file" name="user_image" id="file">
                                        <img src="../images/user-image/<?php echo $row['user_image'];?>" style=" width:150px; height:150px; " alt="150 x 150"/>
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var countryID ='<?php echo $row['country_id']; ?>'
    if(countryID == 0) {
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    }
    else
    { 
        
        $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            });   
    }
    
    var stateID = '<?php echo $row['state_id']?>';
    if(stateID == 0){
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    }
    else
    {
        $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        
    }

});
</script>