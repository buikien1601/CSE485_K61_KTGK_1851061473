<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý cho Thuê Xe</title>
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
				Quản lý cho thuê xe
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Mã phương tiện</th>
						<th>Biển số xe</th>
						<th>Model</th>
						<th>Năm sản xuất</th>
                        <th>Kiểu oto</th>
                        <th>Giá cho 
                    thuê theo ngày</th>
                        <th>Giá cho thuê theo tuần</th>
                        <th>Trạng thái
                        </th>
						<th width="60px">Sửa</th>
						<th width="60px">Xóa</th>
                        <th width="60px">Xem chi tiết</th>
						</tr>
					</thead>
					<tbody>
<?php
 
	$sql = 'select * from cars';


$peopleList= executeResult($sql);

// $index = 1;
foreach ($peopleList as $std) {
	echo '<tr>
	<td>'.$std['vehicle_id'].'</td>
	<td>'.$std['license_no'].'</td>
	<td>'.$std['model'].'</td>
	<td>'.$std['year'].'</td>
	<td>'.$std['ctype'].'</td>
	<td>'.$std['drate'].'</td>
	<td>'.$std['wrate'].'</td>
	<td>'.$std['status'].'</td>
	
			<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['vehicle_id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="delete('.$std['id'].')">Delete</button></td>
            <td><button class="btn btn-warning" onclick=\'window.open("details.php?id='.$std['vehicle_id'].'","_self")\'>Details</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('input.php', '_self')">Thêm Xe</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function delete(id) {
			confirm('Bạn có muốn xoá xe này không')
            option = confirm('Bạn có muốn xoá xe này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete.php', {
				'vehicle_id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</body>
</html>