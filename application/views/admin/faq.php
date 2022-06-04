<div class="content-wrapper">
  <section class="content-header">
    <h1>All faq<small> Detail</small></h1>
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
            <h3>All Testimonial<a href="<?php echo base_url(); ?>admin/faq/add" class="pull-right add-new-menu">Add FAQs</a></h3>
            <table id="all_menu" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Question</th>
                      <th>Answer</th>
                      <th style="width: 10%;">Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($faqs as $faq):?>
                  <tr id="<?php echo $faq['id']  ?>">

                      <td> <?php echo $faq['question'] ?> </td>
                      <td> <?php echo $faq['answer'] ?> </td>

                      <td>
                      <!-- <a class="btn btn-primary" href="<?php echo base_url();?>admin/edit_faq/<?php echo $faq['id']  ?>"> Edit </a> -->
                      <button data-id="<?php echo $faq['id'] ?>"  class="btn btn-danger btn-delete"> Delete </button> </td>
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