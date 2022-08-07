<?php 
        $wizard = array(
        array("ปรับปรุงราคาสินค้า",true,"5"),
        array("เปรียบเทียบราคา",false,"6"),
        array("กำหนดราคาเสนอขาย",false,"7"),
        array("ส่งใบเสนอราคา",false,"8")
        );
        
        ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
        ?>
 