<?php
if(isset($_SESSION['aut'])){ 
include(_PATH.'/components/page-end.php');
include(_PATH.'/components/panel-right.php');
include(_PATH.'/components/panel-bottom.php');
}
?>
</div>
<?php
foreach($_CONFIG['tags'] as $key => $val){
    if($_CONFIG['script'][$key]==true){
        echo $val."\n";
    }
}

ECHO HTML5_CLOSE();
?>
