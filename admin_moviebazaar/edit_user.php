<?php
include 'db_connect.php';
$qry = $conn1->query("SELECT * FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_user.php';
?>