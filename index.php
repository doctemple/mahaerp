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
DEFINE('_LAST',date('d.m.Y H:i:s',filemtime(_PATH."/.git")));

include(_PATH."/core/start.php");       



if(isset($_ROUTE) && $_ROUTE!=""){
    $r_pages = @get_page($conn,$_ROUTE);
    if($r_pages){
    $r_page = trim($r_pages['fld_page']);   
    }else{
        $r_page = "";
    }
    if($r_page!=""){
        $subname = @get_subName($conn,$r_pages['fld_subcode']);
        if($subname){
            echo breadcrumb($r_pages['fld_pname'],$subname,$r_pages['fld_pname']);
        }else{
            echo breadcrumb($r_pages['fld_pname'],$r_pages['fld_pname']);
        }

        include(_PATH."/pages/{$r_page}.php");
    }else{
        include(_PATH."/pages/pagenot.php");
    }

}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
        include(_PATH."/pages/dashboard.php"); 
    }else{          
        include(_PATH."/pages/login.php");    
    }
}

    include(_PATH."/core/end.php"); 
?>