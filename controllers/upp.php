<?php
    if(isset($_GET['detail'])){
        $reqid = $_GET['detail'];
        include_once(_PATH.'/views/'.$comm.'/update.php');  
    }else{
        include_once(_PATH.'/views/'.$comm.'/list.php');                  
    }

?>