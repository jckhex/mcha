<?php
include('conn.php');
include('header.php');
include ('function.php');
if (isset($_POST['btnregistration'])) {
    $sponsor_id = addslashes($_POST['sponsor_id']);
    $spo_id = get_id_of_user($sponsor_id);
    $username = addslashes($_POST['username']);
    $password = $_POST['password'];
    $password1 = md5($_POST['password']);
    $confirmPassword = $_POST['confirmPassword'];
    $full_name = $_POST['full_name'];
    $email = addslashes($_POST['email']);
    $phonecode = addslashes($_POST['phonecode']);
    $mobile = addslashes($_POST['mobile']);
    $ischkemail = email_exists($email);
    $ischkuser = user_exists($username);

    if (!$spo_id) {
        $error = "Sponse id not found !";
        $code = 1;
    } elseif (!ctype_alpha($username)) {
        $error = "letters only !";
        $code = 2;
    } elseif ($ischkuser) {
        $error = "User already exist !";
        $code = 2;
    } elseif ($password != $confirmPassword) {
        $error = "Password not match !";
        $code = 3;
    } elseif (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
        $error = "not valid email !";
        $code = 4;
    } elseif ($ischkemail) {
        $error = "Email already exist !";
        $code = 4;
    }  else if (!is_numeric($mobile)) {
        $error = "Invalid mobile No. !";
        $code = 5;
    }  else if(strlen($mobile)!=10)
        {
         $error = "Invalid mobile No!";
         $code = 5;
        } 
        else if(mobile_exists($mobile))
        {
         $error = "Mobile no exits!";
         $code = 5;
        }else{
        $insert_gr = "INSERT INTO users(sponsor_id,username,password,full_name,email,phonecode,mobile_no)"
                . " VALUES ('$spo_id' , '$username' , '$password1' , '$full_name' , '$email' ,'$phonecode','$mobile')";
        $query = ($insert_gr);
        if (mysqli_query($conn, $query)) {
            $msg = "Successfully registerd";
        }
    }
}
?>

<script type="text/javascript">
    function checksponsor()
    {
        var sponsorId = document.getElementById("sponsor_id").value;
        if (sponsorId)
        {
            $.ajax({
                type: 'post',
                url: 'checkdata.php',
                data: {
                    sponsor: sponsorId,
                },
                success: function (response) {
                    $('#sponsor').html(response);

                    if (response == "OK")
                    {
                        return true;
                    } else
                    {
                        return false;
                    }
                }
            });
        } else
        {
            $('#sponsor').html("");
            return false;
        }
    }
</script>
<!--end slider part-->
<div id="main-other"><!--start other-->
    <div id="sub-other">
        <div class="desh-head">
            <h4>Member Registration</h4>
        </div>
        <div class="desh-border">
            <img src="./Bolindia_registration.biz_files/regborder.png">
        </div>
        <div class="other-box">

            <div class="other-left"><!--register left side-->
                <div class="two-btn">
                    <div class="btn-one">
                        <a href="forget_password.php" class="a-link">Forgot Password?</a>
                    </div>
                    <div class="have">
                        <a href="login.php" class="a-link">Login Now</a>
                    </div>
                </div>
                <div class="other-boxbg-">
                    <p> Please Register Your Account !</p>
                </div>
            </div>			<!--end register left side-->
            <div class="other-right"><!--register right side-->
                <div class="required">
                    <p>Enter Your Information</p>
                </div>
                <div class="boxes-all">
                    <?php
                    if (isset($error)) {?>
                     <div id="error" style="color:red; "><?php echo $error; ?></div>
                        <?php } ?>
                    <div class="alert alert-success">
                    <?php if (isset($msg)) {  echo $msg; } ?>
                    </div>
                    <p></p>
                    <form role="form" method="post" class="form-theme"  enctype="multipart/form-data" >

                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Sponsor ID :</p>
                            </div>
                            <div class="box-type">
                                <input name="sponsor_id" id='sponsor_id' type="text" onkeyup="checksponsor();" required="required">
                                <span id="sponsor"></span>
                            </div>
                        </div>
                        <br>
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Username :</p>
                            </div>
                            <div class="box-type">
<input name="username"  type="text" required="required" value="<?php if (isset($ischkuser)) { echo $username;} ?>"  <?php if (isset($code) && $code == 1) {echo "autofocus"; } ?> >

                            </div>
                        </div>  
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Password :</p>
                            </div>
                            <div class="box-type">
                                <input name="password" type="password" id="txtPassword" required="required" >
                            </div>
                        </div>
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Confirm Password :</p>
                            </div>
                            <div class="box-type">
                                <input name="confirmPassword" id="txtConfirmPassword" type="password" required="required">
                            </div>
                        </div>

                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Full Name :</p>
                            </div>
                            <div class="box-type">
                                <input name="full_name" type="text" required="required" value="<?php if (isset($full_name)) { echo $full_name; } ?>"  >
                            </div>
                        </div>
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Email Id :</p>
                            </div>
                            <div class="box-type">
<input name="email" type="text" required="required" value="<?php if (isset($email)) { echo $email; } ?>"  <?php if (isset($code) && $code == 4) { echo "autofocus"; } ?>>
                            </div>
                        </div>
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>Mobile :</p>
                            </div>
                            <div class="box-type">
                                <select name="phonecode"  style="float:left; width:120px; " class="inputbox" required="required">
                                    <option value="">Country Code</option>
                                    <?php
                                    $sql = "select country_id, country_name,phonecode from countries";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row['phonecode']; ?>" <?php
                                        if ($row['phonecode'] == 91) {
                                            echo ' selected=selected';
                                        }
                                        ?>><?php echo '+' . $row['phonecode'] . ' ' . $row['country_name']; ?></option>
                                    <?php } ?>
                                </select>
                                <input type="text" id="mobile" name="mobile" maxlength="17" required="required" style="width:200px; margin-left:8px;" value="<?php if (isset($mobile)) { echo $mobile; } ?>"  <?php if (isset($code) && $code == 5) { echo "autofocus"; } ?> class="inputbox smallbox" >
                            </div>
                        </div>
                        
                        <div class="box-onetype-">
                            <div class="box-tittle">
                                <p>&nbsp;</p>
                            </div>
                            <div class="box-type">
                                <input type="checkbox" name="terms" >
                                I Agree with the <a href="http://www.paylife.in/terms/" style="color:#FF0000;"> Terms &amp; Conditions</a> 
                            </div>
                        </div>
                        <br>
                        <div class="login-log">
                           
                            <input type="submit" name="btnregistration" value="Sign up">
                        </div>
                    </form>
                </div>
            </div><!--end register right side-->
        </div>
    </div>
</div>

</body></html>
