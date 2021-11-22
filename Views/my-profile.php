<?php

include 'headerfront.php';
include '../Controller/UserController.php';
$userC = new UserContoller();

$error = "";
$user=null;
if (

    isset($_POST["username"]) &&		
    isset($_POST["password"]) &&
    isset($_POST["email"]) 
    
   ) {
    if (
       
        !empty($_POST['username']) &&
        !empty($_POST["password"]) &&
        !empty($_POST["email"]) 
       // !empty($_POST["CategorieId"])
    ) {
        $user = new User(
   
            $_POST['username'],
            $_POST['email'], 
            $_POST["password"] ,
        
        );
        $userC->modifierUtilisateur($user,$_GET["id"]);
     
    }
    else
        $error = "Missing information";
   }

?>



  <!--end navbar-->
  <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                        <!--end breadcrumb-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->
                <!--============ Hero Form ==========================================================================-->
              
                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>My Profile</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link active icon" href="my-profile.html">
                                    <i class="fa fa-user"></i>My Profile 
                                </a>
                                <a class="nav-link icon" href="my-ads.html">
                                    <i class="fa fa-heart"></i>My Ads Listing
                                </a>
                                <a class="nav-link icon" href="bookmarks.html">
                                    <i class="fa fa-star"></i>Bookmarks
                                </a>
                                <a class="nav-link icon" href="change-password.html">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="sold-items.html">
                                    <i class="fa fa-check"></i>Sold Items
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                      
                        <form class="form" mathod="POST">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                        <section>
                                    
                                            <div class="row">
                                                <div class="col-md-4">
                                  
                                                    <!--end form-group-->
                                                </div>
                                                <label for="id" >
                        </label>
        
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Your Name</label>
                                                        <input name="username" type="text" class="form-control" id="name" placeholder="Your Name" value="<?php echo $_GET['username']?>" required>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                          
                                            <!--end form-group-->
                                           
                                            <!--end form-group-->
                                        </section>

                                        <section>
                                            <h2>Contact</h2>
                                           
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="<?php echo $_GET['email']?>">
                                            </div>
                                            <div class="form-group">
                                                        <label for="password" class="col-form-label required">Your Password</label>
                                                        <input name="password" type="text" class="form-control" id="name" placeholder="Your Name" value="<?php echo $_GET['password']?>" required>
                                                    </div>
                                            <!--end form-group-->
                                        </section>

                                      

                                    </div>
                                    <!--end col-md-8-->
                                 
                                    <!--end col-md-3-->
                                </div>
                             
                            </form>
                        </div>
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
        <footer class="footer">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#" class="brand">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p>
                                ....
                            </p>
                        </div>
                        <!--end col-md-5-->
                        <div class="col-md-3">
                            <h2>Navigation</h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <nav>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">Listing</a>
                                            </li>
                                            <li>
                                                <a href="#">Pages</a>
                                            </li>
                                            <li>
                                                <a href="#">Extras</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                            <li>
                                                <a href="#">Submit Ad</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <nav>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">My Ads</a>
                                            </li>
                                            <li>
                                                <a href="#">Sign In</a>
                                            </li>
                                            <li>
                                                <a href="#">Register</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-4">
                            <h2>Contact</h2>
                            <address>
                                <figure>
                                    124 Abia Martin Drive<br>
                                    New York, NY 10011
                                </figure>
                                <br>
                                <strong>Email:</strong> <a href="#">hello@example.com</a>
                                <br>
                                <strong>Skype: </strong> Craigs
                                <br>
                                <br>
                                <a href="contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                            </address>
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <div class="background">
                    <div class="background-image original-size">
                        <img src="assets/img/footer-background-icons.jpg" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
        </footer>
        <!--end footer-->
    </div>
    <!--end page-->


</body>
</html>
