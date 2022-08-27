<?php

$show = array("fld_userid","fld_username","fld_email","fld_type");
$profile = content(card('<i class="fas fa-user"></i> My Profile',array2TBCol(_USER,$show)));

echo content(col(array("12"),$profile));

?>