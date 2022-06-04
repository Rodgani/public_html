  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>All Users <small>Detail</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
        <li class="active">All Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Frist Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Profile</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user): ?>
                <tr>

                  <td> <?php echo $user['id'] ;?>
                  <td> <?php echo $user['firstName'] ;?> </td>
                  <td> <?php echo $user['lastName'] ;?> </td>
                  <td><?php echo $user['email'] ;?></td>
                  <td>
                     <input type="checkbox" class="status_updater" data-toggle="toggle"  data-on="Active" data-off="Block"  id="<?php echo $user['id'] ;?>"  <?php if($user['status']=='1' ) { echo 'checked' ;}  ;?> >
                  </td>
                  <td>  <button type="button" class="btn btn-default show_model" data-id="<?php echo $user['id'] ;?>"> View </button> </td>

                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </section>
    <!-- /.content -->
  </div>
