<?php
session_start();
include('conn.php');
include('header.php');

if (isset($_POST['login_submit'])) {
    $username = addslashes($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "select user_id,sponsor_id,username,role from users WHERE username='$username' and password='$password'";
    $tmpSQL = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($tmpSQL);
    $count = mysqli_num_rows($tmpSQL);
    if ($count > 0) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['is_login'] = true;
        echo "<script>window.location.href='userpanel/profile.php'</script>";
    } else {

        $msg=  "invalid username and password";
    }
}
?> 

<!--end slider part-->
<div id="main-other"><!--start other-->
    <div id="sub-other">
        <div class="desh-head">
            <h4>Member Log In</h4>
        </div>
        <div class="desh-border">
            <img src="./Bolindia.biz_files/regborder.png">
        </div>

        <div class="other-box">

            <div class="other-left"><!--register left side-->
                <div class="two-btn">
                    <div class="btn-one">
                        <a href="forget_password.php" class="a-link">Forgot Password?</a>
                    </div>
                    <div class="have">
                        <a href="registration.php" class="a-link">JOIN NOW</a>
                    </div>
                </div>
                <div class="other-boxbg-">
                    <p> Please Enter Username and Password !</p>
                </div>
            </div>			<!--end register left side-->
            <div class="other-right"><!--register right side-->
                <div class="required">
                    <p>Enter Your Information</p>
                </div>
                <?php if(isset($msg)){ ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <?php echo $msg; ?>
                            </div>
                <?php } ?> 
                
                <div class="boxes-all">
                    <div class="box-onetype-">
                        <p></p>
                        <form role="form" method="POST" id="login"> 
                            <div class="box-tittle">
                                <p>  Username :</p>
                            </div>
                            <div class="box-type">
                                <input name="username" type="text"  emsg="Please enter your username">
                            </div>
                    </div>
                    <div class="box-onetype-">
                        <div class="box-tittle">
                            <p>  Password :</p>
                        </div>
                        <div class="box-type">
                            <input type="password" name="password" emsg="Please enter your Password">
                        </div>
                    </div>  
                    <br>

                    <div class="login-log">
                        <input type="submit" name="login_submit" value="Log in">
                    </div>
                    </form>
                </div>
            </div><!--end register right side-->



        </div>
    </div>
</div>
</body></html>
<!-------login form -->
  
