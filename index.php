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

DEFINE('_MENU', array(
            "help"=>array("ช่วยเหลือ","คำศัพท์ในระบบ","help"),
            "rq"=>array("ฝ่ายขาย","ลูกค้าขอให้เสนอราคา","req-quo"),
            "rql"=>array("ฝ่ายขาย","รายการขอราคา","req-quo-list","req-quo-detail"),
            "rqc"=>array("ฝ่ายขาย","เปรียบเทียบราคา","req-quo-com"),
            "quo"=>array("ฝ่ายขาย","ใบเสนอราคา","quo"),
            "od"=>array("ฝ่ายขาย","เปิดบิลขาย","order"),

            "prql"=>array("จัดซื้อ","รายการขอราคาสินค้า","pre-req-quo-list"),
            "upp"=>array("จัดซื้อ","ปรับปรุงราคาสินค้า","up-product-price"),
            "rqs"=>array("จัดซื้อ","ขอราคาซัพพลายเออร์","req-quo-vendor"),
            "po"=>array("จัดซื้อ","สร้างใบสั่งซื้อ","po"),
            "pol"=>array("จัดซื้อ","รายการใบสั่งซื้อ","po-list"),

            "rec"=>array("คลังสินค้า","รับสินค้า","receive"),
            "pua"=>array("คลังสินค้า","จัดเก็บสินค้าเข้าคลัง","putaway"),
            "pic"=>array("คลังสินค้า","เบิกสินค้า","pick"),
            "del"=>array("คลังสินค้า","การจัดส่งสินค้า","delivery"),
            "aj"=>array("คลังสินค้า","ปรับปรุงคลังสินค้า","adjust"),

            "bil"=>array("บัญชี","ออกบิล/ใบเสร็จรับเงืน","billing"),
            "col"=>array("บัญชี","วางบิล/รับเซ็ค","collection"),
            "deb"=>array("บัญชี","บัญชีลูกหนี้","debtor"),
            "fol"=>array("บัญชี","บันทึกการติดตาม","follow"),

            "requpo"=>array("รายงาน","การเสนอขาย/คำสั่งซื้อ","report"),
            "resupo"=>array("รายงาน","ต้นทุนสินค้า/การจัดซื้อ","report"),
            "reprwh"=>array("รายงาน","ราคาสินค้า/คลังสินค้า","report"),
            "redebill"=>array("รายงาน","การจัดส่งสินค้า/วางบิล","report"),
            "redein"=>array("รายงาน","บัญชีลูกหนี้/รายรับ","report"),
            "redeex"=>array("รายงาน","บัญชีเจ้าหนี้/รายจ่าย","report"),

            "use"=>array("การตั้งค่า","ผู้ใช้","users"),
            "role"=>array("การตั้งค่า","กลุ่ม","users"),
            "gra"=>array("การตั้งค่า","สิทธิ","users"),
            "eve"=>array("การตั้งค่า","ประวัติการเข้าใช้ระบบ","users"),
            "sys"=>array("การตั้งค่า","ผู้ดูและระบบ","system")
            )
);

include("core/start.php");


if(isset(_MENU[$_ROUTE][2])){
    echo breadcrumb(_MENU[$_ROUTE][1],_MENU[$_ROUTE][0],_MENU[$_ROUTE][1]);
    if(_MENU[$_ROUTE][2]=="report"){             
        $_CONFIG['script']['chart'] = true;
        $_CONFIG['script']['report'] = true; 
    }

    if($_SUBP){
        include("pages/"._MENU[$_ROUTE][3].".php");
    }else{
        include("pages/"._MENU[$_ROUTE][2].".php");
    }
}else{
    if(isset($_SESSION['aut']) && $_SESSION['aut']==true){

        $_CONFIG['script']['chart'] = true;
        $_CONFIG['script']['report'] = true;
        include("pages/dashboard.php"); 
    }else{     
        $_CONFIG['script']['login'] = true;      
        include("pages/login.php");    
    }
}


    include("core/end.php"); 
?>