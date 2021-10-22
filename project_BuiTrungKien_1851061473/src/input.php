<?php
require_once ('dbhelp.php');


if (!empty($_POST)) {
	$s_vehicle_id = $s_license_no = $s_model = $s_year= $s_ctype = $s_drate = $s_wrate= $s_status ='';

	if (isset($_POST['vehicle_id'])) {
		$s_vehicle_id = $_POST['vehicle_id'];
	}

	if (isset($_POST['license_no'])) {
        $s_license_no  = $_POST['license_no'];
	}

	if (isset($_POST['model'])) {
        $s_model = $_POST['model'];
	}

	if (isset($_POST['year'])) {
		$s_year = $_POST['year'];
	}
    if (isset($_POST['ctype'])) {
		$s_ctype = $_POST['ctype'];
	}
    if (isset($_POST['drate'])) {
		$s_drate = $_POST['drate'];
	}
    if (isset($_POST['wrate'])) {
		$s_wrate = $_POST['wrate'];
	}
    if (isset($_POST['status'])) {
		$s_status = $_POST['status'];
	}
    require_once('dbhelp.php');
		//insert
		$sql = "insert into cars (vehicle_id, license_no, model, year, ctype, drate, wrate, status) value ('$s_vehicle_id', '$s_license_no', '$s_model', '$s_year', '$s_ctype', '$s_drate', '$s_wrate', '$s_status')";
	
	
	execute($sql);

	header('Location: index.php');
	die();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
		<div class="panel-heading">
				<h2 class="text-center">Thêm Xe </h2>
			</div>
			<div class="panel-body">
				<form method="post">
                <div class="form-group">
					  <label for="birthday">Mã phương tiện:</label>
					  <input type="number" class="form-control" id="vehicle_id" name="vehicle_id" >
				</div>
                <div class="form-group">
				  <label for="usr">Biển số xe:</label>
				  <input required="true" type="text" class="form-control" id="license_no" name="license_no" >
				</div>
                <div class="form-group">
					  <label for="birthday">Model:</label>
					  <input type="text" class="form-control" id="model" name="model" >
				</div>
                <div class="form-group">
				  <label for="birthday">Năm sản xuất:</label>
				  <input type="date" class="form-control" id="year" name=" year" >
				</div>
                <div class="form-group">
				  <label for="address">Kiểu oto:</label>
				  <input type="text" class="form-control" id="type" name="type" >
				</div>
				
                <div class="form-group">
				  <label for="address">Giá cho thuê theo ngày:</label>
				  <input type="text" class="form-control" id="drate" name="  drate" >
				</div>
                 <div class="form-group">
				  <label for="address">Giá cho thuê theo tuần:</label>
				  <input type="text" class="form-control" id="wrate" name="wrate" >
				</div>
                <div class="form-group">
				  <label for="address">Trạng thái:</label>
				  <input type="text" class="form-control" id="status" name="status" >
				</div>
				
               
				
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>