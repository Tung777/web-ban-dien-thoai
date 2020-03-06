<!DOCTYPE html>
<html>
    <head>
        <title>MaxShop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
        <script  src="js/jquery-3.2.1.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div id="wrapper">
            <!---->
            <!--HEADER-->
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-6" id="header-text">
                                <a>MaxShop</a><b>Thế giới của những chiếc điện thoại</b>
                            </div>
                            <div class="col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <li>
                                            <a href="dangnhap.php"><i class="fa fa-unlock"></i> Login</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-user"></i> My Account <i class="fa fa-caret-down"></i></a>
                                            <ul id="header-submenu">
                                                <li><a href="dangky.php">Contact</a></li>
                                                <li><a href="">Cart</a></li>
                                                <li><a href="index.php">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index.php"><i class="fa fa-share-square-o"></i> Checkout</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="header-main">
                        <div class="col-md-5">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label>
                                        <select name="category" class="form-control">
                                            <option> All Category</option>
                                            <?php
                                            require_once('connect.php');
                        $q=mysqli_query($conn,'SELECT * from danhmucsanpham');
                        while($num=mysqli_fetch_array($q))
                        {
                            ?>
                            <option value="<?php {echo $num['Tendm'];}?>"><?php {echo $num['Tendm'];}?></option>
                        <?php
                        }
                    ?>
                                        </select>
                                    </label>
                                    <input type="text" name="keywork" placeholder=" input keywork" class="form-control">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="images/logo-default.png">
                            </a>
                        </div>
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0986420994</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->


            <!--MENUNAV-->
            <div id="menunav">
                <div class="container">
                    <nav>
                        <div class="home pull-left">
                            <a href="">Trang chủ</a>
                        </div>
                        <!--menu main-->
                        <ul id="menu-main">
                            <li>
                                <a href="Shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="index.php">Mobile</a>
                            </li>
                            <li>
                                <a href="dangky.php">Contact</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="maycu.php">Máy cũ giá rẻ</a>
                            </li>
                            <li>
                                <a href="gioithieu.php">About us</a>
                            </li>

                        </ul>
                        <!-- end menu main-->

                        <!--Shopping-->
                        <ul class="pull-right" id="main-shopping">
                            <li>
                                <a href=""><i class="fa fa-shopping-basket"></i>Giỏ Hàng</a>
                            </li>
                        </ul>
                        <!--end Shopping-->
                    </nav>
                </div>
            </div>
            <!--ENDMENUNAV-->
            
            <div id="maincontent">
                <div class="container">
                    <div class="col-md-3  fixside" >
                        <div class="box-left box-menu" >
                            <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                            <ul>
                                <li>
                                    <a href="Iphone.php">Iphone</a>
                                </li>
                                <li>
                                    <a href="samsung.php">Samsumg</a>
                                </li>
                                <li>
                                    <a href="danhmucsanpham.php">Xem toàn bộ danh mục tại đây</span></a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="box-left box-menu">
                            <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm mới </h3>
                           <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                            <ul>
                                
                                <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh10.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh11.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh1.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh2.jpg" class="img-responsive pull-left" width="80" height="80">
                                       <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>
                               
                            </ul>
                            <!-- </marquee> -->
                        </div>

                        <div class="box-left box-menu">
                            <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm nổi bật </h3>
                           <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                            <ul>
                                
                                <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh3.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh4.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh5.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                 <li class="clearfix">
                                    <a href="">
                                        <img src="image1/anh6.jpg" class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name">Iphone 11 pro max 256gb black</p >
                                            <b class="price">Giá: 29.990.000 đ</b><br>
                                            <b class="sale">Giá gốc: 30.000.000</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>
                               
                            </ul>
                            <!-- </marquee> -->
                        </div>
                    </div>
                    <div class="col-md-9 bor">
                        <section class="box-main1">
                            <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)">Maxshop</a> </h3>
                            <?php
 require_once('connect.php');

     
     $sqlimage = "SELECT * FROM sanpham where Tendm='Iphone'";
     $imgresult=mysqli_query($conn,$sqlimage);
     
     While($rows=mysqli_fetch_array($imgresult))
     {
?>
                            <div class="showitem">
                                <div class="col-md-3 item-product bor">
                                    <a href="chitietsanpham.php?id=<?php echo $rows['Masp'] ?>"><img src="img/<?php echo $rows['anh_sp'];?>" width="200px" height="200px"/>;</a>

                                    <div class="info-item">
                                        <a href="chitietsanpham.php?id=<?php echo $rows['Masp'] ?>"><?php echo $rows['ten_sp'];?></a>
                                        <div class="sale"><?php echo $rows['gia_sp'];?></div> 
                                        <div class="price"><?php echo $rows['khuyen_mai'];?></div>
                                    </div>
                                    </div>
                                     <?php }?>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </section>

                    </div>
                </div>

                <div class="container">
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="images/free-shipping.png"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="images/guaranteed.png"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a href=""><img src="images/deal.png"></a>
                    </div>
                </div>
                <div class="container-pluid">
                <section id="footer">
                    <div class="container">
                        <div class="col-md-3" id="shareicon">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8" id="title-block">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                
                            </div>
                        </div>
                       
                    </div>
                </section>
                <section id="footer-button">
                    <div class="container-pluid">
                        <div class="container">
                            <div class="col-md-3" id="ft-about">
                                
                                <p>Khách hàng là người duy nhất quyết định số phận của một hệ thống bán lẻ. Niềm tin mạnh mẽ này là thứ không bao giờ được thay đổi tại Thế Giới Di Động”, ông Tài nói.

                                </p>
                            </div>
                            <div class="col-md-3 box-footer" >
                                <h3 class="tittle-footer">my accout</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Giới thiệu</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Liên hệ </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i>  Contact </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> My Account</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Giới thiệu</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 box-footer">
                                <h3 class="tittle-footer">my accout</h3>
                               <ul>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Giới thiệu</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Liên hệ </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i>  Contact </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> My Account</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href=""><i></i> Giới thiệu</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3" id="footer-support">
                                <h3 class="tittle-footer"> Liên hệ</h3>
                                <ul>
                                    <li>
                                        
                                        <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i> 92a Lê Thanh Nghị </p>
                                        <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i> 035612129</p>
                                        <p><i class="sp-ic fa fa-envelope" style="font-size: 13px;padding-right: 5px;"></i> kaka1239x199@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="ft-bottom">
                    <p class="text-center">Nhóm 7 </p>
                </section>
            </div>
        </div>      
    </div>
            </div>      
        </div>
    <script  src="js/slick.min.js"></script>

    </body>
        
</html>

<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })
</script>