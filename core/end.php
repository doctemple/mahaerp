<?php
if(isset($_SESSION['aut'])){ 
include("components/page-end.php");
include("components/panel-right.php");
include("components/panel-bottom.php");
}
?>
</div>
<?php
foreach($_CONFIG['tags'] as $key => $val){
    if($_CONFIG['script'][$key]==true){
        echo $val."\n";
    }
}
?>
</body>
</html>
