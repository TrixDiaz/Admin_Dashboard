<?php 
require '../assets/partials/_admin-check.php';
 include '../assets/partials/_functions.php';
 include '../assets/partials/_head.php';
 include '../assets/partials/_sidebar.php';
?>

<!-- sidebar main content  -->
<div class="col py-3">
            <h3 class="mb-3">ADD NEW ADMIN</h3>
<section  id="add-admin">
        <div class="container-fluid ">
                <div class="container w-50" id="signupForm">
                    <form action="../assets/partials/_handleSignup.php" method="POST">
                    <div class="card shadow mb-4">
                                <div class="card-body" align="center">
                                    <div class="h4 py-3">CREATE ACCOUNT</div>
                                    <div class="row d-flex justify-content-around">
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control" name="fisrtName" placeholder="First Name*">
                                            </div>
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-0 mb-4">
                                                <input type="text" class="form-control" name="lastName" placeholder="Last Name*">
                                            </div>
                                            
                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="text" class="form-control" name="username" placeholder="Username*">
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="password" placeholder="Password*">
                                                <span id="passwordErr" class="error"></span>
                                            </div>

                                            <div class="col-auto col-sm-12 col-md-8 col-xl-6 mx-sm-4 mb-4">
                                                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password*">
                                                <span id="passwordErr" class="error"></span>
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




<?php include '../assets/partials/_foot.php'; ?>