<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="https://apis.google.com/js/platform.js" async defer>
            { lang: 'vi' }
        </script>

        <link rel="shortcut icon" href="image/logo1.jpg" type="image/x-icon">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="plugins/select2/select2.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="fonts/font-slider.css" type="text/css">
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <title>SHOP OGGY</title>
</head>

<body>
    <style>
       #product-search {
    margin: 0px -209px 0px 0px;
    padding-bottom: 26px;
    float: right;
    margin-top: 56px;
}
    </style>
<header>
    <div class="wrapper">


    </div>
    <div class="menu">
        <div class="top">
         <!-- Dieu huong tieu de -->
         <div class="navbar-header">
                    
                    <a class="navbar-brand" href="index.php"><img width="100px" height="100px" src="image/logo1.jpg" class="logo" alt=" lỗi "></a>
                </div>
                <!-- ket thuc dieu huong tieu de -->
            <div class="up">
                <ul>
                    <li>
                        <a href="index.php">

                            Trang chủ
                        </a>
                    </li>

                    <li>
                        <a href="cart.php">

                            Giỏ Hàng
                        </a>
                    </li>
                    <li>
                        <a href="sanpham.php">

                            Sản Phẩm
                        </a>
                    </li>
                    
                    <li>
                        <a href="lienhe.php">

                            Liên Hệ
                        </a>
                    </li>

                    <li>
                            
                               
                          <a href="dangki.php">
                           
                            

                            <?php

                            if(isset($_SESSION['tendangnhap'])){
                            echo"Xin chào"  .$_SESSION['tendangnhap'];
                                ?>
                                <span style="color:white;">|</span>
                                <li> <a href = 'logout.php'>Đăng Xuất</a>
                                <?php 
                            }else{
                            ?>
                                 <li> <a href = 'dangnhap.php'>Đăng Nhập</a> </li>
                            <?php
                            }
                            //  echo $_SESSION['tendangnhap'];
                            ?>
                             </a>
                        </li>

                </ul>

            </div>
            <div class="down">
                <div id="sort-box-1">
                    <form id="product-search" method="GET">
                        <input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] : "" ?>" name="name" />
                        <input type="submit" value="Tìm kiếm" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    </header>

    <div>
        
        <div id="page-content" class="home-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Carousel -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden-xs">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item ">
                                    <img src="image/1.png" alt="First slide" width="1200" height="200">

                                    <!-- Static Header -->
                                    <div class="header-text hidden-xs">
                                        <div class="col-md-12 text-center">
                                        </div>
                                    </div><!-- /header-text -->
                                </div>
                                <div class="item">
                                    <img src="image/2.jpg" alt="Second slide" width="1200" height="200">
                                    <!-- Static Header -->
                                    <div class="header-text hidden-xs">
                                        <div class="col-md-12 text-center">
                                        </div>
                                    </div><!-- /header-text -->
                                </div>
                                <div class="item active ">
                                    <img src="image/3.jpg" alt="Third slide" width="2000" height="600">
                                    <!-- Static Header -->
                                    <div class="header-text hidden-xs">
                                        <div class="col-md-12 text-center">
                                        </div>
                                    </div><!-- /header-text -->
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div><!-- /carousel -->
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Sản Phẩm đang khuyến mãi</h2>
                        </div>

                        <div class="products">
                            <?php
                            require './truyvan.php';
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                                    ?>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="product">
                                            <div class="image"><a href="sanpham.php?id=<?php echo $row["ID"] ?>">
                                            <img src="image/<?php echo $row["HinhAnh"] ?>"style="width:auto;height:250px" /></a></div>
                                            <div class="caption">
                                                <div class="name">
                                                    <h3><a href="product.php?id=<?php echo $row["ID"] ?>"><?php echo $row["Ten"] ?></a></h3>
                                                </div>
                                                <?php
                                                if ($row["KhuyenMai"] == true) {
                                                    ?>
                                                    <div class="price" style="color: red;">
                                                        <?php echo $row["giakhuyenmai"] ?>,000₫<span style="font-size: 14px;">
                                                            <?php echo $row["Gia"] ?>,000₫
                                                        </span>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="g-plusone" data-size="medium" data-annotation="none"
                                                    data-href="/sanpham.php?id=<?php echo $row["ID"] ?>"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>


                    </div>
                    <?php
                include "sanphammoinhat.php"
                    ?>
                </div>
                        </div>
                    
                        <footer class="footer">
		<div class="container"style="width:1300px;margin-top:1300px">
			<div class="row"style="background-color:darkorange">  
				<div class="footer-col" style="padding: 2px 20px;">
				<h4>CHĂM SÓC KHÁCH HÀNG</h4>
				<ul>
				<li >
					<a  href="">Trung Tâm Trợ Giúp</a>
				</li>
				<li>
					<a href="">Hướng Dẫn Mua Hàng</a>
				</li>
				<li>
				   <a href=""> Chính Sách Bảo Mật</a>
				</li>
				<li>
					<a href="">Chính Sách Đổi Trả</a>
				</li>
				</ul>
				</div>
				<div class="footer-col" style="padding: 2px 20px;">
				<h4>GIỚI THIỆU CÔNG TY</h4>
				<ul>
				<li >
					<a  href="">Tuyển Dụng</a>
				</li>
				<li>
					<a href="*">Công Tác Bán Hàng </a>
				</li>
				<li>
				   <a href="*"> Đóng Góp Ý Kiến</a>
				</li>
				<li>
					<a href="*">Thông Tin</a>
				</li>
				</ul>
				</div>
				<div class="footer-col" style="padding: 2px 20px;">
				<h4>TỔNG ĐÀI HỖ TRỢ</h4>
				<ul>
				<li >
					<a  href="*">Gọi Mua:1900 9999</a>
				</li>
				<li>
					<a href="*">Kĩ Thuật:1900 8888 </a>
				</li>
				<li>
				   <a href="*"> Khiếu Nại:1900 7777</a>
				</li>
				<li>
					<a href="*">Bảo Hành:1900 6666</a>
				</li>
				</ul>
				</div>
				<div class="footer-col" style="padding: 2px 20px;">
				<h4>THEO DÕI CHÚNG TÔI</h4>
				<ul>
				<li >
					<a  href="*">Facebook</a>
				</li>
				<li>
					<a href="*">Instagram </a>
				</li>
				<li>
				   <a href="*"> Youtobe</a>
				</li>
				<li>
				   <a href="*"> Zalo</a>
				</li>
			   
				</ul>
				</div>
				  
                  
    <div class="footer-copyright"style="padding-left:400px;padding-top:20px;">
        <p class="footer-company">Tất Cả Các Quyền. © 2023 <a href="#">SHOP OGGY</a> Thiết Kế Bởi:
            <a href="https://www.facebook.com/quocvietdt8623">Nhóm 8</a></p>
    </div>   
    </div>
	</footer>    
</body>

</html>
