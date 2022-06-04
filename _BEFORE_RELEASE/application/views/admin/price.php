<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Price Setup
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">price Setup</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo base_url();?>admin/update_price" method="post">
          <div class="row" style="background-color: white">
            <div class="col-md-12 pt-5">
              <table  class="table table-condensed" id="price_table">
                <thead>
                  <tr>
                    <th>Number of Kids</th>
                    <th>Number of Adults</th>
                    <th>How many recipes</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody id="tbody">

                  <?php foreach($price_setup as $price): ?>
                    <?php
                    $single_key =  explode('_',$price['price_key'])
                     ?>
                    <tr>
                      <td><?php echo $single_key[0]?></td>
                      <td><?php echo $single_key[1]?></td>
                      <td><?php echo $single_key[2]?></td>
                      <td>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-dollar"></i>
                            </div>
                            <input type="number" style="height: 30px; padding-left:  8px;" name="<?php echo $price['price_key'];?>" value="<?php echo $price['price'];?>">

                          </div>
                      </td>

                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <br/>
          <div class="row" style="margin-bottom: 15px; ">
            <div class="col-md-4 col-md-offset-4" >
              <input type="submit"  value="Update Prices" class="btn btn-sm btn-block btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>