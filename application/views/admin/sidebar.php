<?php 

 ?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/img/admin_icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $nama_admin;  ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

          <li <?php if( "/sp_tomato/admin" == $_SERVER['REQUEST_URI'] ){ 
          ?> class="active" <?php } ?>>
          <a href="<?php echo base_url()?>admin">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li <?php if( "/sp_tomato/admin/gejala" == $_SERVER['REQUEST_URI'] ){ 
          ?> class="active" <?php } ?>>
          <a href="<?php echo base_url()?>admin/gejala">
            <i class="fa fa-database"></i> <span>Gejala</span>
          </a>
        </li>
        <li <?php if( "/sp_tomato/admin/hamapenyakit" == $_SERVER['REQUEST_URI'] ){ 
          ?> class="active" <?php } ?>>
          <a href="<?php echo base_url()?>admin/hamapenyakit">
            <i class="fa fa-database"></i> <span>Hama Dan Penyakit</span>
          </a>
        </li>

        <!-- <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>