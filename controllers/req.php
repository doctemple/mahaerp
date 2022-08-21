<?php
    if(isset($_GET['detail'])){
        $reqid = $_GET['detail'];
        include_once(_PATH.'/views/'.$comm.'/detail.php');  
    }else{
        include_once(_PATH.'/views/'.$comm.'/index.php');                  
    }

?>