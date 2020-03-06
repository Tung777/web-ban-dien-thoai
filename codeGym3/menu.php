<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
</head>

<body>

<?php
session_start();
?>
<?php
 require_once('connect.php');
	 
	 $sqlimage = "SELECT * FROM sanpham";
	 $imgresult=mysqli_query($conn,$sqlimage);
	 
	 While($rows=mysqli_fetch_array($imgresult))
	 {
?>
     <img src="img/<?php echo $rows['anh_sp'];?>"/>;
		
<?php	 
	 }
?>
</body>
</html>