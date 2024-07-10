<?php
session_start();
include("../includes/connection.php");
$message ="";
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch user details based on email
    $query = "SELECT id, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set up a session
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];
            
            // Redirect to the dashboard or another secure page
            header("Location: ../main.php");
            exit();
        } else {
            $message = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Incorrect password. Please try again.</div>
        </div>';
        }
    } else {
        $message =  '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>User not found. Please check your email.</div>
        </div>';
    }

    $conn->close();
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trustronce</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../../assets/css/libs.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css?v=1.0.0">
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
                                        <h2 class="text-center mb-4">Sign In</h2>
                                        <form action="" method="post">
                                            <?php echo $message; ?>
                                            <p>Sign into your account</p>
                                            <div class="form-floating mb-3">
                                                <input type="email" name="email" class="form-control" id="floatingInput"
                                                    placeholder="Enter Email">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="password" name="password" class="form-control"
                                                    id="Password" placeholder="Password">
                                                <label for="Password">Password</label>
                                            </div>
                                            <div class="d-flex justify-content-between  align-items-center flex-wrap">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="Remember">
                                                        <label class="form-check-label" for="Remember">Remember
                                                            me?</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <a href="#page-forgot-password.html">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" name="login" class="btn btn-primary">Sign
                                                    In</button>
                                            </div>

                                        </form>
                                        <div class="new-account mt-3 text-center">
                                            <p>Don't have an account? <a class="" href="register.php">Click
                                                    here to sign up</a></p>
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