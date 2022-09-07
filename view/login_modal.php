<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginLabel">Login Medicio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="login" method="post" id="login" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">National Code</label>
              <input type="text" name="nationalCode" class="form-control" id="validationCustom01" placeholder="- - - - - - - - - -" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                National Code is require.
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="* * * *" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Password is require.
              </div>
            </div>
            
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Type Account</label>
              <select onchange="ShowMedicalNum(this.value)" name="typeAccount" class="form-select" id="validationCustom04" >
                <?php if($_SESSION['location'] == 'home') :?>
                  <option selected disabled value="">Choose . . .</option>
                  <option value="Doctor">Doctor</option>
                  <option value="User">User</option>
                <?php elseif($_SESSION['location'] == 'signup_user'):?>
                  <option value="Doctor">Doctor</option>
                  <option selected value="User">User</option>
                <?php elseif($_SESSION['location'] == 'signup_doctor'):?>
                  <option selected value="Doctor">Doctor</option>
                  <option value="User">User</option>
                <?php endif;?>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>

            <div id="medic-num-container" style="display: none;" class="col-md-6">
              <label for="validationCustom03" class="form-label">Medical Number</label>
              <input name="medical-number" type="text" class="form-control" placeholder="123456" id="validationCustom03">
              <div class="invalid-feedback">
                Medical Number is require.
              </div>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button form="login" type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>