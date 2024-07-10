<?php
include '../dashboard/includes/connection.php';
session_start();
ob_start();
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//Load Composer's autoloader

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Prepared Statement (Parameterized Query)
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // 2. Parameter Binding
    mysqli_stmt_bind_param($stmt, "ss", $email, $password); // "ss" indicates both are strings

    // 3. Execute the Statement
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result->num_rows > 0) {
        try {
                //Server settings
                $mail->SMTPDebug = 0; //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'mail.trustronce.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'support@trustronce.com'; //SMTP username
                $mail->Password = 'oc234TaM12!'; //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
                $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('support@trustronce.com', 'Support');
                $mail->addAddress($email); //Add a recipient               //Name is optional

                $mail->addCC('support@trustronce.com');

                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'You just signed in?';
                $mail->Body = '
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Octastrem!</title>
</head>

<body style="margin: 0; padding: 0; background-color: #fff; height: 100%; width: 100%;">
    <div style="display: flex; justify-content: center;">
        <img src="https://trustronce.com/octastremlogowhite.png" alt="logo" />
    </div>
    <div style="background-color: #09055e; padding: 5rem 0;" class="header">
        <ul style="list-style-type: none; padding: 0; margin: 0; text-align: center;">
            <li style="display: inline-block; margin-right: 1rem;">
                <a style="color: #fff;" href="https://trustronce.com/dash/auth/login.php">My account</a>
            </li>
            <li style="display: inline-block; margin-right: 1rem;">
                <a style="color: #fff;" href="https://trustronce.com/faq.php">FAQ</a>
            </li>
            <li style="display: inline-block;">
                <a style="color: #fff;" href="https://trustronce.com/about.php">About Us</a>
            </li>
        </ul>
    </div>
    <div style="position: relative; top: -30px; padding-top: 20px; padding-bottom: 20px;" class="container">
        <h4 style="font-size: 20px; padding-top: 15px; padding-bottom: 5px; color: #1a1a1a; font-family: Aileron; font-weight: 700; word-wrap: break-word;">
            Hey there, did you just sign into your account?</h4>
       
        <h5>A login was just noticed, if you dont recognize this login kindly take precautionary measures.</h5>
    </div>
</body>

</html>


';

                $mail->send();
             
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        // Generate a random OTP
        $otp = random_int(1000, 9999); // Use random_int for cryptographically secure random numbers

        echo '<div class="alert alert-success">Login authenticated! Redirecting Now....</div>';
        header("location: ../dashboard/main.php");

    } else {
        echo "<script>alert('Whoops! Email or Password is incorrect')</script>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $website->description }}">
    <meta name="keywords" content="{{ $website->keywords }}">
    <link href="{{ asset('storage/'.str_replace('public/', '', $company->favicon))}}" rel="icon">
    <title>Octastrem | Login</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login" style="background-color:#fff;">
    <!-- Login Content -->
    <div class="container-login" id="home">
        <div class="row justify-content-center">
            <div style="padding: 0;" class="col-xl-12 col-lg-12 col-md-12">
                <div style="background-color:#fff;" class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="d-flex justify-content-center p-3 pb-5">
                                        <img src="../../octastremlogo.png" alt="logo">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-black mb-4 font-weight-bold">Login</h1>
                                        <p>A better way to trade and manage cryptocurrency</p>
                                    </div>


                                    <form class="user" method="POST" action="">

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Enter Email Address"
                                                name="email" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small"
                                                style="line-height: 1.5rem;">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    name="remember">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="d-flex content-justify">
                                                <div class="text-right w-50">
                                                    <a style="position:relative; left: 85%; color: #1b21d1"
                                                        class="font-weight-bold large" href="forgot.php">Forgot
                                                        password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="btn text-white btn-block"
                                                style="background-color:#1b21d1; border-radius: 25px;">Login</button>
                                        </div>

                                    </form>
                                    <hr>
                                    <div class="d-flex content-justify">
                                        <div class="text-left w-75 text-black">
                                            No account? <a class="font-weight-bold small" href="register.php"
                                                style="color:#1b21d1;">Sign up</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center text-black">
                                        Return to <a class="font-weight-bold small" href="../../index.php"
                                            style="color:#1b21d1;">Home</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <?php include "../../includes/livechat.php";?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/ruang-admin.min.js"></script>
    <!-- particles -->
    <script src="../asset/js/particles.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <!-- scripts js -->
    <script src="../asset/js/scripts.js"></script>
</body>

</html>