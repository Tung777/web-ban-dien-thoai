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
                                            <a href=""><i class="fa fa-unlock"></i> Login</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-user"></i> My Account <i class="fa fa-caret-down"></i></a>
                                            <ul id="header-submenu">
                                                <li><a href="">Contact</a></li>
                                                <li><a href="">Cart</a></li>
                                                <li><a href="">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-share-square-o"></i> Checkout</a>
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
                                            <option> Oppo </option>
                                            <option> Sam Sung </option>
                                            <option> Iphone </option>
                                            <option> Xiaomi </option>
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
                                <a href="">Shop</a>
                            </li>
                            <li>
                                <a href="">Mobile</a>
                            </li>
                            <li>
                                <a href="">Contact</a>
                            </li>
                            <li>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <a href="">About us</a>
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
                                    <a href="">Iphone  <span class="badge pull-right">8</span></a>
                                    <ul>
                                        <li><a href=""> Iphone11 Pro Max 512GB</a></li>
                                        <li><a href=""> Iphone 11 Pro Max 256GB</a></li>
                                        <li><a href=""> Iphone 11 Prp Max 256GB</a></li>
                                        <li><a href=""> Iphone 11 Pro Max 64GB</a></li>
                                        <li><a href=""> Iphone Xs Max 256GB</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Samsumg  <span class="badge pull-right">8</span></a>
                                    <ul>
                                        <li><a href="">Samsung Galaxy Fold</a></li>
                                        <li><a href="">Samsung Galaxy S20 Ultra </a></li>
                                        <li><a href="">Samsung Galaxy S10 +(512GB)</a></li>
                                        <li><a href="">Samsung Galaxy Note 10+</a></li>
                                    </ul>
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
                        <section id="slide" class="text-center" >
                            <img src="image1/home-intro-banner.png" class="img-thumbnail">
                        </section>

                        <section class="box-main1">
                            <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)">Maxshop</a> </h3>
                            
                            <div class="showitem">
                                <div class="col-md-3 item-product bor">
                                    <a href="">
                                        <img src="image1/anh1.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">Iphone</a>
                                        <p><strike class="sale">3000000</strike> <b class="price">2999999</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                    <a href="">
                                        <img src="image1/anh2.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">Samsumg</a>
                                        <p><strike class="sale">30000000</strike> <b class="price">26000000</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                     <a href="">
                                        <img src="image1/anh3.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">Vi vo</a>
                                        <p><strike class="sale">9.000.000</strike> <b class="price">6.000.000 đ</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                     <a href="">
                                        <img src="image1/anh4.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">oppo</a>
                                        <p><strike class="sale">14000000</strike> <b class="price">120000000 đ</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>

                                 <div class="col-md-3 item-product bor">
                                    <a href="">
                                        <img src="image1/anh5.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">Xiaomi</a>
                                        <p><strike class="sale">14000000 đ</strike> <b class="price">10000000 đ</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                    <a href="">
                                        <img src="image1/anh6.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">realme</a>
                                        <p><strike class="sale">72000000 đ</strike> <b class="price">4000000 đ</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                     <a href="">
                                        <img src="image1/anh7.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">vsMart</a>
                                        <p><strike class="sale">4500000 đ</strike> <b class="price">3000000 đ</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-md-3  item-product bor">
                                     <a href="">
                                        <img src="image1/anh8.jpg" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">Nokia</a>
                                        <p><strike class="sale">4700000 đ</strike> <b class="price">3500000 đ</b></p>
                                    </div>
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
                                        
                                        <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i> Ngách 56/34 số nhà 22 phường đức thắng </p>
                                        <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i> 012345678</p>
                                        <p><i class="sp-ic fa fa-envelope" style="font-size: 13px;padding-right: 5px;"></i> support@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="ft-bottom">
                    <p class="text-center">Copyright © 2017 . Design by  ... !!! </p>
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