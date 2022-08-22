<div class="container-fluid">
    <?php 
        $wizard = array(
            array("วางบิล/รับเซ็ค",true,"13"),
            array("บัญชีลูกหนี้",true,"14"),
            array("บันทึกการติดตาม",true,"15"),
            array("ออกบิล/ใบเสร็จรับเงิน",true,"16")
            );
            
            ECHO content(wizard($wizard,"ผังกระบวนการบัญชี"));
        ?>

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Loading state</h3>
        </div>
        <div class="card-body">
            The body of the card
        </div>
    </div>


    <div class="card card-success" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
        <div class="card-header">
            <h3 class="card-title">All together</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html"
                    data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            The body of the card
        </div>
    </div>

</div>