<?php
include ('conn.php');
include('header.php');
?>
<div id="main-other"><!--start other-->
    <div id="sub-other">
        <div class="desh-head">
            <h4>Forgot your password</h4>
        </div> 
        <div class="desh-border">
            <img src="./Bolindia.biz_files/regborder.png">
        </div>
        <div class="other-box">

            <div class="other-left"><!--register left side-->
                <div class="two-btn">
                    <div class="btn-one">
                        <a href="http://www.paylife.in/contact/" class="a-link">Contact Us</a>
                    </div>
                    <div class="have">
                        <a href="registration.php" class="a-link">Register  An Account</a>
                    </div>
                </div>
                <div class="other-boxbg-">
                    <p>Enter your email address. Your username and password will be emailed to you.</p>
                </div>
            </div>            <!--end register left side-->
            <div class="other-right"><!--register right side-->
                <div class="required">
                    <p>Enter Your Information</p>
                </div>
                <div class="boxes-all">
                    <div class="box-onetype-">
                        <p></p>
                        <form name="form1" method="post" enctype="multipart/form-data" onSubmit="return validateForm(this, 0, 0, 0, 1, 8);">
                            <div class="box-tittle">
                                <p>Email   :</p>
                            </div>
                            <div class="box-type">
                                <input name="email" type="text" alt="blank" emsg="Please enter your Email">
                            </div>


                            <div class="login-log">
                                <input type="submit" name="forget_submit" value="Send Now">
                            </div>

                        </form></div>
                </div>
            </div><!--end register right side-->


        </div>
    </div>
</div>
<!-- forget Email Send --->
<?php
if (isset($_POST['forget_submit'])) {
echo "testing";
    $email = addslashes($_POST['email']);
    $mySQL = "select * from register WHERE email='$email'";
    $tmpSQL = mysqli_query($conn, $mySQL);
    $tmpArray = mysqli_fetch_array($tmpSQL);
    $count = mysqli_num_rows($tmpSQL);
    if ($count > 0) {
        $rend = rand(10, 10000);
        $timezone = new DateTimeZone("Asia/Kolkata");
        $date = new DateTime();
        $date->setTimezone($timezone);
        $current_time_current_date = $date->format("Y/m/d G:ia");
        /* --------------- instreset Otp end ------------------ */
        $forget_query = "INSERT INTO password_reset(email,password_reset_otp,current_time_date) VALUES ('$email','$rend','$current_time_current_date')";

        if (mysqli_query($conn, $forget_query)) {

            /* --------------- mail start ------------------ */
            require 'PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;

            //$mail->isSMTP();                                   // Set mailer to use SMTP
            $mail->Host = 'admin@socialmediacourse.com';                    // Specify main and backup SMTP servers
            $mail->SMTPAuth = false;                            // Enable SMTP authentication
            $mail->Username = 'admin@megascholarships.com';          // SMTP username
            $mail->Password = 'Test123#'; // SMTP password
            $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                 // TCP port to connect to

            $mail->setFrom('admin@megascholarships.com', 'admin');
            $mail->addReplyTo('admin@megascholarships.com');
            $mail->addAddress($email);   // Add a recipient devinder2006@gmail.com
            //$mail->addAddress('devinder2006@gmail.com');   // Add a recipient devinder2006@gmail.com
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            $mail->isHTML(true);  // Set email format to HTML
            //https://www.megascholarships.com/forget_password.php
            //$bodyContent = '<h1>MegaScholarships.com: Request to Reset Account Password</h1>';
            //$bodyContent .= '<p>Your OTP Code: <b>'. $rend .'</b> .</p>';
            $bodyContent .= '<p>Paylife has received a request to reset the password for the account <b>' . $email . '</b> .</p>';
            //$bodyContent .= '<p>Please check link :<b><a target="_blank" href="https://www.megascholarships.com/otp_verification.php">Click here to change your password</a></b> .</p>';
            $bodyContent .= '<p>If you did not request this change, please disregard this email.</p>';
            $bodyContent .= '<p>If you do wish to choose a new password, please go to:</p>';
            $bodyContent .= '<p>https://www.paylife.com/forget_password.php?otp=' . $rend . '</p>';

            $mail->Subject = 'MegaScholarships.com: Request to Reset Account Password';
            $mail->Body = $bodyContent;
            if (!$mail->send()) {
                echo '<center>';
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                echo '</center>';
            } else {
                header('https://www.paylife.in/');
            }
            /* --------------- mail end ------------------ */
        } else {
            header('https://www.paylife.in/');
        }
        /* --------------- instreset Otp end ------------------ */
        echo "<script>alert('A link to create a new password has been emailed to " . $email . " if you have questions or experience problems, please email info@megascholarship.com')</script>";
    } else {

        echo "<script>alert('does  not valid your email ....')</script>";
    }
}
?>   

<!-- forget Email Send End --->	


