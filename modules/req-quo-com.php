<div class="container-fluid">
<?php 
    $wizard = array(
        array("เพิ่มข้อมูล<br>ลูกค้าขอใบเสนอราคา",true,"ขั้นตอนที่ 1"),
        array("เพิ่มรายการสินค้า<br>เพื่อเสนอราคา",true,"ขั้นตอนที่ 2"),
        array("ติดตาม<br>รายการสถานะการขอราคา",true,"ขั้นตอนที่ 3"),
        array("เปรียบเทียบราคา<br>เลือกซัพพลายเออร์",true,"ขั้นตอนที่ 4"),
        array("กำหนดราคาขาย<br>ประเมินกำไร",false,"ขั้นตอนที่ 5"),
        array("ยืนยัน<br>ส่งใบเสนอราคา",false,"ขั้นตอนที่ 6")
    );
    ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
?>    

<?php
$reqid = _PARAM[1];
$comm = "compare";
//include_once(_PATH.'/models/'.$comm.'.php');
include_once(_PATH.'/controllers/'.$comm.'.php');
?>

</div>