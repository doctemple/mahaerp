<?php

//show comm list
if ( !isset($_GET['mode'])){
		include('views/'.$comm.'/one.php');
} 
//deleted action
elseif (isset($_GET['mode']) && is_numeric($_GET['mode'])){

	if($_GET['mode']==1){
	include('views/'.$comm.'/one.php');
	}

	if($_GET['mode']==2){
		include('views/'.$comm.'/multi.php');
		}
}

?>
