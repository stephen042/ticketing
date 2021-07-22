<?php
 require_once 'dbcon.php';
 require_once 'auth.php';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-17/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jul 2021 15:52:27 GMT -->

<head>
    <title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.PgCMkVC7B9.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">GOUNI TICKETING </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="login.php" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign in</h3>
                                </div>
                                <div class="w-100">
                                    <!-- <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p> -->
                                </div>
                            </div>
                            <form action="" method="POST" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Reg_Number</label>
                                    <input type="text" class="form-control" placeholder="Username" value="<?php 
                                     if (isset($_POST['Reg_Number'])) {
                                        echo $regNo;
                                     }
                                    ?>" name="Reg_Number" required>
                                    <span style="color:red;"><?php if (isset($_POST['Reg_Number'])) {
                                        echo $regNoErr;
                                    }?></span>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    <span style="color:red;"><?php if (isset($_POST['password'])) {
                                       echo $passwordErr;
                                    }
                                    ?></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="sign_in" class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <!-- <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div> -->
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.iqDpUqoRp9.js"></script>
    <script>
        eval(mod_pagespeed_qBnQ96WPW1);
    </script>
    <script>
        eval(mod_pagespeed__CEwjG2SSu);
    </script>
    <script>
        eval(mod_pagespeed_oaROQS6dN_);
    </script>
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66c2b82ed9ab423f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-17/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jul 2021 15:52:29 GMT -->

</html>