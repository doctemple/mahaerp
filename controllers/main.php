<?php
if(isset($_SESSION['uid'])){
    $user_detail = get_user($_SESSION['uid']);
    $user_online = $user_detail['fld_username'];
}

function route($module){
    include(_PATH."/modules/{$module}.php");
}
?>