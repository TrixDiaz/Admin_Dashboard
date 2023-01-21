<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Account Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2 mt-2">
                <label for="text" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
         </div>
         <div class="">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
         </div>
         <div class="">
                <label for="password_confirmation" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" placeholder="Enter Confirm password" required>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="userRegister">Register</button>
      </div>
    </div>
  </div>
</div>