<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add FAQ
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Faq</a></li>
      <li class="active">Add Menu</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('faq_added')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Menu have been added </div> 
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="add_menu_form" action=" <?php echo base_url(); ?>admin/faq/add_process" method="POST"  enctype="multipart/form-data" >
          <div class="form-group col-md-12">
            <label>Question:</label>
            <input type="text" class="form-control" id="menu_title" name="question" value="">
          </div>
          <div class="form-group col-md-12">
            <label>Answer:</label>
            <div class="box box-info">
              <div class="box-body pad">
                  <textarea id="menu_description" name="answer" rows="10" cols="80"></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value='Add'>
          </div>
        </form>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>