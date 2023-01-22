<?php 
require '../assets/partials/_admin-check.php';
include '../assets/partials/_functions.php';
 include '../assets/partials/_head.php';
 include '../assets/partials/_sidebar.php';  
 include '../assets/partials/_urlName.php';
?>
        

<!-- sidebar main content  -->
<div class="col py-3">
<nav>
        <div class="d-flex justify-content-between mb-3">
        <div class="h3">Register New Account</div>
        <a href="../admin/dashboard.php?id=$user" class="btn btn-info h3"><i class="bi bi-arrow-clockwise"></i></a>
        </div>
    </nav>
            <!-- Main Content Here -->
            <?php include '../assets/partials/_footer.php'; ?>
</div>

<!-- sidebar end div  -->
    </div> 
</div>

<?php 
include '../assets/scripts/index.php';
include '../assets/partials/_foot.php'; 
?>