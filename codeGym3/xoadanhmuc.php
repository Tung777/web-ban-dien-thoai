<?php 
	require_once ("connect.php");
	$iddm = $_GET['ID'];
	if (isset($iddm)) {
		$sql = "delete from danhmucsanpham where Madm = ($iddm)" ;
		$del = mysqli_query ($conn, $sql);
		if($del) {
			header("location:danhmucsanpham.php");}
		else {
			echo "done!";
			}
	}
?>