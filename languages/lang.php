<?php
if(!isset($_SESSION['la'])){
   $la ="TH";
}else{
    $la = $_SESSION['la'];
}

include_once(_PATH."/languages/{$la}.php");
DEFINE('_L',$_LANG);

function _L($T){
    return _L[$T][$_SESSION['la']];
}
?>