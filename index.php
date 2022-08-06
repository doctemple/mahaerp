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

include("core/start.php");

if(isset(_MENU[$_ROUTE][2])){
    echo breadcrumb(_MENU[$_ROUTE][1],_MENU[$_ROUTE][0],_MENU[$_ROUTE][1]);

        include("pages/"._MENU[$_ROUTE][2].".php");

}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
        include("pages/dashboard.php"); 
    }else{          
        include("pages/login.php");    
    }
}

    include("core/end.php"); 
?>