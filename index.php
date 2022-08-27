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
$_GLOBAL['pn']="fld_pname";
$_GLOBAL['pp']="fld_page";
$_GLOBAL['pc']="fld_pcode";
$_GLOBAL['sc']="fld_subcode";
include(_PATH."/core/start.php");       

if(isset($_ROUTE) && $_ROUTE!=""){
    $modules = @get_page($_ROUTE);
    if($modules){
    $module = trim($modules[$_GLOBAL['pp']]);   
    }else{
        $module = "";
    }
    if($module!=""){
        $subname = @get_subName($modules[$_GLOBAL['sc']]);
        if($subname){
            echo breadcrumb($modules[$_GLOBAL['pn']],$subname,$modules[$_GLOBAL['pn']]);
        }else{
            echo breadcrumb($modules[$_GLOBAL['pn']],$modules[$_GLOBAL['pn']]);
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