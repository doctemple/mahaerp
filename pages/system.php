<?php
echo content(card("PHP Extension",array2Badge($_EXT)));
$conf = content(card("PostgreSQL Configuration",array2TBCol(_SYS)));

$mhead = array("CODE","กลุ่ม","หน้า","เพจโมดูล","รหัสกลุ่ม");
$menu = content(card("Grossary Code",array2Table(_MENU,$mhead)));
echo col(array("4","8"),$conf,$menu);
?>