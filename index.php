<?php
require_once('dbhelp.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Management </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
</head>
<body>
	<div class="container ">
		<div class="panel panel-primary ">
			<div class=panel-heading >
				Danh Bạ Điện tử 

			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ và tên</th>
							<th>tuổi</th>
							<th>địa chỉ</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sql='select * from student ';
						$studentList = executeResult ($sql);
						foreach ($studentList as $std) {
							echo'<tr>
								<td>'.$std['id'].'</td>
								<td>'.$std['fullname'].'</td>
								<td>'.$std['age'].'</td>
								<td>'.$std['address'].'</td>
								<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'> sửa </button></td>
								<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
						</tr>';
						}
						?>
									
					</tbody>

				</table>
				<button class="btn btn-success " onclick="window.open('input.php','_self')" >thêm  sinh viên</button> 
				<button class="btn btn-warning "  onclick="window.open('dangki.php','_self')" >dang ki </button> 
				<button class="btn btn-warning "  onclick="window.open('wellcome.php','_self')" >dang ki </button> 
			</div>

		</div>
	</div>
	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Bạn có muốn xoá sinh viên này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete_student.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
