<?php
if (isset($_POST['vehicle_id'])) {
	$id = $_POST['vehicle_id'];

	require_once ('dbhelp.php');
	$sql = 'delete from cars where id = '.$id;
	echo $sql;
	execute($sql);

	echo 'Xoá Xe thành công';
}