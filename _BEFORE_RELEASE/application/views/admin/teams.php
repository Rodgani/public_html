<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>All Teams<small></small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Teams</a></li>
      <li class="active">All Teams</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
                      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#all_leagues" data-toggle="tab" aria-expanded="true">All Teams</a></li>
              <li class=""><a href="#add_city" data-toggle="tab" aria-expanded="false">Add Team</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="all_leagues">
                <h3>All Teams</h3>
            <table id="all_menu" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>City</th>
                      <th>League</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($teams as $team):?>
                  <tr id="<?php  echo  $team['id']  ?>">
                      <td> <?php echo $team['league_name'] ?> </td>
                      <td> <?php echo $team['city_name'] ?> </td>
                      <td> <?php echo $team['league_name'] ?> </td>
                      <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>teams/edit/<?php echo $team['id']  ?>"> Edit </a>
                      <a  href="<?php echo base_url();?>teams/delete/<?php echo $team['id']  ?>" class="btn btn-danger"> Delete </a> </td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="add_city">

            <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('menu_added')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Menu have been added </div> 
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="add_menu_form" action=" <?php echo base_url(); ?>teams/add" method="POST"  enctype="multipart/form-data" >

          <div class="form-group col-md-12">
            <label>Select City:</label>
            <select class="form-control c-select" name="city_id">
            <?php foreach ($cities as $key => $value): ?>
            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
            <?php endforeach ?>
          </select>
          </div>

          <div class="form-group col-md-12">
            <label>Select League:</label>
            <select class="form-control c-select" name="league_id">
            <?php foreach ($leagues as $key => $value): ?>
            <option value="<?php echo $value['id'] ?>"><?php echo $value['league_name'] ?></option>
            <?php endforeach ?>
          </select>
          </div>

          <div class="form-group col-md-12">
            <label>Team Name:</label>
            <input type="text" class="form-control" id="menu_title" name="name" value="">
          </div>

          <div class="form-group col-md-12">
            <label>Team Image:</label>
            <input type="file" class="form-control" id="menu_title" name="team_image" value="">
          </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value='Submit'>
          </div>
        </form>
      </div>
      <!-- /.col -->
    </div>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>