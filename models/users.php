<?php
define('_TB_','user_tbl');

function count_comm(){
	// Get the total number of results
	$result = pg_query(_CON, "SELECT count(*) FROM "._TB_." where fld_type<>'admin'"); 
	return (int)pg_fetch_result($result, 0, 0);

}

function get_comm_paging($page,$count_per_page) {
	$offset = ($page - 1) * $count_per_page;

	$sql = "SELECT * from "._TB_." where fld_type<>'admin' ORDER  BY fld_username LIMIT  $count_per_page offset $offset";
	
	$result = pg_query(_CON,$sql);
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}

function get_comms() {
	$result = pg_query(_CON, "SELECT * FROM "._TB_." ");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}

function get_comm($id) {
	$result = pg_query(_CON, "SELECT * FROM "._TB_." where fld_userid=".$id);
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$user = pg_fetch_array($result);
	
	return $user;

}

function del_comm($where){
	
	//$where = array("id" => $id);
	$res = pg_delete(_CON,_TB_, $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}

function update_comm($data,$where_condition){
	//$where_condition = array('name'=>'Soeng');
	//$data = array("name" => "Kanel");

	$res = pg_update(_CON, _TB_, $data, $where_condition);
	if ($res) {
	  	//echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 //echo "error in input.. <br />";
		 //echo pg_last_error(_CON);
		$is_updated = false;
	}
	return $is_updated;
}


function insert_comm($users){

	// Insert one by one
	foreach ($users as $key => $user) {
	    $res = pg_insert(_CON, _TB_, $user);
	    if ($res) {
	      //echo "Inserted user: ".$user['name']." <br />";
	      $is_inserted = true;
		
	    } else {
	      echo pg_last_error(_CON) . " <br />";
	      $is_inserted = false;	
	    }
	}
	return $is_inserted;
}
?>
