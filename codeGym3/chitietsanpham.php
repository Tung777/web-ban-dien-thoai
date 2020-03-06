<?php
require_once("connect.php");
		$sqlSelectCat = "SELECT * FROM sanpham where Masp = ".$_GET["id"];
		$thucthi=mysqli_query($conn,$sqlSelectCat);
    	while($num=mysqli_fetch_assoc($thucthi))
    {
    
        

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>Register</title>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/chitiet.css">
     

        

</head>
<body>
	<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img src="img/<?php echo $num['anh_sp'];?>" alt="anhsp">
      </div> 
      <div class="tab-pane" id="pic-2"><img src="" alt="">
      </div> 
      <div class="tab-pane" id="pic-3"><img src="" alt="">
      </div> 
      <div class="tab-pane" id="pic-4"><img src="" alt="">
      </div> 
      <div class="tab-pane" id="pic-5"><img src="" alt="">
      </div> 
     </div> 
     
    </div> 
    <div class="details col-md-6"> 
     <h3 class="product-title">MaxShop</h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
      </div> <span class="review-no">123 đánh giá</span> 
     </div> 
     <p class="product-description"><?php echo $num['chi_tiet_sp'];?></p> 
     <h4 class="price"><strong>Giá:</strong><?php echo $num['gia_sp'];?></h4> 
     <p class="vote"><strong>Phụ kiện:</strong> <?php echo $num['phu_kien'];?> 
     </p> 
     <p class="vote"><strong>Trạng thái:</strong><?php echo $num['trang_thai'];?></p>
     <p class="vote"><strong>Đặc biệt:</strong><?php echo $num['dac_biet'];?></p>
     <p class="vote">Bảo hành:<?php echo $num['bao_hanh'];?></p>
     <p class="vote">Hiện tại:<?php echo $num['tinh_trang'];?></p>



     <div class="action"> <a href="http://hocwebgiare.com/" target="_blank">            <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>            </a> <a href="http://hocwebgiare.com/" target="_blank">            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>            </a> 
     </div> 
       <?php }?>
    </div> 
   </div> 
  </div> 
 </div>
</div> 
</body>
