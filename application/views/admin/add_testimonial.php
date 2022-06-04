<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add Testimonial<small> Details</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Testimonial</a></li>
      <li class="active">Add Testimonial</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('testimonial_added')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Testimonial have been added </div>
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="add_menu_form" action=" <?php echo base_url(); ?>admin/add_testimonial_process" method="POST"  enctype="multipart/form-data" >
          <div class="form-group col-md-12">
            <label>Testimonial Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="">
          </div>
           <div class="form-group col-md-12">
            <label>Author Desigination:</label>
            <input type="text" class="form-control" id="desigination" name="desigination" value="">
          </div>

          <div class="form-group col-md-12">
            <label>Description:</label>
            <div class="box box-info">
              <div class="box-body pad">
                  <textarea id="testimonial_description" name="testimonial_description" rows="10" cols="80"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>Image:</label>
            <input type="file" class="form-control" id="menu_image" name="menu_image" value="">
          </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value='Submit'>
          </div>
        </form>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>