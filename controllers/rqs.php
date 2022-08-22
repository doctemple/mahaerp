<?php
    if(isset($_GET['confirm'])){
        $reqid = $_GET['confirm'];
        include_once(_PATH.'/views/'.$comm.'/confirm.php');  
    }else{
        include_once(_PATH.'/views/'.$comm.'/vendor.php');                  
    }
?>