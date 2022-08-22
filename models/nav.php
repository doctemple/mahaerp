<?php
// ดึงกลุ่มหมวดหมู่ ทั้งหมด
function get_groups($conn) {
	$result = pg_query($conn, "SELECT * FROM mainnav_tbl ");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$datas = pg_fetch_all($result);
	
	return $datas;
}

// แปลง Group Code มาเป็น ชื่อ หมวดหมู่ เมนู
function get_subName($conn,$subcode) {
	$result = @pg_query($conn, "SELECT * FROM mainnav_tbl where fld_subcode = '$subcode' limit 1");
	if ($result) {
		$datas = pg_fetch_all($result);
		return trim($datas[0]['fld_subname']);
	}else{
		return " ";
	}
}

// ดึงข้อมูล Page ตาม Page Code
function get_page($conn,$pcode) {
	$result = pg_query($conn, "SELECT * FROM nav_tbl where fld_pcode = '$pcode' limit 1");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$datas = pg_fetch_all($result);
	
	return $datas[0];
}

// แปลง Page Code มาเป็น Group Code
function get_subCode($conn,$pcode) {
	$result = @pg_query($conn, "SELECT * FROM nav_tbl where fld_pcode = '$pcode' limit 1");
	if (!$result) {
		return "";
	}else{
		$datas = pg_fetch_all($result);
		return trim($datas[0]['fld_subcode']);
	}
}

// ดึงรายการเมนู
function get_navs($conn) {
	$result = pg_query($conn, "SELECT * FROM nav_tbl where fld_visit = true order by fld_order");
	if (!$result) {
	    echo "An error occurred.\n";
	    exit;
	}
	$datas = pg_fetch_all($result);
	
	return $datas;
}

?>
