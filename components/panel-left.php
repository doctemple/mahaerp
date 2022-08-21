  <!-- Menu Sidebar -->
  <aside id="panelLeft" class="main-sidebar sidebar-light-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="?" class="brand-link bg-primary shadow-lg">
      <img src="dist/img/mini.png" alt="Maha Technology" class="brand-image-xl img-circle " style="opacity: .8">
      <span class="brand-text font-weight-light">&nbsp;<strong><?php print(_SYS['system']); ?></strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <br>

      <!-- SidebarSearch Form -->
      <div class="form-inline p-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="ค้นหา" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <?php
      include_once(_PATH.'/controllers/nav.php');
      ?>


    </div>

    <!-- /.sidebar -->
  </aside>
