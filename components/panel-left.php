  <!-- Menu Sidebar -->
  <aside id="panelLeft" class="main-sidebar sidebar-light-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="?" class="brand-link">
      <img src="dist/img/mini.png" alt="Maha Technology" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php print(_SYS['system']); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if(in_array($_ROUTE,_PAGES['sale'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['sale'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-comments-dollar"></i>
              <p>
                ฝ่ายขาย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?rq" class="nav-link <?php if($_ROUTE=="rq"){ echo "active"; } ?>">
                  <i class="fas fa-file-import nav-icon"></i>
                  <p>ลูกค้าขอให้เสนอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rql" class="nav-link <?php if($_ROUTE=="rql"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการขอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rqc" class="nav-link <?php if($_ROUTE=="rqc"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เปรียบเทียบราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?quo" class="nav-link <?php if($_ROUTE=="quo"){ echo "active"; } ?>">
                  <i class="fas fa-file-invoice-dollar nav-icon"></i>
                  <p>ใบเสนอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?od" class="nav-link <?php if($_ROUTE=="od"){ echo "active"; } ?>">
                  <i class="fas fa-file-invoice nav-icon"></i>
                  <p>เปิดบิลขาย</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  <?php if(in_array($_ROUTE,_PAGES['pur'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['pur'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                จัดซื้อ 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?prql" class="nav-link <?php if($_ROUTE=="prql"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการขอราคาสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rqs" class="nav-link <?php if($_ROUTE=="rqs"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ขอราคาซัพพลายเออร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?upp" class="nav-link <?php if($_ROUTE=="upp"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปรับปรุงราคาสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?po" class="nav-link <?php if($_ROUTE=="po"){ echo "active"; } ?>">
                <i class="fas fa-file-invoice-dollar nav-icon"></i>
                  <p>สร้างใบสั่งซื้อ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pol" class="nav-link <?php if($_ROUTE=="pol"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการใบสั่งซื้อ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  <?php if(in_array($_ROUTE,_PAGES['wh'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['wh'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                คลังสินค้า
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?rec" class="nav-link <?php if($_ROUTE=="rec"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รับสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pua" class="nav-link <?php if($_ROUTE=="pua"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดเก็บสินค้าเข้าคลัง</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pic" class="nav-link <?php if($_ROUTE=="pic"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เบิกสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?del" class="nav-link <?php if($_ROUTE=="del"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>การจัดส่งสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?aj" class="nav-link <?php if($_ROUTE=="aj"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปรับปรุงคลังสินค้า</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  <?php if(in_array($_ROUTE,_PAGES['acc'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['acc'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                บัญชี
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?bil" class="nav-link <?php if($_ROUTE=="bil"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ออกบิล/ใบเสร็จรับเงืน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?col" class="nav-link <?php if($_ROUTE=="col"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>วางบิล/รับเซ็ค</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?deb" class="nav-link <?php if($_ROUTE=="deb"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>บัญชีลูกหนี้</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?fol" class="nav-link <?php if($_ROUTE=="fol"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>บันทึกการติดตาม</p>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="nav-item  <?php if(in_array($_ROUTE,_PAGES['rep'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['rep'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                รายงาน
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?requpo" class="nav-link <?php if($_ROUTE=="requpo"){ echo "active"; } ?>">
                  <i class="fas fa-chart-line nav-icon"></i>
                  <p>การเสนอขาย/คำสั่งซื้อ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?resupo" class="nav-link <?php if($_ROUTE=="resupo"){ echo "active"; } ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                  <p>ต้นทุนสินค้า/การจัดซื้อ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?reprwh" class="nav-link <?php if($_ROUTE=="reprwh"){ echo "active"; } ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                  <p>ราคาสินค้า/คลังสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?redebill" class="nav-link <?php if($_ROUTE=="redebill"){ echo "active"; } ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                  <p>การจัดส่งสินค้า/วางบิล</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?redein" class="nav-link <?php if($_ROUTE=="redein"){ echo "active"; } ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                  <p>บัญชีลูกหนี้/รายรับ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?redeex" class="nav-link <?php if($_ROUTE=="redeex"){ echo "active"; } ?>">
                <i class="fas fa-chart-line nav-icon"></i>
                  <p>บัญชีเจ้าหนี้/รายจ่าย</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  <?php if(in_array($_ROUTE,_PAGES['set'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(in_array($_ROUTE,_PAGES['set'])){ echo "active"; } ?>">
              <i class="fas nav-icon fa-users-cog"></i>
              <p>
                การตั้งค่า
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?use" class="nav-link <?php if($_ROUTE=="use"){ echo "active"; } ?>">
                  <i class="fas fa-user nav-icon"></i>
                  <p>ผู้ใช้</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?role" class="nav-link <?php if($_ROUTE=="role"){ echo "active"; } ?>">
                  <i class="fas fa-users nav-icon"></i>
                  <p>กลุ่ม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?gra" class="nav-link <?php if($_ROUTE=="gra"){ echo "active"; } ?>">
                  <i class="fas nav-icon fa-person-booth"></i>
                  <p>สิทธิ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?eve" class="nav-link <?php if($_ROUTE=="eve"){ echo "active"; } ?>">
                  <i class="fas nav-icon fa-person-booth"></i>
                  <p>ประวัติการเข้าใช้ระบบ</p>
                </a>
              </li>
            </ul>
          </li>

              <li class="nav-item">
                <a href="?sys" class="nav-link <?php if($_ROUTE=="sys"){ echo "active"; } ?>">
                  <i class="nav-icon fas fa-tools"></i>
                  <p>ผู้ดูและระบบ</p>
                </a>
              </li>

          <?php if(isset($_SESSION['aut'])){ ?> 
          <li class="nav-item" style="margin-top:60px;">
            <a href="controllers/signout.php" class="nav-link">
            <span class="btn btn-danger btn-circle btn-circle-sm">
              <i class="nav-icon fa fa-sign-out-alt text-light"></i> 
            </span><p>&nbsp;&nbsp;ออกจากระบบ</p>
            </a>
          </li>
          <?php } ?>
          
        </ul>

      </nav>
      <!-- /.sidebar-menu -->


    </div>

    <!-- /.sidebar -->
  </aside>