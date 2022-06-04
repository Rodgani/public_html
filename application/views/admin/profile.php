<div class="content-wrapper">
  
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Profile<small> Details</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Setting</a></li>
      <li class="active">Profile</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="box">
         <div class="box-header with-border">
              <h3 class="box-title">Update Profile</h3>
            </div>
          <div class="box-body">
      <div class="col-md-12">
        <h3>Profile</h3>
        <div class="alert alert-danger" id="detail_error_div" style="display: none;"></div>
        <div class="alert alert-success" id="detail_success_div" style="display: none;"> </div>
        <form id="profileUpdateform" method="POST">
          <div class="form-group">
              <label>First Name:</label>
              <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $profile[0]['firstName']?>">
          </div>
          <div class="form-group">
              <label>Last Name:</label>
              <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $profile[0]['lastName']?>">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $profile[0]['email']?>">
          </div>
          <div class="form-group">
              <label>Zip Code:</label>
              <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $profile[0]['zip']?>">
          </div>
          <button type="submit" class="btn btn-primary customer-profile">Update Your Profile Details</button>
        </form>
        <br>
        <h3>Change Password</h3>
        <div class="alert alert-danger" id="alert_error" style="display: none;"></div>
        <div class="alert alert-success" id="alert_success" style="display: none;"> </div>
        <form id="reset_password_form" method="POST">
            <div class="form-group">
                <label>Current Password:</label>
                <input type="Password" class="form-control" id="password" name="pasoword">
            </div>
            <div class="form-group">
                <label>New Password:</label>
                <input type="Password" class="form-control" id="new_password" name="new_pasoword">
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" id="confirm_password" name="confirm_pasoword">
            </div>
            <button type="submit" class="btn btn-primary change-password">Update Your Password</button>
        </form>
      </div>
      <!-- /.col -->
    </div></div>
    </div>
  </section>
  <!-- /.content -->
</div>