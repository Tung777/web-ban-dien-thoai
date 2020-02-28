<?php
ob_start();
session_start();
include('connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Thêm sản phẩm </title>
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
     <td>Ảnh sp</td>
     <td><input type="file" name="img"></td>
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
        
        $a=$_FILES['img']['tmp_name'];
        $b=$_FILES['img']['name'];

            //Thuc thi lenh luu tru
      $sql="INSERT into sanpham(ten_sp,gia_sp,bao_hanh,phu_kien,tinh_trang,trang_thai,khuyen_mai,chi_tiet_sp,dac_biet,Tendm,anh_sp) 
      values('$tensanpham','$giasanpham','$baohanh','$phukien','$tinhtrang','$khuyenmai','$trangthai','$chitietsp','$dacbiet','$tendm','$b')";
        
             //Upload anh
              $c= move_uploaded_file($a,'img/'.$b);
        
        
            //Thuc thi cau lenh connect voi sql
              $q=mysqli_query($conn, $sql) ;
              if($q) {echo "<script> alert('Thanh cong!!')</script>";}
               else   echo "<script> alert('Khong thanh cong!!')</script>"; 
                                    
                                   
              
   
        
   }
?>
</body>
</html>