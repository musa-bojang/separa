<?php
session_start();
require_once "model/Util.php";
$util = new Util();
require_once "model/authCookieSessionValidate.php";
if ($isLoggedIn) {
    $util->redirect("profile_upload.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login -SEPARA</title>
        <link href="theme/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background: #00A65E;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">LOG MASUK</h3></div>
                                    <div class="card-body">
                                        <form id="login-form" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" id="username" type="text" placeholder="name@example.com" required/>
                                                <label for="inputEmail">ID Pengguna</label>
                                            </div>
                                            <div id="usernamelength"></div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="password"type="password" placeholder="Password" required/>
                                                <label for="inputPassword">Kata Laluan</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="remember" name="remember" <?php if (isset($_COOKIE["member_login"])) { ?> checked <?php } ?> type="checkbox"/>
                                                <label class="form-check-label" for="inputRememberPassword">INGAT SAYA</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html"></a>
                                                <button class="btn btn-primary" id="login_button" name="login_button">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SEPARA 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="theme/js/scripts.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>
