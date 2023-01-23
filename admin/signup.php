<?php 
require '../assets/partials/_admin-check.php';
 include '../assets/partials/_functions.php';
 include '../assets/partials/_head.php';
 include '../assets/partials/_sidebar.php';
 include '../assets/partials/_urlName.php';
?>

<!-- sidebar main content  -->
<div class="col py-3">
    <nav class="mb-3 mx-4">
        <div class="d-flex justify-content-between mb-3">
        <div class="badge bg-primary text-uppercase" id="currentTimeDate"></div>
            <div class="badge bg-primary text-uppercase"><?php date_default_timezone_set('Asia/Manila'); echo date('F j, Y'); ?></div>
        </div>
         <div class="d-flex justify-content-between mb-3">
            <div class="h3">Register New Account</div>
            <a href="../admin/dashboard.php?id=$user" class="btn btn-info h3"><i class="bi bi-arrow-clockwise"></i></a>
        </div>
    </nav>
            
            
            <?php if (isset($_GET['error'])) { ?>
                <div class="container">
                    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)"class="alert alert-danger alert-dismissible fade show" role="alert"> 
                     <?php echo $_GET['error']; ?>  
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="container">
                    <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)"class="alert alert-success alert-dismissible fade show" role="alert"> 
                     <?php echo $_GET['success']; ?>  
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php } ?>
          
           
           

          
<section  id="add-admin">
        <div class="container-fluid">
                <div class="container mg-5" id="signupForm">
                    <form action="../assets/partials/_handleSignup.php" method="POST">
                    <div class="card shadow mb-3 py-3">
                                <div class="card-body mx-5 py-5" align="center">
                                    <div class="d-flex justify-content-around mb-3">
                                        <div class="mx-5" disabled></div>
                                        <div class="h3">CREATE ACCOUNT</div>
                                        <div class="">
                                        <select class="form-select text-uppercase" name="role">
                                           <li><option selected>USER ROLE</option></option></li>
                                           <li><option value="ADMIN">ADMIN</option></li>
                                           <li><option value="USER">USER</option></li>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="row d-flex justify-content-around">
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control text-uppercase" name="firstName" placeholder="First Name*" required>
                                            </div>
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control text-uppercase" name="lastName" placeholder="Last Name*" required>
                                            </div>
                                            
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="text" class="form-control text-uppercase" name="username" placeholder="Username*" required>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="password" placeholder="Password*" required>
                                                <span id="password" class="error"></span>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password*" required>
                                                <span id="password" class="error"></span>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                            <button id="signup-btn" type="submit" name="signup" class="btn btn-success w-50">SIGNUP</button>
                                            </div>
                                    </div>
                                </div>
                          </div>
                    </form>
                </div>
        </div>
</section>
            <?php include '../assets/partials/_footer.php'; ?>
</div>

<!-- sidebar end div  -->
    </div> 
</div>

<?php 
include '../assets/scripts/admin.php';
include '../assets/partials/_foot.php';
 ?>