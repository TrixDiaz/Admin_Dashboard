<?php 
require '../assets/partials/_admin-check.php';
 include '../assets/partials/_functions.php';
 include '../assets/partials/_head.php';
 include '../assets/partials/_sidebar.php';
?>

<!-- sidebar main content  -->
<div class="col py-3">
            <h3>Left Sidebar with Submenus</h3>
            <p class="lead">
                An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single 
                menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.</p>
            <ul class="list-unstyled">
                <li><h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile</li>
            </ul>

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
</section>

            <?php include '../assets/partials/_footer.php'; ?>
</div>
<!-- sidebar end div  -->
    </div> 
</div>




<?php include '../assets/partials/_foot.php'; ?>