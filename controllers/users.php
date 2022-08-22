<?php

$dataset['id'] = "fld_userid";

//show comm list
if ( !isset($_GET['edit']) && !isset($_GET['del'])&& !isset($_GET['add']) ){
	$countPerPage = 10;
	$totalResultCount  = count_comm();

	// The ceil function will round floats up.
	$numberOfPages = ceil($totalResultCount / $countPerPage);

	// Check if we have a page number in the _GET parameters
	if(!empty($_GET) && isset($_GET['page'])){
	    $page = (int)$_GET['page'];
	}else{
	    $page = 1;
	}

	// Check that the page is within our bounds
	if($page < 0){
	    $page = 1;
	}elseif($page > $numberOfPages){
	    $page = $numberOfPages;
	}

	${$comm} = get_comm_paging($page,$countPerPage);

	include('views/'.$comm.'/list.php');
} 
//deleted action
elseif (isset($_GET['del'])){
	$where = array($dataset['id'] => $_GET['del']);
	del_comm($where);	
	print("<script>location = '?use'; </script>");
}

//edit action
elseif (isset($_GET['edit']) && is_numeric($_GET['edit'])){
	//if form is submitted.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$where_condition = array($dataset['id'] => $_GET['edit']);		
    		$msg = "";
		$class_stat = 'class="alert alert-info"';
		if(trim($_POST['fld_password']) != trim($_POST['confirm_password'])){
			$msg = "Your password does not match your confirmed password.";
			$class_stat = 'class="alert alert-warning"';
		}else{
			$_POST['fld_password'] = md5($_POST['fld_password']);
			unset($_POST['confirm_password']);
			$data = $_POST;		
			$is_updated = update_comm($data,$where_condition);
			if($is_updated){
				$msg = "Data is updated.";
				$class_stat = 'class="alert alert-info"';
			}else{
				$msg = "Error input.";
				$class_stat = 'class="alert alert-warning"';
			}
		}
		
	}
	// get user record informaation.
	$user = get_comm($_GET['edit']);
	include('views/'.$comm.'/edit.php');
	
}

// Validation
elseif(isset($_GET['add'])){
	//if form is submitted.
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
    		$msg = "";
		$class_stat = 'class="alert alert-info"';
		if(trim($_POST['fld_password']) != trim($_POST['confirm_password'])){
			$msg = "Your password does not match your confirmed password.";
			$class_stat = 'class="alert alert-warning"';
		}else{
			$_POST['fld_password'] = md5($_POST['fld_password']);
			unset($_POST['confirm_password']);
			
			$data[] = $_POST;
			//print_r($data);exit;		
			$is_inserted = insert_comm($data);
			if($is_inserted){
				$msg = "Data is inserted.";
				$class_stat = 'class="alert alert-info"';
			}else{
				$msg = "Error input.";
				$class_stat = 'class="alert alert-warning"';
			}
		}
		
	    //redirect to comm list
		//header("Location: index.php?c=".$comm); 
		//exit();
		
	}

	include('views/'.$comm.'/add.php');

}

?>
