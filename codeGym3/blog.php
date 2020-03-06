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
 $user = $_SESSION['email'];
 
 
 
   echo "Xin chao nguoi dung : " . $user ; 
   
   $sqlimage = "SELECT * FROM nhanvien WHERE email='$user'";
   $imgresult=mysqli_query($conn,$sqlimage);
   
   While($rows=mysqli_fetch_array($imgresult))
   {
?>
     <img src="img/<?php echo $rows['Avatar'];?>" width="200px" height="200px"/>;
    
<?php  
   }
?>
</body>
</html>