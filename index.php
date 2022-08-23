<?php 
if (STRPOS($_SERVER['QUERY_STRING'], '&') !== false) {
    $_PARAM = EXPLODE('&',$_SERVER['QUERY_STRING']);
    $_ROUTE = $_PARAM[0];
}else{
    $_PARAM = $_SERVER['QUERY_STRING'];
    $_ROUTE = $_PARAM; 
}
DEFINE('_PARAM',$_PARAM);
DEFINE('_ROUTE',$_ROUTE);
DEFINE('_PATH',dirname(__FILE__));
DEFINE('_LAST',date('d.m.Y H:i:s',FILEMTIME(_PATH."/.git")));
$pn="fld_page";
$sc="fld_subcode";
include(_PATH."/core/start.php");       

if(isset($_ROUTE) && $_ROUTE!=""){
    $modules = @get_page($conn,$_ROUTE);
    if($modules){
    $module = trim($modules[$pn]);   
    }else{
        $module = "";
    }
    if($module!=""){
        $subname = @get_subName($conn,$modules[$sc]);
        if($subname){
            echo breadcrumb($modules[$pn],$subname,$modules[$pn]);
        }else{
            echo breadcrumb($modules[$pn],$modules[$pn]);
        }

        ROUTE($module);
    }else{
        include(_PATH."/modules/pagenot.php");
    }

}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
        include(_PATH."/modules/dashboard.php"); 
    }else{          
        include(_PATH."/modules/login.php");    
    }
}

include(_PATH."/core/end.php");
?>