<?php 
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
?>
<title>Home</title>
<div class="container-fluid fixed-top">
    <div class="container h5">
       <div class="row my-1 ">
            <div class="col">
                <a href="#" class="navlink mx-5 text-decoration-none">Logo</a>
            </div>
            <div class="col">
            <a href="#" class="navlink mx-5 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                <i class="bi bi-box-arrow-in-right mx-2"></i>
                Login
            </a>
                
              <a href="#" class="navlink mx-5 text-decoration-none">
              <i class="bi bi-person-vcard mx-2"></i> 
                About
              </a>
             <a href="#" class="navlink mx-5 text-decoration-none">
                <i class="bi bi-telephone mx-2"></i>    
                Contact
             </a>
            </div>
       </div>
    </div>
</div>
<?php include './assets/partials/_loginModal.php'; ?>
<?php include './assets/scripts/index.php' ?>
<?php include './assets/partials/_foot.php'; ?>