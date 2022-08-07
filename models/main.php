<?php
function get_user($id) {
	$result = pg_query(_CON, "SELECT * FROM user_tbl where fld_userid=".$id);
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$user = pg_fetch_array($result);
	
	return $user;
}
?>