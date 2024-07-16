<?php
 include("../includes/connection.php");
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require '../../PHPMailer-master/src/PHPMailer.php';
require '../../PHPMailer-master/src/Exception.php';
require '../../PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
 
 
$message ="";
if (isset($_POST['register'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $currency = $_POST["currency"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Validate form inputs (You can add more validation)
    if ($password !== $confirmpassword) {
        echo "Passwords do not match. Please try again.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

          // Check if the email address is already in use
        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
           $message = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
               The email has already been taken
            </div>
        </div>';
        } else {
            // Insert user data into the database
            $insertQuery = "INSERT INTO users (firstname, lastname, email, currency, phone, password)
                            VALUES ('$firstname', '$lastname', '$email', '$currency', '$phone', '$hashedPassword')";

            if ($conn->query($insertQuery) === TRUE) {
                $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                Registration Successfull, please check your email!!
            </div>
        </div>';
        
         
            try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.trustronce.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@trustronce.com';                     //SMTP username
    $mail->Password   = 'trSHF@Hdo!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@trustronce.com', 'Support');
    $mail->addAddress($email);     //Add a recipient               //Name is optional
    
    $mail->addCC('support@trustronce.com');
   
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Successful Registration';
    $mail->Body    = '<html><head></head></head>
<body style="background-color: #1e2024; padding: 45px;">
    <div>
        <img style="position:relative; left:35%;" src="https://trustronce.com/dash/dashboard/logo.png">
        <h3 style="color: black;">Mail From support@trustronce.com - Successful Registration</h3>
    </div>
    <div style="color: #ffff;"><hr/>
        <h3>Dear '.$firstname.'</h3>
        <p>You are welcome to Trustronce, an automated  online trading  platform made so even investors with zero trading experience  are successfully making profit </p>
        <h5>Kindly click the button below to log in and proceed to KYC verification</h5>
        <a style="background-color:#060c39;color:#ffff; padding:15px; text-decoration:none;border-radius: 10px;font-size: 20px;" href="https://trustronce.com/dash/dashboard/auth/signin.php" class="btn btn primary">Sign in</a>
       
        <h5>Note : the details in this email should not be disclosed to anyone</h5>
            
    </div><hr/>
        <div style="background-color: white; color: black;">
            <h3 style="color: black;">support@Trustronce<sup>TM</sup> </h3>
        </div>
        
</body></html>

';
   
    $mail->send();
    // echo 'Email has been sent to '.$email;
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        header("refresh:2;url=signin.php");
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }                      

        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Trustronce </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../../assets/css/libs.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css?v=1.0.0" />
</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <div style="background-image: url('advantages-image-5.png')">
        <div class="wrapper">
            <section class="vh-100 bg-image">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="auth-form">
                                        <h2 class="text-center mb-4">Sign Up</h2>
                                        <form action="" method="post">
                                            <?php echo $message; ?>

                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="firstname" class="form-control"
                                                            id="firstName" placeholder="FirstName" />
                                                        <label for="firstName">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="lastname" class="form-control"
                                                            id="lastName" placeholder="lastName" />
                                                        <label for="lastName">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="email" name="email" class="form-control"
                                                                id="floatingInput" placeholder="name@example.com" />
                                                            <label for="floatingInput">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">

                                                        <div class="form-floating mb-3">

                                                            <select name="currency" class="form-control"
                                                                id="floatingIput">

                                                                <option>Select currency</option>
                                                                <option value="USD">USD</option>
                                                                <option value="EUR">EUR</option>
                                                                <option value="GBP">GBP</option>
                                                                <option value="YEN">YEN</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" name="phone" class="form-control"
                                                                id="phoneno" placeholder="phoneno" />
                                                            <label for="phoneno">Phone no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-floating mb-2">
                                                            <input type="password" name="password" class="form-control"
                                                                id="Password" placeholder="Password" />
                                                            <label for="Password">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-floating mb-2">
                                                            <input type="password" name="confirmpassword"
                                                                class="form-control" id="confirmpassword"
                                                                placeholder="confirmpassword" />
                                                            <label for="confirmpassword">Confirm-password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check d-flex justify-content-center mb-2">
                                                    <input type="checkbox" class="form-check-input" id="agree" />
                                                    <label class="ms-1 form-check-label" for="agree">I agree with the <a
                                                            href="CPTterms.pdf" target="__blank">terms of
                                                            use</a></label>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" name="register" class="btn btn-primary">
                                                        Sign Up
                                                    </button>
                                                </div>

                                        </form>
                                        <div class="new-account mt-3 text-center">
                                            <p>
                                                Already have an Account
                                                <a class="text-primary" href="signin.php">Sign
                                                    in</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="../../../"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg> return to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="../../assets/js/libs.min.js"></script>
    <!-- widgetchart JavaScript -->
    <script src="../../assets/js/charts/widgetcharts.js"></script>
    <!-- fslightbox JavaScript -->
    <script src="../../assets/js/fslightbox.js"></script>
    <!-- app JavaScript -->
    <script src="../../assets/js/app.js"></script>
    <!-- apexchart JavaScript -->
    <script src="../../assets/js/charts/apexcharts.js"></script>
    <script src="//code.tidio.co/zuvsapjg5htzdob0is5deryta1ng6ai4.js" async></script>
</body>

</html>