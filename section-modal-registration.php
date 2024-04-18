<div class="modal" id="registration-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Elite Skin PH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" autocomplete="">
      <div class="modal-body">
        <div class="px-3">
          <h5 class="modal-title text-center">Registration</h5>
          <div class="row mt-4">
            <div class="col-6">
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="first" class="form-control input-registration-firstname" value="<?php echo $first?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="last" class="form-control input-registration-lastname" value="<?php echo $last?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control input-registration-mobile" value="<?php echo $mobile?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control input-registration-email" value="<?php echo $email?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control input-registration-address" value="<?php echo $address?>">
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control input-registration-password">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control input-registration-confirm-password">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <input class="btn btn-primary w-100 btn-js-regiter" type="submit" name="signup" value="Create Account">
       
      </div>
      </form>
    </div>
  </div>
</div>