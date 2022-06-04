<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Edit Testimonial<small> Details</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Testimonial</a></li>
      <li class="active">Edit Testimonial</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('testimonial_edited')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> testimonial have been Edited </div>
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="edit_menu_form" action=" <?php echo base_url(); ?>admin/edit_testimonial_process/<?php echo $testimonial[0]['id'] ?> " method="POST"  enctype="multipart/form-data" >
          <div class="form-group col-md-12">
            <label>Testimonial Title:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $testimonial[0]['author']?>">
          </div>
          <div class="form-group col-md-12">
            <label>Testimonial Title:</label>
            <input type="text" class="form-control" id="desigination" name="desigination" value="<?php echo $testimonial[0]['desigination']?>">
          </div>
          <div class="form-group col-md-12">
            <label>Description:</label>
            <div class="box box-info">
              <div class="box-body pad">
                  <textarea id="menu_description" name="menu_description" rows="10" cols="80"> <?php echo $testimonial[0]['description']?></textarea>
              </div>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label>Image:</label>
            <input type="file" class="form-control" id="menu_image" name="menu_image" value="">
            <div style="margin-top: 10px" id="image_viewer">
                <img  id="old_image" style="width: 100px" src="<?php echo base_url().'uploads/testimonial/'.$testimonial[0]['image']  ?>">
            </div>
            <input type="hidden" name="old_menu_image" value="<?php echo $testimonial[0]['image'] ;?>">
          </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value="Update">
          </div>
        </form>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>