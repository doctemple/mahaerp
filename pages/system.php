<?php
$extension = content(card("PHP Extension",array2Badge($_EXT)));

$session = content(card("PHP SESSION",array2TBCol($_SESSION)));

$conf = content(card("PostgreSQL Configuration",array2TBCol(_SYS)));

$mhead = array("CODE","กลุ่ม","หน้า","เพจโมดูล","รหัสกลุ่ม");
$menu = content(card("Menu Dictionary",array2Table(_MENU,$mhead)));
echo col(array("4","8"),$session.$conf.$extension,$menu);

?>