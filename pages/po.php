<div class="container-fluid">
 <?php 
        $wizard = array(
                array("เปิดบิลขาย",true,"9"),
                array("สร้างใบสั่งซื้อ",true,"10"),
                array("รายการใบสั่งซื้อ",false,"11"),
                array("แผนการรับสินค้า",false,"12")
                );
                
                ECHO content(wizard($wizard,"ผังกระบวนการสั่งซื้อ"));
        ?>
</div>   