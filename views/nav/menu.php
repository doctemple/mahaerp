<?php
      $mactive = "active animate__animated animate__fadeIn";
      $active = "active text-primary animate__animated animate__flash animate__infinite animate__slow";
      ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php
          $sizegroup = sizeof($nav_group);
          $mm = '';
          for($g=0;$g<$sizegroup;$g++){

            if($_ROUTE!=""){
              $subcode =  @get_subCode($conn,$_ROUTE);
            }else{
              $subcode ="";
            }

          $mm .= '<li class="nav-item ';
          if($subcode!=""){
            $mm .= ($subcode===trim($nav_group[$g]['fld_subcode']))? "menu-open shadow" : '';
          }
          $mm .= ' "><a href="#" class="nav-link ';
          if($subcode!=""){
            $mm .= ($subcode===trim($nav_group[$g]['fld_subcode']))? $mactive : '';
          }
          $mm .= ' "><i class="nav-icon fas '.$nav_group[$g]['fld_subicon'].'"></i><p>';

          $mm .= trim($nav_group[$g]['fld_subname']);
          $mm .= '<i class="right fas fa-angle-left"></i></p></a>';
          $mm .= '<ul class="nav nav-treeview">';

          for($p=0;$p<sizeof(_MENU);$p++){
            if(trim(_MENU[$p]['fld_subcode'])===trim($nav_group[$g]['fld_subcode'])){
              $mm .= '<li class="nav-item">';
              $mm .= '<a href="?'.trim(_MENU[$p]['fld_pcode']).'" class="nav-link ';
              $mm .= ($_ROUTE===trim(_MENU[$p]['fld_pcode']))? $active : ''; 
              $mm .= ' ">';
              $mm .= '<i class="fas '.trim(_MENU[$p]['fld_icon']).' nav-icon"></i>';
              $mm .= '<p>'.trim(_MENU[$p]['fld_pname']).'</p>';
              $mm .= '</a>';
              $mm .= '</li>';
            }

          }

          $mm .= '</ul></li>';

          }

          echo $mm;
          ?>

          <?php if(isset($_SESSION['aut'])){ ?> 
          <li class="nav-item bg-danger rounded" style="margin-top:60px;">
            <a href="controllers/signout.php" class="nav-link">
            <span class="btn btn-light btn-circle btn-circle-sm shadow">
              <i class="nav-icon fa fa-sign-out-alt fa-flip-horizontal text-danger"></i> 
            </span><strong>&nbsp;&nbsp;ออกจากระบบ</strong>
            </a>
          </li>
          <?php } ?>
          
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
