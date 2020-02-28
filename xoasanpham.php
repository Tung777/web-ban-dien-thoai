<?php 
	require_once ("connect.php");
	$idsp = $_GET['ID'];
	if (isset($iddm)) {
		$sql = "delete from sanpham where Madm = ($idsp)" ;
		$del = mysqli_query ($conn, $sql);
		if($del) {
			header("location:sanpham.php");}
		else {
			echo "done!";
			}
	}
?>