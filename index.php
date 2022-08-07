<?php 
if (strpos($_SERVER['QUERY_STRING'], '&') !== false) {
    $_PARAM = explode('&',$_SERVER['QUERY_STRING']);
    $_ROUTE = $_PARAM[0];
    $_SUBP = true;
}else{
    $_PARAM = $_SERVER['QUERY_STRING'];
    $_ROUTE = $_PARAM; 
    $_SUBP = false;
}
DEFINE('_ROUTE',$_ROUTE);
DEFINE('_PATH',dirname(__FILE__));
DEFINE('_LAST',date('d.m.Y H:i:s',filemtime(_PATH)));

include(_PATH."/core/start.php");

if(isset(_MENU[$_ROUTE][2])){
    echo breadcrumb(_MENU[$_ROUTE][1],_MENU[$_ROUTE][0],_MENU[$_ROUTE][1]);

        include(_PATH."/pages/"._MENU[$_ROUTE][2].".php");

}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
        include(_PATH."/pages/dashboard.php"); 
    }else{          
        include(_PATH."/pages/login.php");    
    }
}

    include(_PATH."/core/end.php"); 
?>