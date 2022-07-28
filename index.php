<?php 
if(str_contains($_SERVER['QUERY_STRING'],'&')){
    $qs = explode('&',$_SERVER['QUERY_STRING']);
    $rou = $qs[0];
    $det = true;
}else{
    $qs = $_SERVER['QUERY_STRING'];
    $rou = $qs; 
    $det = false;
}

include("core/start.php");

//"prql","prq","rqs","po","pol"
    switch($rou) {
        case 'rq': include("pages/req-quo.php"); break;
        case 'rql': 
            if($det==true){
                include("pages/req-quo-detail.php");    
            }else{
                include("pages/req-quo-list.php");                 
            }

            break;
        case 'rqc': include("pages/req-quo-com.php"); break;
        case 'quo': include("pages/quo.php"); break;   
        case 'od': include("pages/order.php"); break;   
        case 'help': include("pages/help.php"); break;
        case 'prql': include("pages/pre-req-quo-list.php"); break;
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
        default : 
        if(isset($_SESSION['aut']) && $_SESSION['aut']==true){
            include("pages/dashboard.php"); 
        }else{
            include("pages/login.php");    
        }
        break;
    }

    include("core/end.php"); 
?>