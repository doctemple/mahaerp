<?php
// USING MVC 
$comm = "users";
$roles = array("admin","sale","officer","stockeeper","manager");
include_once(_PATH.'/models/'.$comm.'.php');
include_once(_PATH.'/controllers/'.$comm.'.php');

?>