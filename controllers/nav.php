<?php
include_once(_PATH.'/models/nav.php');
$nav = get_navs();
$nav_group = get_groups();
DEFINE('_MENU',$nav);
include_once(_PATH.'/views/nav/menu.php');
?>
