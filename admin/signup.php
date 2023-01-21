<?php 
require '../assets/partials/_admin-check.php';
 include '../assets/partials/_functions.php';
 include '../assets/partials/_head.php';
 include '../admin/sidebar.php';
?>

<!-- sidebar main content  -->
<div class="col py-3">
            <h3 class="mb-3">ADD NEW ADMIN</h3>
            
            
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
                                    <div class="h4 py-3">CREATE ACCOUNT</div>
                                    <div class="row d-flex justify-content-around">
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control" name="firstName" placeholder="First Name*">
                                            </div>
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control" name="lastName" placeholder="Last Name*">
                                            </div>
                                            
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="text" class="form-control" name="username" placeholder="Username*">
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="password" placeholder="Password*">
                                                <span id="password" class="error"></span>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password*">
                                                <span id="password" class="error"></span>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                            <button id="signup-btn" type="submit" name="signup" class="btn btn-success w-50">SIGNUP</button>
                                            </div>

                                            <input type="text" id="role" name="role" value="admin" hidden>
                                            
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




<?php include '../assets/partials/_foot.php'; ?>