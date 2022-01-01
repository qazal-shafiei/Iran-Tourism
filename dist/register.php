<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>کجا بریم</title>
        <link href="./assets/style/bootstrap5-0-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/style/style.css">
        <link rel="stylesheet" href="assets/style/login-register.css">
        <link href="./assets/style/bootstrap5-0-2.min.css" rel="stylesheet">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    </head>

    <body>

        <!--Navbar-->
        <header id="header">
            <div class="topnav" id="myTopnav">
                <a href="./index.html" id="logo" class="logo"><em>کجا</em> بریم</a>
                <a href="./index.html" class="animate">خانه</a>
                <a href="./aboutus.html" class="animate">درباره ما</a>
                <a href="./contactus.html" class="animate">تماس با ما</a>
                <a href="./Irandtourism.html" class="animate">ایران گردی</a>
                <a href="./login.html" class="animate">ورود</a>
                <a href="./register.html" id="active" class="animate">ثبت نام</a>
                <a href="#background" class="animate"><input type="text" placeholder="جستجو" class="form-control"></a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
            </div>
        </header>
        <!-- End Navbar-->

        <body>
            <div class="container bg-transparent mt-5">
                <div class="row w-100 d-flex justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mt-5">
                        <div class="login-box">
                            <h3 class="text-center fw-bold mb-3">ثبت نام</h3>
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">نام </label>
                                    <input type="text" id="" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">نام خانوادگی</label>
                                    <input type="text" id="" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">نام کاربری</label>
                                    <input type="text" name="username" id="" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">گذرواژه</label>
                                    <input type="password" name="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">تکرار گذرواژه</label>
                                    <input type="password" name="confirm_password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>

                                <div class="col-xl-12 d-flex justify-content-center">
                                    <a href="login.html" class="text-center text-decoration-none text-dark my-4"> <small>برای
                                    برای ورود کلیک کنید !</small></a>
                                </div>

                                <div class="col-xl-12 d-flex justify-content-center">
                                    <button type="submit" class="mt-3 mx-auto btn-login">ثبت نام</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--FOOTER-->
            <footer>
                <div class="middle_section">
                    <section>
                        <span class="logo"><em>کجا</em> بریم</span>
                        <span>
          <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        </span>
                        <span>
          <a href="#">تماس با ما</a>
          <a href="#">درباره ما</a>
          <a href="#">تخیفیف های ویژه</a>
        </span>
                    </section>
                </div>
                <div class="bottom_section">
                    <span>Copyright © 2021. All rights reserved</span>
                </div>
            </footer>






            <!--JAVASCRIPT-->
            <script src="./assets/js/jquery.js"></script>
            <script type="text/javascript" src="./assets/js/script.js"></script>
            <script src="./assets/js/bootstrap.bundle.min.js"></script>
        </body>

    </html>
    <!-- partial -->
    <script src="./script.js"></script>
    <script src="./assets/js/jquery.js"></script>


    </body>

    </html>