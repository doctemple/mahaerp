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

// Tags Script
$_CONFIG['tags'] = array(
    'jquery' => '<script src="plugins/jquery/jquery.min.js"></script>',
    'bootstrap' => '<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>',
    'adminlte' => '<script src="dist/js/adminlte.js"></script>',
    'chart' => '<script src="plugins/chart.js/Chart.min.js"></script>',
    'start' => '<script src="dist/js/start.js"></script>',
    'dashboard3' => '<script src="dist/js/pages/dashboard3.js"></script>',
    'report' => '<script src="dist/js/pages/report.js"></script>',
    'login' => '<script src="dist/js/login.js"></script>');

// Default script
$_CONFIG['script'] = array(
    'jquery' => true,
    'bootstrap' => true,
    'adminlte' => true,
    'chart' => false,
    'start' => true,
    'dashboard3' => false,
    'report' => false,
    'login' => false);

// Code Pages 
// Generage Menu in future  
DEFINE('_PAGES',
        array(
            'sale' => array("vq","rq","rql","rqc","quo","od"),
            'pur' => array("sq","prql","upp","rqs","po","pol"),
            'wh' => array("pp","rec","pua","pic","del","aj"),
            'acc' => array("bb","bil","col","deb","fol"),
            'set' => array("uu","use","role","gra","eve"),
            'rep' => array("rr","requpo","resupo","reprwh","redebill","redein","redeex"),
            'sys' => array('sys')
        )
);
    
include("core/start.php");

    switch($_ROUTE) {
        case 'rq': include("pages/req-quo.php"); break;
        case 'rql': 
            if($_SUBP==true && isset($_PARAM[1])){
                $reqid = $_PARAM[1];
                include("pages/req-quo-detail.php");    
            }else{
                include("pages/req-quo-list.php");                 
            }

            break;
        case 'rqc': include("pages/req-quo-com.php"); break;
        case 'quo': include("pages/quo.php"); break;   
        case 'od': include("pages/order.php"); break;   
        case 'help': include("pages/help.php"); break;
        case 'prql': 
            if($_SUBP==true && isset($_PARAM[1]) && isset($_PARAM[2])){
                $reqid = $_PARAM[1];
                $vendorid = $_PARAM[2];
                include("pages/pre-req-quo-vendor.php"); 
            }else{
                include("pages/pre-req-quo-list.php");                 
            }

            break;
        case 'upp': include("pages/up-product-price.php"); break;
        case 'rqs': include("pages/req-quo-vendor.php"); break;
        case 'po': include("pages/po.php"); break;
        case 'pol': include("pages/po-list.php"); break;
        case 'rec': include("pages/receive.php"); break;
        case 'pua': include("pages/putaway.php"); break;
        case 'pic': include("pages/pick.php"); break;
        case 'del': include("pages/delivery.php"); break;
        case 'aj': include("pages/adjust.php"); break;
        case 'bil': include("pages/billing.php"); break;
        case 'col': include("pages/collection.php"); break;
        case 'deb': include("pages/debtor.php"); break;
        case 'fol': include("pages/follow.php"); break;
        case 'use': include("pages/users.php"); break;
        case 'so': include("pages/signout.php"); break;
        case 'requpo': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        case 'resupo': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        case 'reprwh': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        case 'redebill': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        case 'redein': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        case 'redeex': 
            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/report.php"); break;
        default : 
        if(isset($_SESSION['aut']) && $_SESSION['aut']==true){

            $_CONFIG['script']['chart'] = true;
            $_CONFIG['script']['report'] = true;
            include("pages/dashboard.php"); 
        }else{     
            $_CONFIG['script']['login'] = true;      
            include("pages/login.php");    
        }
        break;
        case 'sys': include("pages/system.php"); break;
    }

    include("core/end.php"); 
?>