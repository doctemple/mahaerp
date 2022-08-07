<?php
$extension = content(card('<i class="fas fa-cogs"></i> PHP Extension',array2Badge($_EXT)));

$session = content(card('<i class="fas fa-chess-queen"></i> PHP SESSION',array2TBCol($_SESSION)));

$conf = content(card('<i class="fas fa-database"></i> PostgreSQL Configuration',array2TBCol(_SYS)));

$mhead = array("CODE","กลุ่ม","หน้า","เพจโมดูล","รหัสกลุ่ม");
$menu = content(card('<i class="fas fa-list-alt"></i> Menu Dictionary',array2Table(_MENU,$mhead)));

 echo content(col(array("4","8"),$session.$conf.$extension,$menu));

?>