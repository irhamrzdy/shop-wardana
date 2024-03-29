<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="<?= base_url('assets/bend/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/bend/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block"><?= ($_SESSION['uname']) ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/home" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/item" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tambah Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/admin" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Tambah Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/customer" class="nav-link">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Customer
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>