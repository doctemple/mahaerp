<div class="container-fluid">
 <?php 
        $wizard = array(
            array("วางบิล/รับเซ็ค",true,"13"),
            array("บัญชีลูกหนี้",true,"14"),
            array("บันทึกการติดตาม",true,"15"),
            array("ออกบิล/ใบเสร็จรับเงิน",false,"16")
            );
            
            ECHO content(wizard($wizard,"ผังกระบวนการบัญชี"));
        ?>
</div>   