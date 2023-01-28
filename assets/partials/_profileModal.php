
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
                                    <strong><h4><?php echo $result['user_fullname']; ?></h4></strong> 
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
                  <input type="text" aria-label="First name" placeholder="First Name" class="form-control" > 
                  <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control">
            </div>
            <div class="input-group mt-3 mb-3">
                <input type="date" class="form-control">
                <input type="text" class="form-control" value="Contact Number">
            </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="changePass">Update Profile</button>
      </div>
    </div>
  </div>
</div>