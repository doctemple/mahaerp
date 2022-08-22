<?php
if(isset($_GET['qu'])){
    if(isset($_GET['confirm'])){
        $reqid = $_GET['confirm'];
        include_once(_PATH.'/views/'.$comm.'/preview.php');  
    }else{
        include_once(_PATH.'/views/'.$comm.'/price.php');                  
    }
}else{
    include_once(_PATH.'/views/'.$comm.'/list.php');   
}
?>