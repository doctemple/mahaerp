<?php 
if (strpos($_SERVER['QUERY_STRING'], '&') !== false) {
    $_PARAM = explode('&',$_SERVER['QUERY_STRING']);
    $_ROUTE = $_PARAM[0];
}else{
    $_PARAM = $_SERVER['QUERY_STRING'];
    $_ROUTE = $_PARAM; 
}
DEFINE('_PARAM',$_PARAM);
DEFINE('_ROUTE',$_ROUTE);
DEFINE('_PATH',dirname(__FILE__));
DEFINE('_LAST',date('d.m.Y H:i:s',filemtime(_PATH."/.git")));

include(_PATH."/core/start.php");       



if(isset($_ROUTE) && $_ROUTE!=""){
    $modules = @get_page($conn,$_ROUTE);
    if($modules){
    $module = trim($modules['fld_page']);   
    }else{
        $module = "";
    }
    if($module!=""){
        $subname = @get_subName($conn,$modules['fld_subcode']);
        if($subname){
            echo breadcrumb($modules['fld_pname'],$subname,$modules['fld_pname']);
        }else{
            echo breadcrumb($modules['fld_pname'],$modules['fld_pname']);
        }

        //include(_PATH."/modules/{$module}.php");
        route($module);
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