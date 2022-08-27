<?php
if(isset($_SESSION['uid'])){
    DEFINE('_USER',get_user($_SESSION['uid']));
    $user_online = _USER['fld_username'];
}

function route($module){
    include(_PATH."/modules/{$module}.php");
}
?>