<div class="content-wrapper">
 <section class="content-header">
    <h1>Manage Setting<small> Detail</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Settings</a></li>
      <li class="active">setting</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="POST" id="setting_form">
          <div class="row">
            <div class="col-md-6">
              <h3>About us Detail</h3>
              <div class="form-group">
                <label>Details:</label>
                <input type="text" class="form-control" id="about_detail" name="about_detail" value="<?php echo $settings['about_detail'] ?>">
              </div>
              <h3>Business Email</h3>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="business_email" name="business_email" value="<?php echo $settings['business_email'] ?>">
              </div>
              <h3>Social Links</h3>
              <div class="form-group">
                <label>Facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $settings['facebook'] ?>" >
              </div>
              <div class="form-group">
                <label>Twitter:</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $settings['twitter'] ?>" >
              </div>
              <div class="form-group">
                <label>Google Plus:</label>
                <input type="text" class="form-control" id="google_plus" name="google_plus" value="<?php echo $settings['google_plus'] ?>" >
              </div>
              <div class="form-group">
                <label>Pinterest:</label>
                <input type="text" class="form-control" id="pinterest" name="pinterest" value="<?php echo $settings['pinterest'] ?>" >
              </div>
              <div class="form-group">
                <label>Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $settings['instagram'] ?>" >
              </div>
              <div class="form-group">
                <label>Skype:</label>
                <input type="text" class="form-control" id="skype" name="skype" value="<?php echo $settings['skype'] ?>" >
              </div>
            </div>
            <div class="col-md-6">
              <h3>Contact us Detail</h3>
              <div class="form-group">
                <label>Detail:</label>
                <input type="text" class="form-control" id="contact_detail" name="contact_detail" value="<?php echo $settings['contact_detail'] ?>" >
              </div>
              <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $settings['address'] ?>">
              </div>
              <div class="form-group">
                <label>Email 1:</label>
                <input type="text" class="form-control" id="email1" name="email1" value="<?php echo $settings['email1'] ?>" >
              </div>
              <div class="form-group">
                <label>Email 2:</label>
                <input type="text" class="form-control" id="email2" name="email2" value="<?php echo $settings['email2'] ?>" >
              </div>
              <div class="form-group">
                <label>Phone Number 1:</label>
                <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $settings['phone1'] ?>" >
              </div>
              <div class="form-group">
                <label>Phone Number 2:</label>
                <input type="text" class="form-control" id="phone2" name="phone2" value="<?php echo $settings['phone2'] ?>" >
              </div>
              <div class="form-group">
                <label>Fax Number:</label>
                <input type="text" class="form-control" id="fax" name="fax" value="<?php echo $settings['fax'] ?>" >
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary change-settings">Submit</button>
        </form>
      </div>
    </div>
  </section>
</div>