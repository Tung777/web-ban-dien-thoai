<?php 
	require_once ("connect.php");
	$idProduct = $_GET['ID'];
	if (isset($idProduct)) {
		$sql = "delete from sanpham where Masp = ($idProduct)" ;
		$del = mysqli_query ($conn, $sql);
		if($del) {
			header("location:quanlysanpham.php");}
		else {
			echo "done!";
			}
	}
?>