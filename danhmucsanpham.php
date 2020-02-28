<?php
  include('connect.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý danh mục</title>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh mục sản phẩm</h2>           
  <table  class="table table-hover">
        <tr>
            <td class="menu"><h4>Mã danh mục</h4></td>
            <td class="menu"><h4>Tên danh mục</h4></td>
        
        </tr>
        <?php 
        $sql="select * from danhmucsanpham";
        $thucthi=mysqli_query($conn,$sql);
    while($num=mysqli_fetch_assoc($thucthi))
    {
    
        ?>
        <tr>
            <td><?php echo $num['Madm'];?></td>
            <td><?php echo $num['Tendm'];?></td>
        
            
            <td><a href='xoadanhmuc.php?ID=<?php echo $num['Madm'];?>'>Xóa</a></td>
            <td><a href='suadanhmuc.php?ID=<?php echo $num['Madm'];?>'>Sửa</a></td>
             <td><a href='themdanhmuc.php'>Thêm</a></td>
            </tr>
            <?php }?>
            </table>
</div>

</body>
</html>
