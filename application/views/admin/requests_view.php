<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Alle Anfragen<small> Detail</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Zuhause</a></li>
      <li><a href="#">Anfragen</a></li>
      <li class="active">Alle Anfragen</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <table id="all_menu" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Auftragsnummer</th>
                      <th>Fahrzeugname</th>
                      <th>Kundenname</th>
                      <th>Kundenkontakt</th>  
                      <th>Status ändern</th>
                      <th style="width: 10%;">Vollansicht</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($requests as $request):?>
                  <tr id="<?php echo $request[$request_type.'_request_id']  ?>"> 
                    <?php 
                    $prefix_id = ($request_type == 'autoabo' ? 'MAA ' : 'TAA '  );

                         $label = '';
                      if($request['status']  == 'pending'){
                        $label = '#dd4b39';
                      }
                      if($request['status']  == 'connected'){
                        $label = '#00c0ef';
                      }
                      if($request['status']  == 'delivered'){
                        $label = '#00a65a';
                      }
                      ?>

                  



                      <td> <?php echo $prefix_id .$request[$request_type.'_request_id'] ?> </td>


                      <td> <?php echo $request['vehicle_name'] ?> </td>
                      <td> <?php echo $request['vorname'] ?> </td>
                      <td> <?php echo $request['telefon_nummer'] ?> </td>
                      <td> <select data-id="<?php echo $request[$request_type.'_request_id'] ?>" class="form-control text-white status_changer" style="background-color: <?php echo $label ?>; color: white;">
                        <option value="pending" <?php echo ($request['status'] == 'pending') ? 'selected' :'' ?>>Offen</option>
                        <option value="connected" <?php echo ($request['status'] == 'connected') ? 'selected' :'' ?>>In Kontakt</option>
                        <option value="delivered" <?php echo ($request['status'] == 'delivered') ? 'selected' :'' ?>>Abgeschlossen</option>
                      </select> </td>
                      <td>
                        <a   href="<?php echo base_url() ?>Requests/requestview/<?php echo $request_type ?>/<?php echo $request[$request_type.'_request_id']?>" class="btn btn-sm btn-info "> Details </a> 
                      <button data-id="<?php echo $request[$request_type.'_request_id'] ?>"  class="btn btn-sm btn-danger btn-delete"> löschen </button> 
                    </td>
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
<script>
  $(document).ready(function (){
    $('#all_menu').DataTable({
        aaSorting : [[0, 'desc']]
    });
  $(document).on('click', '.btn-delete', function(){
    var id = $(this).data('id');
    if(confirm('Are you Sure to Delete'))
    {
    $.ajax({
      url: base_url + 'requests/delete_request/<?php echo $request_type ?>/'+id,
      method: 'post',
      success: function (result)
      {
        if(result=="success")
        {
          $('#'+id).remove();
        }
      }
    });
  }
  });


    $(document).on('change', '.status_changer', function(){
    var status = $(this).find('option:selected').val();
    var id = $(this).data('id');
    // alert(id);

// return false;

    $.ajax({
      url: base_url + 'requests/change_status/<?php echo $request_type ?>/'+status +'/'+id,
      method: 'post',
      success: function (result)
      {
        if(result=="success")
        {
         window.location.reload();
        }
      }
    });
  });





});
</script>
