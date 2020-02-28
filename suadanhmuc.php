<?php
session_start();
ob_start(); // chay header('location: ')
require_once("connect.php");
$ID = $_REQUEST["ID"];
$query = mysqli_query($conn,"select * from danhmucsanpham where Madm = $ID");
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
  <h1>Sửa danh mục</h1>
  <p><a href="index.php">Trang chủ</a></p>
  <a href="danhmucsanpham.php">Danh mục sản phẩm</a>
<form  method="post">
   <table class="table table-hover">
          
          <tr>
               <td class="menu">Tên danh mục</td>
          </tr>
          <tr>      
                <td>
                       <input type="text" name="Tendm">
                  
                </td>
                
               
          <tr>
               <td><input type="submit" name="ok" value="Sửa" style="background-color: #ADFF2F"></td>
          </tr>

   </table>
</form>

</div>

<?php
   
   if(isset($_POST['ok'])){

    $Tendm=$_POST['Tendm'];
    //Update
    $sql = "UPDATE danhmucsanpham SET Tendm = '$Tendm' WHERE Madm = $ID"; 
  
      $q=mysqli_query($conn,$sql);            
     if($q)
          
        header('Location:danhmucsanpham.php');
     else
        echo "<script> alert('Khong thanh cong')</script>";


}
?>

</body>
</html>