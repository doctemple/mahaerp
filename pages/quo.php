<div class="container-fluid">
    <?php 
        $wizard = array(
                array("ปรับปรุงราคาสินค้า",true,"5"),
                array("เปรียบเทียบราคา",true,"6"),
                array("กำหนดราคาเสนอขาย",true,"7"),
                array("ส่งใบเสนอราคา",false,"8")
                );
                
                ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
        ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                ใบเสนอราคา
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
                กดหกดหกด
        </div>
    </div>
</div>