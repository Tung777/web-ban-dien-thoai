<?php
ob_start();
session_start();
require_once("connect.php");
$ID = $_REQUEST["ID"];
$query = mysqli_query($conn,"select * from sanpham where Masp = $ID");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Sửa sản phẩm </title>
</head>

<body bgcolor="#FFFFFF">
<form method="post" enctype="multipart/form-data" >
<table border="1" bordercolor="#FFFFFF" align="center">
  <tr>
     <td>Tên sản phẩm</td>
     <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
     <td>Giá sản phẩm</td>
     <td><input type="text" name="giasanpham"></td>
  </tr>
  <tr>
      <td>Tên danh mục</td>
    <td><select name ="tendm">
      <?php
                        $q=mysqli_query($conn,'SELECT * from danhmucsanpham');
                        while($num=mysqli_fetch_array($q))
                        {
                            ?>
                            <option value="<?php {echo $num['Tendm'];}?>"><?php {echo $num['Tendm'];}?></option>
                        <?php
                        }
                    ?>
                  </select>
    </td>
  </tr>
  <tr>
     <td>Bảo hành</td>
     <td><input type="text" name="baohanh">
     </td>
  </tr>
  <tr>
     <td>Phụ kiện</td>
     <td><input type="text" name="phukien"></td>
  </tr>
  <tr>
     <td>Tình trạng</td>
     <td><input type="text" name="tinhtrang"></td>
  </tr>
  <tr>
     <td>Khuyến mãi</td>
     <td><input type="text" name="khuyenmai"></td>
  </tr>
  <tr>
     <td>Trạng thái</td>
     <td><input type="text" name="trangthai"></td>
  </tr>
  <tr>
     <td>Chi tiết sp</td>
     <td><input type="text" name="chitiet"></td>
  </tr>
  <tr>
     <td>Đặc biệt</td>
     <td><input type="text" name="dacbiet"></td>
  </tr>
  <tr>
  <td colspan="2" align="center"><input type="submit" name="ok" value="Nhập"></td>
  </tr>
  </table>
</form>

<?php
include('connect.php');

   if(isset($_POST['ok']))
   {
       
        $tensanpham=$_POST['tensanpham'] ;
        $giasanpham=$_POST['giasanpham'];
        $tendm=$_POST['tendm'];
        $baohanh=$_POST['baohanh'];
        $phukien=$_POST['phukien'];
        $tinhtrang=$_POST['tinhtrang'];
        $khuyenmai=$_POST['khuyenmai'];
        $trangthai=$_POST['trangthai'];
        $chitietsp=$_POST['chitiet'];
        $dacbiet = $_POST['dacbiet'];
        

            //Thuc thi lenh luu tru
       $sql = "UPDATE sanpham SET ten_sp = '$tensanpham', gia_sp = '$giasanpham',Tendm = '$tendm',bao_hanh = '$baohanh', phu_kien='$phukien',tinh_trang ='$tinhtrang',khuyen_mai='$khuyenmai',trang_thai= '$trangthai',chi_tiet_sp= '$chitietsp',dac_biet= '$dacbiet' WHERE Masp = $ID"; 

      $q=mysqli_query($conn,$sql);            
     if($q)
          
        header('Location:quanlysanpham.php');
     else
        echo "<script> alert('Khong thanh cong')</script>";


}
?>
</body>
</html>