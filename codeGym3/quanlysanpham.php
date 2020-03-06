<?php
  include('connect.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý sản phẩm</title>
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
            <td class="menu"><h4>Mã sản phẩm</h4></td>
            <td class="menu"><h4>Tên sản phẩm</h4></td>
            <td class="menu"><h4>Giá sản phẩm</h4></td>
            <td class="menu"><h4>Bảo hành</h4></td>
            <td class="menu"><h4>Phụ kiện</h4></td>
            <td class="menu"><h4>Tình trạng</h4></td>
            <td class="menu"><h4>Khuyến mãi</h4></td>
            <td class="menu"><h4>trạng thái</h4></td>
            <td class="menu"><h4>Chi tiết sản phẩm</h4></td>
            <td class="menu"><h4>đặc biệt</h4></td>
            <td class="menu"><h4>Tên danh mục</h4></td>
            <td class="menu"><h4>Ảnh sản phẩm</h4></td>
        
        </tr>
        <?php 
        $sql="select * from sanpham";
        $thucthi=mysqli_query($conn,$sql);
    while($num=mysqli_fetch_assoc($thucthi))
    {
    
        ?>
        <tr>
            <td><?php echo $num['Masp'];?></td>
            <td><?php echo $num['ten_sp'];?></td>
            <td><?php echo $num['gia_sp'];?></td>
            <td><?php echo $num['bao_hanh'];?></td>
            <td><?php echo $num['phu_kien'];?></td>
            <td><?php echo $num['tinh_trang'];?></td>
            <td><?php echo $num['khuyen_mai'];?></td>
            <td><?php echo $num['trang_thai'];?></td>
            <td><?php echo $num['chi_tiet_sp'];?></td>
            <td><?php echo $num['dac_biet'];?></td>
            <td><?php echo $num['Tendm'];?></td>
            <td><img src="img/<?php echo $num['anh_sp'];?>" width="200px" height="200px"/>;</td>
            
            <td><a href='xoasanpham.php?ID=<?php echo $num['Masp'];?>'>Xóa</a></td>
            <td><a href='suasanpham.php?ID=<?php echo $num['Masp'];?>'>Sửa</a></td>
             <td><a href='themsanpham.php'>Thêm</a></td>
            <td><a href='chitietsanpham.php?ID=<?php echo $num['Masp'];?>'>Xóa</a></td>

            </tr>
            <?php }?>
            </table>
</div>

</body>
</html>
