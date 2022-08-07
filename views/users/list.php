<?php
$hm = array("#","รหัส","ผู้ใช้","Encode","เมล","กลุ่ม","");
$add = '<a class="btn btn-primary" href="?'._ROUTE.'&add"><i class="fa fa-plus"></i> เพิ่มผู้ใช้</a>';
echo content(card($add,array2Table(${$comm},$hm,true)));
?>