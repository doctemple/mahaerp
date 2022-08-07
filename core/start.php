<?php 
session_start(); 
include_once(_PATH.'/core/config.php');
include_once(_PATH.'/controllers/conn.php');

include_once(_PATH.'/controllers/menu.php');
include_once(_PATH.'/controllers/script.php');
include(_PATH.'/components/com.php');
include_once(_PATH.'/models/main.php');
include_once(_PATH.'/controllers/main.php');

ECHO HTML5_OPEN();
?>
<div class="wrapper">
<?php
if($_PGSQL){
      if(!_CON){ 
        echo overlay("การเชื่อมต่อ ฐานข้อมูล PostgreSQL",
        '<i class="fas fa-check-circle text-success"></i> PHP รองรับ PostgreSQL แล้ว<br>
        <i class="fas fa-times-circle text-danger"></i> ตรวจเช็ค HOST : '._SYS['host'].' <br>
        <i class="fas fa-times-circle text-danger"></i> หนดค่าการเชื่อมต่อ core/config.php ให้ถูกต้อง',"file-code");
      }

    if(isset($_SESSION['aut'])){ 
    include(_PATH.'/components/topbar.php');
    include(_PATH.'/components/panel-left.php');
    include(_PATH.'/components/page-open.php'); 
  }
}else{
  echo overlay("PHP ไม่รองรับ PostgreSQL","กรุณาเปิด Extension php_pgsql ใน php.ini","database");
}
?>