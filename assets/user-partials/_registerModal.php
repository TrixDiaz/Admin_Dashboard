<!-- Modal -->
<form action="assets/user-partials/_handleSignup.php" method="POST">
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Account Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           
            <div class="mb-2 mt-2">
                    <label for="text" class="form-label">Last name:</label>
                    <input type="text" class="form-control text-uppercase" id="lastName" placeholder="Enter Lastname" name="lastName" onkeypress="return lettersOnly(event)" required>
            </div>

            <div class="mb-2 mt-2">
                    <label for="text" class="form-label">First name::</label>
                    <input type="text" class="form-control text-uppercase" id="firstName" placeholder="Enter Firstname" name="firstName" onkeypress="return lettersOnly(event)" required>
            </div>

            <div class="mb-2 mt-2">
                    <label for="text" class="form-label">Middle name::</label>
                    <input type="text" class="form-control text-uppercase" id="middleName" placeholder="Optional" name="middleName" onkeypress="return lettersOnly(event)">
            </div>

            <div class="mb-2 mt-2">
                    <label for="text" class="form-label">Username:</label>
                    <input type="text" class="form-control text-capitalize" id="username" placeholder="Enter Username" name="username" required>
            </div>

            <div class="">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>

            <div class="">
                    <label for="password_confirmation" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" placeholder="Enter Confirm password" required>
            </div>
            <input type="text" id="role" name="role" value="USER" class="text-uppercase" hidden>
          </div>
          <hr>
          <div class="row mx-2" align="end">
              <div class="col mb-3">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="userRegister">Register</button>
              </div>
            </div>
        </div>
      </div>
    </div>
</form>

<script type="text/javascript">
function lettersOnly() 
{
            var charCode = event.keyCode;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

                return true;
            else
                return false;
}
</script>