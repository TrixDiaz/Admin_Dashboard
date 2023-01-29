
<?php
 include '../assets/partials/_urlName.php';
?>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="card-text">
                               <div class="col-auto my-3">
                                    <strong><h4><?php echo $result['user_lastname']; ?></h4></strong> 
                                    <span class="badge bg-info text-uppercase"><?php echo $result['role']; ?></span>
                               </div>
                               <div class="col-auto mb-2">
                                        <div class="row">
                                            <div class="col-4">
                                                <span>Age</span>
                                            </div>
                                            <div class="col-4">
                                                <span><?php echo "Birth Date " . "<br>" . $result['birth_date']; ?></span>
                                            </div>
                                            <div class="col-4">
                                                <span><?php echo "Contact Number" . "<br>" .  "<strong>+63</strong> " . $result['contact_number']; ?></span>
                                            </div>
                                        </div>
                               </div>
                               <div class="col-auto my-3">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                               </div>
                               
                            </div>
                        </div>
                    </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Update Profile</button>
        <button class="btn btn-warning" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Change Password</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3 mt-3">
              <label for="old" class="form-label">Old Pasword</label>
              <input type="password" class="form-control" id="oldpassword" placeholder="Enter Old Password" name="oldpassword">
         </div>
          <div class="mb-3 mt-3">
                <label for="new" class="form-label">New Pasword</label>
                <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password" name="newpassword">
          </div>
          <div class="mb-3 mt-3">
                <label for="confirm" class="form-label">Confirm Pasword</label>
                <input type="password" class="form-control" id="newpassword" placeholder="Enter Confirm Password" name="confirmpassword">
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="changePass">Change Password</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Update Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <input type="text" value="<?php echo $result['user_name']; ?>" class="form-control mb-3 mt-3" disabled>
              <div class="input-group mb-3 mt-3">
                  <span class="input-group-text">First & last name</span>
                  <input type="text" aria-label="First name" placeholder="<?php echo $result['user_lastname']; ?>" class="form-control" > 
                  <input type="text" aria-label="Last name" placeholder="<?php echo $result['user_firstname']; ?>" class="form-control">
            </div>
            <div class="input-group mt-3 mb-3">
              <input type="text" class="form-control" placeholder="YEAR" required>
              <select class="form-select text-uppercase" name="month" required>
                  <li><option selected disabled>Month</option></option></li>
                  <li><option value="01">January</option></li>
                  <li><option value="02">February</option></li>
                  <li><option value="03">March</option></li>
                  <li><option value="04">April</option></li>
                  <li><option value="05">May</option></li>
                  <li><option value="06">June</option></li>
                  <li><option value="07">July</option></li>
                  <li><option value="08">August</option></li>
                  <li><option value="09">September</option></li>
                  <li><option value="10">October</option></li>
                  <li><option value="11">November</option></li>
                  <li><option value="12">December</option></li>
              </select>
              <select class="form-select text-uppercase" name="day" required>
                  <li><option selected disabled>Day</option></option></li>
                  <li><option value="01">01</option></li>
                  <li><option value="02">02</option></li>
                  <li><option value="03">03</option></li>
                  <li><option value="04">04</option></li>
                  <li><option value="05">05</option></li>
                  <li><option value="06">06</option></li>
                  <li><option value="07">07</option></li>
                  <li><option value="08">08</option></li>
                  <li><option value="09">09</option></li>
                  <li><option value="10">10</option></li>
                  <li><option value="11">11</option></li>
                  <li><option value="12">12</option></li>
                  <li><option value="13">13</option></li>
                  <li><option value="14">14</option></li>
                  <li><option value="15">15</option></li>
                  <li><option value="16">16</option></li>
                  <li><option value="17">17</option></li>
                  <li><option value="18">18</option></li>
                  <li><option value="19">19</option></li>
                  <li><option value="20">20</option></li>
                  <li><option value="21">21</option></li>
                  <li><option value="22">22</option></li>
                  <li><option value="23">23</option></li>
                  <li><option value="24">24</option></li>
                  <li><option value="25">25</option></li>
                  <li><option value="26">26</option></li>
                  <li><option value="27">27</option></li>
                  <li><option value="28">28</option></li>
                  <li><option value="29">29</option></li>
                  <li><option value="30">30</option></li>
                  <li><option value="31">31</option></li>
              </select>
                <input type="text" class="form-control" placeholder="+63 <?php echo $result['contact_number']; ?>">
            </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="changePass">Update Profile</button>
      </div>
    </div>
  </div>
</div>