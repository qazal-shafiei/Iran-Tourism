
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
                <a href="./index.php" id="logo" class="logo"><em>کجا</em> بریم</a>
                <a href="./index.php" class="animate">خانه</a>
                <a href="./aboutus.html" class="animate">درباره ما</a>
                <a href="./contactus.html" class="animate">تماس با ما</a>
                <a href="./Irandtourism.html" class="animate">ایران گردی</a>
                <a href="./login.php" class="animate">ورود</a>
                <a href="./register.php" id="active" class="animate">ثبت نام</a>
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
                            <form action="insert.php" method="post">
                                <div class="mb-3">
                                    <div class="alert-danger">
                                        <?php
                                            if ( isset($_GET['success']) && $_GET['success'] == 0 )
                                            {
                                                 echo "امکان اتصال به پایگاه داده وجود ندارد";
                                            } else if (isset($_GET['confirmPassword']) && $_GET['confirmPassword'] == 0) {
                                                echo "گذرواژه و تکرار آن یکسان نیست. دوباره تلاش کنید.";
                                            }
                                        ?>
                                    </div>
                                    <label for="inputPassword5" class="form-label">نام </label>
                                    <input type="text" id="" name="firstName" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">نام خانوادگی</label>
                                    <input type="text" id="" name="lastName" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">نام کاربری</label>
                                    <input type="text" name="userName" id="" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">گذرواژه</label>
                                    <input type="password" name="password" id="inputPassword" class="form-control"
                                        aria-describedby="passwordHelpBlock">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">تکرار گذرواژه</label>
                                    <input type="password" name="confirm_password" id="inputPassword"
                                        class="form-control" aria-describedby="passwordHelpBlock">
                                </div>

                                <div class="col-xl-12 d-flex justify-content-center">
                                    <a href="login.php" class="text-center text-decoration-none text-dark my-4">
                                        <small>
                                            برای ورود کلیک کنید !</small></a>
                                </div>

                                <div class="col-xl-12 d-flex justify-content-center">
                                    <button type="submit" name="submit" class="mt-3 mx-auto btn-login">ثبت نام</button>
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