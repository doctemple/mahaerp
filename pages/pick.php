<div class="container-fluid">
 <?php 
        $wizard = array(
            array("รับสินค้า",true,"9"),
            array("จัดเก็บสินค้าเข้าคลัง",true,"10"),
            array("เบิกสินค้า",true,"11"),
            array("การจัดส่งสินค้า",false,"12")
            );
            
            ECHO content(wizard($wizard,"ผังกระบวนการคลังสินค้า"));
        ?>
</div>   