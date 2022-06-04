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
                      <th>ID</th>
                      <th>Name</th>
                      <th>Voraname</th>
                      <th>Email</th>
                      <th>Telefon</th>  
                      <th>marke</th>
                      <th style="width: 10%;">Vollansicht</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($requests as $request):?>
                  <tr id="<?php echo $request['id']  ?>"> 
                  


                      <td> <?php echo $request['id'] ?> </td>
<td> <?php echo $request['req_name'] ?> </td>
<td> <?php echo $request['req_voraname'] ?> </td>
<td> <?php echo $request['email'] ?> </td>
<td> <?php echo $request['req_telefon'] ?> </td>
<td> <?php echo $request['marke'] ?> </td>
                      
                      
                      <td>
                        <a   href="<?php echo base_url() ?>Requests/customrequestview/<?php echo $request['id'] ?>" class="btn btn-sm btn-info "> Details </a> 
                      <button data-id="<?php echo $request['id'] ?>"  class="btn btn-sm btn-danger btn-delete"> löschen </button> 
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


  $('.btn-delete').on('click',function(){
    var id = $(this).data('id');
    if(confirm('Are you Sure to Delete'))
    {
    $.ajax({
      url: base_url + 'requests/delete_custom_request/'+id,
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







});
</script>