<?php
function breadcrumb($title="TITLE",$p1="",$p2="",$p3=""){
$text = '<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">'.$title.'</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i> </a></li>';

				if($p1!=""){
				$text .= '<li class="breadcrumb-item active">'.$p1.'</li>';
				}
				if($p2!=""){
				$text .= '<li class="breadcrumb-item active">'.$p2.'</li>';
				}
				if($p3!=""){
					$text .= '<li class="breadcrumb-item active">'.$p3.'</li>';
					}

$text .= '</ol>
            </div>
        </div>
    </div>
</div>';

return $text;
}

?>

<?php
/*    $wizard = array(
    array("ลูกค้าขอใบเสนอราคา",true),
    array("สร้างใบขอราคา",false),
    array("รายการสถานะการขอราคา",false),
    array("ขอราคาซัพพลายเออร์",false)
    );
    */

function wizard($wizard,$title=""){
?> 
<div id="wizard">   
<div class="card">
<div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOneWizard">
                <i class="fas fa-angle-double-right"></i> ผังค์กระบวนการ <?php echo $title; ?>
                </a>
            </div>
            <div id="collapseOneWizard" class="collapse" data-parent="#wizard">
        <div class="card-body">
            <div class="row bs-wizard" style="border-bottom:0;">

            <?php for($i=0;$i<sizeof($wizard);$i++){ 
                $active = ($wizard[$i][1]==true)?'complete':'disabled';
                ?>
                <div class="col bs-wizard-step <?php echo $active; ?>">
                    <div class="text-center bs-wizard-stepnum"><?php echo $i+1; ?></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><?php echo $wizard[$i][0]; ?></div>
                </div>
            <?php } ?>
            </div>

        </div>
    </div>
            </div>
<?php } ?>