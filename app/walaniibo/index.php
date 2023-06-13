<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    

    <meta charset="utf-8" />
            <title>The Fashion Quiz Dashboard </title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/Stickey-Logo.png">

       

     <!-- App css -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page card-bg">
   <!-- Log In page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="card-body p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 col-xl-3 col-lg-4">
                            <div class="card mb-0 border-0">
                                <div class="card-body p-0">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logoon.png" height="150" alt="logo" class="auth-logo">
                                        </a>
                                       
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="post" action="include/login-exec.php"> 
                                         
                                        <div class="form-group mb-2">
                                           
                                        <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
        echo '<table id="fails">';
        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
            echo '<tr><td align="left">',$msg . '</td></tr>'; 
            
        }
        echo '</table>';
        unset($_SESSION['ERRMSG_ARR']);
    }
?>          
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter username">                               
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">                            
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-end">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <input type="submit" name="button" id="button" value="Login" class="btn btn-primary">
                                                   
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    
                                    
                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                            <div class="accountbg d-flex align-items-center"> 
                                <div class="account-title text-center text-white">
                                   <!-- <img src="assets/images/walanii_logo_dark.png" alt="" class="thumb-sm">-->
                                    <h4 class="mt-3 text-white"> <span class="text-warning">Back OFFICE</span> </h4>
                                    <h1 class="text-white">Let's Get Started</h1>
                                    <p class="font-18 mt-3">Welcome to the Fashion Quiz Back Office.</p>
                                    <div class="border w-25 mx-auto border-warning"></div>
                                </div>
                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- vendor js -->
    
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    
</body>


<!-- Mirrored from mannatthemes.com/metrica/default/auth-login-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 17:13:10 GMT -->
</html>