
<div class="container mt-5">
        <form action="assets/partials/_handleLogin.php" method="POST">
            <div class="modal fade" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">LOGIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-2 mt-2">
                            <label for="text" class="form-label">Username:</label>
                            <label class="signUp float-end">Need an Account?<a href="#" class="text-decoration-none mx-2" data-bs-toggle="modal" data-bs-target="#userModal">SignUp</a></label>
                            <input type="text" class="form-control text-capitalize" id="username" placeholder="Enter Username" name="username" required>
                    </div>
                        <div class="">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                        </div>
                    </div>
                    <div class="" align="center">
                        <a href="#" class="signUp text-decoration-none text-dark">Forgot Password?</a>
                    </div>
                    <hr>
                        <div class="row mx-2" align="end">
                            <div class="col mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>   
    </div>