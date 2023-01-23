
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Display this for old password new password and confirm password
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="changePass">Change Password</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Update Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Display Here for the Update Profile
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        <button class="btn btn-success" type="submit" name="changePass">Update Profile</button>
      </div>
    </div>
  </div>
</div>