<?php
require_once ('config.php');

function querySql($sql) {
// Them du lieu vao database
	//B1. Mo ket noi toi database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
			mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien truy van insert
		mysqli_query($conn, $sql);

	//B3. Dong ket noi database
		mysqli_close($conn);
}
?>