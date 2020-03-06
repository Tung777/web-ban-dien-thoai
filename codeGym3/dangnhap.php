<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
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
                                                <li><a href="shop.php">Contact</a></li>
                                                <li><a href="">Cart</a></li>
                                                <li><a href="index.php">Checkout</a></li>
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
                                    <a href="samsung.php">Samsumg </a>
                                    
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-5"> 
                            <form method="post" >
                                <fieldset>
                                    <legend style="color:#FF0000; font-family:Arial BlackGadget">Log in </legend>
                                          
                                            <p style="color:#990000; font-family:Comic Sans MScursive">Login Here Using Your Username And Password</p>  
                                        <br>
                                        <table>
                                        <tr>
                                                                             
                                        <div class="form-group">
                                        <td>
                                            <label class="input-item">
                                                <i class="fa fa-user"></i>
                                            </label> </td>   
                                           <td><input style="background: #CCFFFF; height:40px; width:300px " class="form-input" id="txt-input" name="user" size="30px"  type="text" placeholder="@Username" required>
                                           </td>
                                        </div>
                                        
                                        </tr>
                                        <tr>
                                        
                                        <tr>
                                        <div class="form-group">
                                           <td> <label class="input-item">
                                                <i class="fa fa-key"></i>
                                            </label></td>
                                           <td><input style="background:#CCFFFF; height:40px;width:300px" class="form-input" type="password" name="pass" size="30px" placeholder=" Password" id="pwd" name="password" required>              
                                        </td>   
                                        </div>
                                        </tr>            
                                        <tr >
                                        <div class="other">

                                           <td colspan="2" align="center"> <button style="background:#66CCFF" class="btn submits frgt-pass">Forget Password</button>
                                            <input class="btn btn-success" type="submit" name="ok" value="Sign in"></td>
                                        </div>
                                        </tr>
                                    </table>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php


  include('connect.php');
   
  if(isset($_POST['ok']))
  {
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      
      if($user == "" || $pass == "")
      {
          echo "<script> alert('Moi nhap day du tai khoan va mat khau !')</script>";
      }else
           {
             
               $sql= "SELECT email,password FROM khachhang WHERE email='$user' and password='$pass'";
               $query=mysqli_query($conn,$sql);
               $num_row =mysqli_num_rows($query);
               
               if($num_row==0)
                {
                        echo "<script> alert('Ban nhap sai tai khoan hoac mat khau')</script>";
                }
                else
                  {
                      $_SESSION['user']=$user;
                      $_SESSION['pass']=$pass;
                      echo "<script> alert('Thành công')";     
                  } 
               
               }
          
          
      
      }

?>
</div>
</body>
</html>