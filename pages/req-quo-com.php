<div class="container-fluid">
    <?php 
    
        $wizard = array(
            array("ปรับปรุงราคาสินค้า",true,"5"),
            array("เปรียบเทียบราคา",true,"6"),
            array("กำหนดราคาเสนอขาย",false,"7"),
            array("ส่งใบเสนอราคา",false,"8")
            );
            
            ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));

            $reqid = $_PARAM[1];
        ?>


<?php
$comm = "compare";
//include_once(_PATH.'/models/'.$comm.'.php');
include_once(_PATH.'/controllers/'.$comm.'.php');
?>

</div>