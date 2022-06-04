<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>All Testimonial<small> Detail</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Menu</a></li>
      <li class="active">All Menu</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <h3>All Testimonial<a href="<?php echo base_url(); ?>admin/add_testimonial" class="pull-right add-new-menu">Add Testimonial</a></h3>
            <table id="all_menu" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>Author</th>
                      <th>Desigination</th>

                      <th>Desciption</th>
                      <th style="width: 10%;">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($testimonials as $testimonial):?>
                  <tr id="<?php echo $testimonial['id']  ?>">
                      <td>
                        <?php if ($testimonial['image']) { ?>
                        <img style="width: 50px" src="<?php echo base_url().'uploads/testimonial/'.$testimonial['image']  ?>">
                      <?php } ?>
                      </td>
                      <td> <?php echo $testimonial['author'] ?> </td>
                      <td> <?php echo $testimonial['desigination'] ?> </td>
                      <td> <?php echo $testimonial['description'] ?> </td>

                      <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>admin/edit_testimonial/<?php echo $testimonial['id']  ?>"> Edit </a>
                      <button data-id="<?php echo $testimonial['id'] ?>"  class="btn btn-danger btn-delete"> Delete </button> </td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>