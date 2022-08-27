<?php 
session_start(); 
include_once(_PATH.'/core/config.php');
include_once(_PATH.'/controllers/conn.php');
include_once(_PATH.'/languages/lang.php');
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
        echo overlay(_L('psql_connect'),
        '<i class="fas fa-check-circle text-success"></i> '._L('psql_connected').'<br>
        <i class="fas fa-times-circle text-danger"></i> '._L('host_check').' : '._SYS['host'].' <br>
        <i class="fas fa-times-circle text-danger"></i> '._L('psql_FIX'),"file-code");
      }

    if(isset($_SESSION['aut'])){ 
    include(_PATH.'/components/topbar.php');
    include(_PATH.'/components/panel-left.php');
    include(_PATH.'/components/page-open.php'); 
  }
}else{
  echo overlay(_L('php_pgsql'),_L('php_ext_pgsql'),"database");
}
?>