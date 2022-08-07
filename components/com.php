<?php
function HTML5_OPEN(){
    return
    '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>'._SYS['system'].'</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    </head>
    <body class="hold-transition sidebar-mini" >';
}

function HTML5_CLOSE(){
    return
    '</body></html>';
}

function breadcrumb($title="TITLE",$p1="",$p2="",$p3=""){
$text = '<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">'.$title.'</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?"><i class="nav-icon fas fa-home"></i> </a></li>';

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
    <?php } 

function card($title="&nbsp;",$body="TEXT BODY",$foot="&nbsp;"){
    return
        '<div class="card">
            <div class="card-header">'.$title.'</div>
            <div class="card-body">'.$body.'</div>
            <div class="card-footer">'.$foot.'</div>
        </div>';
}

function alert($body="TEXT BODY",$color="info"){
    return
        '<div class="alert alert-'.$color.'">
            '.$body.'
        </div>';
} 

function content($body="TEXT BODY"){
    return 
        '<div class="container-fluid t-20">
            '.$body.'
        </div>';
} 

function overlay($title,$text,$icon="cog",$color="info"){
return
'<div id="overlay" class="" style="position: fixed; z-index:1000; width:100vw; height:100vh;  align-items: center;  background-color: rgba(0,0,0,0.5);">
  <div class="card card-'.$color.'" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%);">
    <div class="card-header">
      '.$title.'
    </div>
    <div class="card-body text-center">
      <i class="fas fa-2x fa-'.$icon.'"></i>
    </div>
    <div class="card-footer">
      '.$text.'
    </div>
  </div>  
</div>';

}

function CheckVersion(){
    echo
    '<div class="ribbon-wrapper ribbon-lg ribbon" style="z-index:5000 !important;">
        <div class="ribbon bg-primary">
        '._SYS['version'].'
        </div>
        </div>
    ';
}

function array2TBCol($array){
    $html = '<table class="table">';
        $html .= '';
        foreach( $array as $key=>$value){
            $html .= '<tr><td><strong>' . ucwords(htmlspecialchars($key)) . '</strong></td><td>' . htmlspecialchars($value) . '</td></tr>';
        }
        $html .= '';

    $html .= '</table>';
    return $html;
}

function array2Table($array,$head=array(),$crud=false){
    $html = '<table class="table">';
        $html .= '';
        if(sizeof($head)>0){
            foreach( $head as $hkey=>$hvalue){  
                $html .= '<th>' . htmlspecialchars($hvalue) . '</th>';
                } 
            }
        foreach( $array as $key=>$value){
            $html .= '<tr><td ><strong>' . strtoupper(htmlspecialchars($key)) . '</strong></td>';
            
            foreach( $value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }

            if($crud==true){
                    $vnum = array_values($array[$key]);
                    $id = $vnum[0];
                $html .= '<td >';
                $html .= '<a class="btn btn-sm btn-warning mr-1" href="?'._ROUTE.'&edit='.$id.'"><i class="fa fa-edit"></i></a>';
                $html .= '<a class="btn btn-sm btn-danger mr-1" href="?'._ROUTE.'&del='.$id.'"><i class="fa fa-trash"></i></a>';
                $html .= '</td>';
            }

            $html .='</tr>';
        }
        $html .= '';

    $html .= '</table>';
    return $html;
}

function array2list( $array ) {
    $html = '<ul>';
    for($i=0;$i<sizeof($array);$i++) {
        $html .= "<li> {$array[$i]} </li>";
    }
    $html .= '</ul>';
    return $html;
}

function array2Badge( $array ) {
    $html = '';
    for($i=0;$i<sizeof($array);$i++) {
        $html .= '<span class="badge badge-info" style="margin:2px;">'.$array[$i].'</span>';
    }
    return $html;
}

function Col($set=array(),$text1="",$text2="",$text3="",$text4="") {
    $html = '<div class="row" >';
        if($text1!=""){ $html .= '<div class="col-sm'; if(isset($set[0])){ $html .= '-'.$set[0]; } $html .='">'.$text1.'</div>'; }
        if($text2!=""){ $html .= '<div class="col-sm'; if(isset($set[1])){ $html .= '-'.$set[1]; } $html .='">'.$text2.'</div>'; }
        if($text3!=""){ $html .= '<div class="col-sm'; if(isset($set[2])){ $html .= '-'.$set[2]; } $html .='">'.$text3.'</div>'; }
        if($text4!=""){ $html .= '<div class="col-sm'; if(isset($set[3])){ $html .= '-'.$set[3]; } $html .='">'.$text4.'</div>'; }
    $html.="</div>";
    return $html;
}

?>