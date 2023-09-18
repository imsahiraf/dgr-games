<?php session_start();  ?>
<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>관리자 로그인</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Web IT Services Developed Web Application" name="description" />
        <meta content="Web IT Services" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="login.php" class="d-block auth-logo">
                                            <img src="top_logo.png" alt="" height="28"> <span class="logo-txt"></span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">관리자 로그인</h5>
                                        </div>
                                        <form class="mt-4 pt-2" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label">사용자 이름</label>
                                                <input type="text" class="form-control" name="user" placeholder="사용자 이름">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">비밀번호</label>
                                                <input type="password" class="form-control" name="password" placeholder="비밀번호">
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" name="login" type="submit">로그인</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <!--<p class="mb-0">© <script>document.write(new Date().getFullYear())</script> HUDUR. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://web-it-services.com/">Web IT Services</a></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>
        <!-- password addon init -->
        <script src="assets/js/pages/pass-addon.init.js"></script>

    </body>

</html>
<?php 
if(isset($_POST['login'])){
    $user=$_POST["user"];
    $password=$_POST["password"];
    if($user == 'zy5va5yinrxp' & $password == 'gMp&!4|-rB'){
        $_SESSION['adminlogin']="Login";
        echo '<script>alert("Login Successfull!");document.location="index.php"</script>';
    }else{
        echo '<script>alert("Incorrect credentials!");document.location="login.php"</script>';
    }
    }
?>