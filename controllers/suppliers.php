<?php
    if(isset($_GET['confirm'])){
        $reqid = $_GET['confirm'];
        include_once(_PATH.'/views/'.$comm.'/add.php');  
    }else{
        include_once(_PATH.'/views/'.$comm.'/list.php');                  
    }
?>