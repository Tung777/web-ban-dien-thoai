<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Thêm danh mục</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body bgcolor="#FFFFFF">
  <div class="container">
    <h1>Thêm danh mục</h1>
  <p><a href="index.php">Trang chủ</a></p>
  <a href="danhmucsanpham.php">Danh mục sản phẩm</a>
<form method="post" enctype="multipart/form-data" >
<table class="table table-hover">
  <tr>
     <td>Tên danh mục</td>
     <td><input type="text" name="tendm"></td>
  </tr>
  <tr>
  <td colspan="2" align="center"><input type="submit" name="ok" value="Nhập" style="background-color: #ADFF2F"></td>
  </tr>
  </table>
</form>
</div>
<?php
 include('connect.php');
   if(isset($_POST['ok']))
   { 
        $name=$_POST['tendm']; 
    
              
            $sql="INSERT into danhmucsanpham(Tendm) 
            values ('$name')";
        
                                        //Thuc thi cau lenh connect voi sql
                                            $q=mysqli_query($conn, $sql) ;
                                                if($q) {echo "<script> alert('Thanh cong!!')</script>";}
                                                else   echo "<script> alert('Khong thanh cong!!')</script>"; 
                                      
                                   
                           
                    
   
        
   }
?>
</body>
</html>