<?php 
// USING MVC 
    if(isset($_GET['detail'])){
    $poid = $_GET['detail'];
    }
    
    $comm = "receive";
    include_once(_PATH.'/controllers/'.$comm.'.php');
?>
