<?php 
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
?>
<title>Home</title>
<div class="container-fluid">
    <div class="container fixed-top h5">
       <div class="row my-1 ">
            <div class="col" align="start">
                <a href="#" class="navlink mx-5 text-decoration-none">Logo</a>
            </div>
            <div class="col" align="center">
            <a href="#" class="navlink mx-4 text-decoration-none">
              <!-- <i class="bi bi-person-vcard "></i>  -->
                Home
              </a>
            <a href="#" class="navlink mx-4 text-decoration-none">
              <!-- <i class="bi bi-person-vcard "></i>  -->
                About
              </a>
             <a href="#" class="navlink mx-4 text-decoration-none">
                <!-- <i class="bi bi-telephone "></i>     -->
                Contact
             </a>
            </div>
            <div class="col" align="end">
            <a href="#" class="navlink mx-4 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                <i class="bi bi-box-arrow-in-right "></i>
                Login
            </a>
            </div>
       </div>
    </div>
</div>
<div class="parallax"></div>

  <div class="container-fluid bg-secondary">
    <div class="container">
    <div style="height:300px;">
      <label class="mt-5 h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, similique 
        voluptate. Fugit dolorum, provident minima tempora quos dolore ut consequatur quae. Nostrum, 
        voluptas quam? Excepturi accusantium expedita qui reprehenderit ex.</label>
      </div>
    </div>
  </div>
  
<div class="parallax2"></div>

<div class="container-fluid bg-light py-5" align="center">
    <div class="container">
        <section id="about">
                  <div>
                      <h1>About Us</h1>
                      <h4>Wanna know were it all started?</h4>
                      <p>
                          Lorem ipsum dolor sit amet consecteturadipisicing elit. Perferendis soluta voluptas eaque, numquam veritatis aperiam expedita deleniti, nesciunt cum alias velit. Cupiditate commodi
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus cum nisi ea optio unde aliquam quia reprehenderit atque eum tenetur! 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat debitis corporis voluptates modi quibusdam quidem voluptatibus illum, maiores sequi.
                      </p>
                  </div>
          </section>
    </div>
</div>

<div class="container-fluid bg-dark py-5">
    <div class="container" align="center">
        <section id="contact">
                  <div id="contact-form">
                      <h1 class="text-white">Contact Us</h1>
                      <form action="">
                      <div class="">
                            <label for="name" class="form-label text-white">Name</label>
                            <input type="text" class="form-control w-25 text-white" id="name" name="name">
                        </div>
                          <div>
                              <label for="email" class="form-label text-white">Email Address</label>
                              <input type="email" name="email" id="email" class="form-control w-25">
                          </div>
                          <div>
                              <label for="message" class="form-label text-white">Message</label>
                              <textarea name="message" id="message" cols="30" rows="10" class="form-control w-25"></textarea>
                          </div>
                          <div></div>
                      </form>
                  </div>
              </section>
    </div>
</div>
<?php include './assets/partials/_footer.php'; ?>
<?php include './assets/partials/_loginModal.php'; ?>
<?php include './assets/scripts/index.php' ?>
<?php include './assets/partials/_foot.php'; ?>
