<?php 
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
 include './user/RegisterModal.php';
?>
  <title>Home</title>

<section id="home">
    <div class="parallax">
          <nav class="navbar navbar-expand-sm py-1 bg-light fixed-top">
            <br>
                  <div class="container-fluid">
                    <div class="container fixed-top h5">
                        <div class="row my-1 ">
                              <div class="col" align="start">
                                  <a href="#" class="navlink mx-3 text-decoration-none">Logo</a>
                              </div>
                              <div class="col" align="center">
                              <a href="#" class="navlink mx-3 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  Home
                                </a>
                              <a href="#about" class="navlink mx-3 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  About
                                </a>
                              <a href="#contact" class="navlink mx-3 text-decoration-none">
                                  <!-- <i class="bi bi-telephone "></i>     -->
                                  Contact
                              </a>
                              </div>
                              <div class="col" align="end">
                              <a href="#" class="navlink mx-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                  <i class="bi bi-box-arrow-in-right "></i>
                                  Login
                              </a>
                              </div>
                        </div>
                      </div>
                  </div>
              </nav>
            <br>
          <div class="container mt-5">
            <br>
              <div class="row">
                  <div class="col-4">
                      
                  </div>
                  <div class="col-8 bg-light mt-5 px-4 py-4" style="--bs-bg-opacity: .6;" align="center">
                     <h4>Sample Admin Dashboard</h4>
                     <label>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quia nisi quod aut 
                      itaque iste corrupti, laborum, voluptatum recusandae cumque atque officia sunt numquam odit temporibus est, veritatis totam eveniet
                       officiis magnam dolore? Sed facilis facere, aliquid molestiae nisi saepe optio quidem! Quos aliquam repudiandae quidem! Quo rerum dolore nemo!
                      </label>
                  </div>
              </div>
          </div>
      </div>
</section>

  <div class="container-fluid bg-light" align="center">
      <div style="min-height: 20vh;">
          <div class="container">
                <div class="container md-mx-5 md-my-5">
                      <div class="row">
                          <div class="col-auto col-md-3 col-xl-3 sm-mx-5">
                            <h1><i class="bix bi-bus-front" style="font-size: 150px"></i></h1>
                              <h4><strong>Lorem ipsum dolor sit amet.</strong></h4>
                          </div>
                          <div class="col-auto col-md-3 col-xl-3 sm-mx-5">
                            <h1><i class="bi bi-bank" style="font-size: 150px"></i></h1>
                            <h4><strong>Lorem ipsum dolor sit amet.</strong></h4>
                          </div>
                          <div class="col-auto col-md-3 col-xl-3 sm-mx-5">
                            <h1><i class="bi bi-ticket-perforated" style="font-size: 150px"></i></h1>
                            <h4><strong>Lorem ipsum dolor sit amet.</strong></h4>
                          </div>
                          <div class="col-auto col-md-3 col-xl-3 sm-mx-5">
                            <h1><i class="bi bi-person-vcard" style="font-size: 150px"></i></h1>
                            <h4><strong>Lorem ipsum dolor sit amet.</strong></h4>
                          </div>
                      </div>
                 </div>
            </div>
       </div>
  </div>


  <div class="parallax2">
      <div class="container" align="center">
        <br><br>
          <div class="col-8">
              <div class="row">
                    <div class="card mt-5 py-4 bg-light bg-opacity-50">
                        <div class="card-body">
                            <h2>Search</h2>
                            <h4>Search Lorem ipsum dolor sit amet consectetur.</h4>
                            <br>
                            <input type="text" class="form-control w-50" id="search" placeholder="Search ID" name="search"/>
                            <br>
                            <input type="button" class="btn btn-info" value="Search">
                        </div>
                    </div>
              </div>
          </div>
      </div>
  </div>

<section id="about">
    <div class="container-fluid bg-light my-5 py-5" align="center">
             <div class="container text-center">
                  <div>
                      <h1>About Us</h1>
                      <h4>Wanna know were it all started?</h4>
                      <label>
                          Lorem ipsum dolor sit amet consecteturadipisicing elit. Perferendis soluta voluptas eaque, numquam veritatis aperiam expedita deleniti, nesciunt cum alias velit. Cupiditate commodi
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus cum nisi ea optio unde aliquam quia reprehenderit atque eum tenetur! 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat debitis corporis voluptates modi quibusdam quidem voluptatibus illum, maiores sequi.
                      </label>
                  </div>
             </div>
    </div>
</section>


  <section id="contact">
  <div class="container-fluid bg-dark py-5">
      <div class="container" align="center">
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
              </div>
        </div>
  </section>


<?php include './assets/partials/_footer.php'; ?>
<?php include './assets/partials/_loginModal.php'; ?>
<?php include './assets/scripts/index.php' ?>
<?php include './assets/partials/_foot.php'; ?>
