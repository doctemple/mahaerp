  <!-- Menu Sidebar -->
  <aside id="panelLeft" class="main-sidebar sidebar-light-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="?" class="brand-link">
      <img src="dist/img/mini.png" alt="Maha Technology" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MAHA Technology</span>
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
<?php
$pages['sale'] = array("vq","rq","rql","rqc","quo","od");
$pages['pur'] = array("sq","prql","upp","rqs","po","pol");
$pages['wh'] = array("pp","rec","pua","pic","del","aj");
$pages['acc'] = array("bb","bil","col","deb","fol");
?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if(array_search($rou,$pages['sale'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(array_search($rou,$pages['sale'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ฝ่ายขาย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?rq" class="nav-link <?php if($rou=="rq"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ลูกค้าขอให้เสนอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rql" class="nav-link <?php if($rou=="rql"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการขอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rqc" class="nav-link <?php if($rou=="rqc"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เปรียบเทียบราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?quo" class="nav-link <?php if($rou=="quo"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ใบเสนอราคา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?od" class="nav-link <?php if($rou=="od"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เปิดบิลขาย</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  <?php if(array_search($rou,$pages['pur'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(array_search($rou,$pages['pur'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                จัดซื้อ 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?prql" class="nav-link <?php if($rou=="prql"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการขอราคาสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?rqs" class="nav-link <?php if($rou=="rqs"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ขอราคาซัพพลายเออร์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?upp" class="nav-link <?php if($rou=="upp"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปรับปรุงราคาสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?po" class="nav-link <?php if($rou=="po"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>สร้างใบสั่งซื้อ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pol" class="nav-link <?php if($rou=="pol"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายการใบสั่งซื้อ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  <?php if(array_search($rou,$pages['wh'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(array_search($rou,$pages['wh'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                คลังสินค้า
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?rec" class="nav-link <?php if($rou=="rec"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รับสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pua" class="nav-link <?php if($rou=="pua"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>จัดเก็บสินค้าเข้าคลัง</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?pic" class="nav-link <?php if($rou=="pic"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เบิกสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?del" class="nav-link <?php if($rou=="del"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>การจัดส่งสินค้า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?aj" class="nav-link <?php if($rou=="aj"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปรับปรุงคลังสินค้า</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  <?php if(array_search($rou,$pages['acc'])){ echo "menu-open"; } ?>">
            <a href="#" class="nav-link <?php if(array_search($rou,$pages['acc'])){ echo "active"; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                บัญชี
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?bil" class="nav-link <?php if($rou=="bil"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ออกบิล/ใบเสร็จรับเงืน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?col" class="nav-link <?php if($rou=="col"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>วางบิล/รับเซ็ค</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?deb" class="nav-link <?php if($rou=="deb"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>บัญชีลูกหนี้</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?fol" class="nav-link <?php if($rou=="fol"){ echo "active"; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>บันทึกการติดตาม</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="?" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>อื่นๆ</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>