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
            <?php include '../assets/partials/_footer.php'; ?>
</div>

<!-- sidebar end div  -->
    </div> 
</div>

<?php 
include '../assets/scripts/index.php';
include '../assets/partials/_foot.php'; 
?>