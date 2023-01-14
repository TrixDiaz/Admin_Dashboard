<?php 
 include './assets/partials/_functions.php';
 include './assets/partials/_head.php';
?>
  <title>Sign UP | Dashboard</title>

<section id="add-admin">
                <div>
                    <div id="signupForm">
                        <h2>ADD NEW ADMIN</h2>
                        <form action="../assets/partials/_handleSignup.php" method="POST">
                            <div>
                                <input type="text" name="firstName" placeholder="First Name*">
                                <input type="text" name="lastName" placeholder="Last Name*" required>
                            </div>
                            <div>
                                <input type="text" name="username" placeholder="Username*" required>
                            </div>
                            <div>
                                <input id="password" type="password" name="password" placeholder="Password*" required>
                                <span id="passwordErr" class="error"></span>
                            </div>
                            <div>
                                <input id="confPassword" type="password" name="confPassword" placeholder="Confirm Password*" required>
                                <span id="confPassErr" class="error"></span>
                            </div>
                            <button id="signup-btn" type="submit" name="signup">PROCEED</button>
                        </form>
                    </div>
                </div>
                <div>
                </div>
            </section>

<?php include './assets/partials/_footer.php'; ?>
<?php include './assets/scripts/index.php' ?>
<?php include './assets/partials/_foot.php'; ?>