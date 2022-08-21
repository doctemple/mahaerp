<?php
define('_TB_','user_tbl');

function count_comm($conn){
	// Get the total number of results
	$result = pg_query($conn, "SELECT count(*) FROM "._TB_." where fld_type<>'admin'"); 
	return (int)pg_fetch_result($result, 0, 0);

}

function get_comm_paging($conn,$page,$count_per_page) {
	$offset = ($page - 1) * $count_per_page;

	$sql = "SELECT * from "._TB_." where fld_type<>'admin' ORDER  BY fld_username LIMIT  $count_per_page offset $offset";
	
	$result = pg_query($conn,$sql);
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}

function get_comms($conn) {
	$result = pg_query($conn, "SELECT * FROM "._TB_." ");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$users = pg_fetch_all($result);
	
	return $users;

}

function get_comm($conn,$id) {
	$result = pg_query($conn, "SELECT * FROM "._TB_." where fld_userid=".$id);
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$user = pg_fetch_array($result);
	
	return $user;

}

function del_comm($conn,$where){
	
	//$where = array("id" => $id);
	$res = pg_delete($conn, _TB_, $where);	
	if ($res) {
	  //echo "Deleted successfully.";
	  $is_deleted = true;
	} else {
	  //echo "Error in input..";
	  $is_deleted = false;
	}	
	return $is_deleted ;
}

function update_comm($conn,$data,$where_condition){
	//$where_condition = array('name'=>'Soeng');
	//$data = array("name" => "Kanel");

	$res = pg_update($conn, _TB_, $data, $where_condition);
	if ($res) {
	  	//echo "Data is updated: $res";
		$is_updated = true;
	} else {
		 //echo "error in input.. <br />";
		 //echo pg_last_error($conn);
		$is_updated = false;
	}
	return $is_updated;
}


function insert_comm($conn, $users){
	/* 
	Test case
	$user1 = array(
		'name' => "Sok", 
		'age' => "24", 
		'country' => "CAMBODIA" 
		);

	$user2 = array(
		'name' => "VONGSA", 
		'age' => 30, 
		'country' => "Thailand" 
		);

	$user3 = array(
		'name' => "DUC", 
		'age' => 28, 
		'country' => "Vietname"
		);

	$users = array(
		$user1,
		$user2,
		$user3
		);

	*/
	// Insert one by one
	foreach ($users as $key => $user) {
	    $res = pg_insert($conn, _TB_, $user);
	    if ($res) {
	      //echo "Inserted user: ".$user['name']." <br />";
	      $is_inserted = true;
		
	    } else {
	      echo pg_last_error($conn) . " <br />";
	      $is_inserted = false;	
	    }
	}
	return $is_inserted;
}
?>
