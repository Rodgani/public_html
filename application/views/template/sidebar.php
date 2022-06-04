  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Allgemein</li>
        <li>
          <a href="<?php echo base_url(); ?>admin"> 
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>





        <li class="header"> Fahrzeuge verwalten</li>

        <li>
          <a href="<?php echo base_url().'admin/mietemich'; ?> ">
            <i class="fa fa-dashboard"></i> <span>Tagesmiete</span>
            <span class="pull-right-container">
            </span>
        </a>
        </li>



        <li class="header">Manage Requests</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tägliche Mietanfragen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>requests/get/mietemich/all"><i class="fa fa-circle-o"></i>Alles Requests</a></li>
            <li><a href="<?php echo base_url(); ?>requests/get/mietemich/pending"><i class="fa fa-circle-o"></i>steht aus</a></li>
            <li><a href="<?php echo base_url(); ?>requests/get/mietemich/connected"><i class="fa fa-circle-o"></i>In Verbindung gebracht</a></li>
          </ul>
        </li>

        

        <li class="header"> Testimonials </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Referenzen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="<?php echo base_url(); ?>admin/testimonial"><i class="fa fa-edit"></i>Alles Referenzen</a></li>
          </ul>
        </li>

        <li class="header" > Einstellungen </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Einstellungen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="<?php echo base_url(); ?>Admin/profile"><i class="fa fa-user"></i>Profil</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
