<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Edit Team</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Team</a></li>
      <li class="active">Edit Team</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('menu_edited')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Team have been Edited </div>
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="edit_menu_form" action=" <?php echo base_url(); ?>cities/edit_process/<?php echo $team[0]['id'] ?> " method="POST"  enctype="multipart/form-data" >
            <div class="form-group col-md-12">
            <label>Select Team:</label>
            <select class="form-control c-select" name="city_id">
            <?php foreach ($cities as $key => $value): ?>
            <option <?php echo ($team[0]['city_id'] == $value['id']) ? 'selected':''; ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
            <?php endforeach ?>
          </select>
          </div>


           <div class="form-group col-md-12">
            <label>Select League:</label>
            <select class="form-control c-select" name="city_id">
            <?php foreach ($Leagues as $key => $value): ?>
            <option <?php echo ($team[0]['league_id'] == $value['id']) ? 'selected':''; ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
            <?php endforeach ?>
          </select>
          </div>


          <div class="form-group col-md-12">
            <label>League Name:</label>
            <input type="text" class="form-control" id="menu_title" name="name" value="<?php echo $team[0]['team_name']?>">
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