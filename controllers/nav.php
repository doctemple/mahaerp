<?php

$pages = array("admin","sale","officer","stockeeper","manager");

include_once(_PATH.'/models/nav.php');
$nav = get_navs($conn);

$nav_group = get_groups($conn);

DEFINE('_MENU',$nav);

include_once(_PATH.'/views/nav/menu.php');

?>
