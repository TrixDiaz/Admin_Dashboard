
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
                                    <strong><h4><?php echo $result['user_lastname']; ?> <?php echo $result['user_firstname']; ?></h4></strong> 
                                    <span class="badge bg-info text-uppercase"><?php echo $result['role']; ?></span>
                               </div>
                               <div class="col-auto mb-2">
                                        <div class="row">
                                            <div class="col-4">
                                                <span><span><?php echo "<strong>Age</strong>" . "<br>" . $result['age']; ?></span></span>
                                            </div>
                                            <div class="col-4">
                                                <span><?php echo "<strong>Birth Date</strong>" . "<br>" . $result['birth_date']; ?></span>
                                            </div>
                                            <div class="col-4">
                                                <span><?php echo "<strong>Contact Number</strong>" . "<br>" .  "<strong>+63</strong> " . $result['contact_number']; ?></span>
                                            </div>
                                        </div>
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
      <form action="../assets/partials/_updateProfile.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="username" class="form-label"><strong>Username</strong></label>
            <input type="text" value="<?php echo $result['user_name']; ?>" class="form-control bg-secondary bg-opacity-50" name="username" id="username" readonly>
          </div>
          <div class="mb-3">
              <label for="fullname" class="form-label"><strong>Full Name</strong></label>
                <div class="input-group">
                    <span class="input-group-text" id="fullname"><?php echo $result['user_lastname']; ?> <?php echo $result['user_firstname']; ?> <?php echo $result['user_middlename']; ?></span>
                    <input type="text" aria-label="First name" placeholder="First Name" name="firstName" class="form-control" > 
                    <input type="text" aria-label="Last name" placeholder="Last Name" name="lastName" class="form-control">
                    <input type="text" aria-label="Middle name" placeholder="Middle Name" name="middleName" class="form-control">
              </div>
          </div>
              <div class="mb-3">
              <label for="birthdate" class="form-label"><strong>Birthdate & Contact Number</strong></label>
              <div class="input-group">
              <span class="input-group-text" id="birthdate"><?php echo $result['birth_date']; ?></span>
                <input type="date" class="form-control" id="" name="birthdate">
                <span class="input-group-text">+63 <?php echo $result['contact_number']; ?></span>
                <input type="text" class="form-control" name="contact" placeholder="Contact Number">
              </div>
              </div>
        </div>
        <hr>
        <div class="mx-3 mb-3" align="end">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="updateProfile">Update Profile</button>
        </div>
      </form>
      
    </div>
  </div>
</div>
