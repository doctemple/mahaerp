<?php 
session_start(); 
include_once('core/config.php');
include_once('controllers/conn.php');
include_once('controllers/menu.php');
include_once('controllers/script.php');
include('components/com.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php print(_SYS['system']); ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">
<?php
if(isset($_SESSION['aut'])){ 
include("components/topbar.php");
include("components/panel-left.php");
include("components/page-open.php"); 
}
?>