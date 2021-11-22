<?php

   include '../Controller/UserController.php';
   $userC = new UserContoller();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword =$_POST['password']; 

      $userC->login($myusername,$mypassword);
      
    
   }
?>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="front/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="front/assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="front/assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="front/assets/css/style.css">
    <link rel="stylesheet" href="front/assets/css/user.css">

	<title>VITALOGIC</title>

</head>
<body>
    <div class="page sub-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i> +216 29 697 000
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                            <li>
                                <a href="my-ads.html">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                            <li>
                                <a href="sign-in.html">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                            </li>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
               
                <!--============ End Main Navigation ================================================================-->
                <!--============ Hero Form ==========================================================================-->
            
                      
                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Sign In</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </section>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <form class="form clearfix" action="" method="POST">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Username</label>
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Your username" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="remember" value="1">
                                        Remember Me
                                    </label>
                                    
                                    <input type="submit" class="btn btn-primary" value="Sign In" ></button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                Troubles with signing? <a href="#" class="link">Click here.</a>
                            </p>
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
       
    </div>


</body>
</html>
<script src="front/assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="front/assets/js/popper.min.js"></script>
	<script type="text/javascript" src="front/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
	<script src="front/assets/js/selectize.min.js"></script>
	<script src="front/assets/js/masonry.pkgd.min.js"></script>
	<script src="front/assets/js/icheck.min.js"></script>
	<script src="front/assets/js/jquery.validate.min.js"></script>
	<script src="front/assets/js/custom.js"></script>
