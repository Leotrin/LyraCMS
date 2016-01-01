<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="<?php if($select == 'dashboard'){ echo 'active'; } ?> treeview">
        <a href="<?php echo base_url('admin'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php if($select == 'blog'){ echo 'active'; } ?> treeview">
        <a href="<?php echo base_url('admin/blog'); ?>">
          <i class="fa fa-th"></i> <span>Blog</span>
        </a>
      </li>
      <li class="header">Users</li>
      <li class="<?php if($select == 'user'){ echo 'active'; } ?> treeview">
        <a href="<?php echo base_url('auth'); ?>">
          <i class="fa fa-user"></i> <span>Users</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>