<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>แผนการรับสินค้า",true,"ขั้นตอนที่ 1"),
    array("ตรวจรับสินค้า<br>ตามใบสั่งซื้อ",true,"ขั้นตอนที่ 2"),
    array("จัดเก็บสินค้า<br>ปรับปรุงคลังสินค้า",true,"ขั้นตอนที่ 3"),
    array("เบิกสินค้า",true,"ขั้นตอนที่ 4"),
    array("ตรวจสินค้า<br>ก่อนจัดส่งสินค้า",false,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะการจัดส่ง",false,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการคลังสินค้า"));
?>
</div>   