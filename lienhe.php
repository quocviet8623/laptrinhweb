<?php 
	session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>SHOP OGGY</title>
</head>

<body>
	<style>
		#product-search {
			margin: 0 40px;
			padding-bottom: 20px;
			float: left;
		}

		.container {
			width: 100%;
			text-align: center;
			margin-right: auto;
			margin-left: auto;
		}

		#form {
			width: 100%;
			text-align: center;
			padding-left: 350px;
			margin-right: auto;
			margin-left: auto;
		}

		.form-control {

			width: 550px;
			height: 50px;
			display: flex;
		}

		.submit {
			width: 90px;
			height: 30px;
		}

		button {
			background-color: rgb(255,186,0);
		}
	</style>
	<header>

		<div class="wrapper">


		</div>
		<div class="menu">
			<div class="top">
				 
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

								if (isset($_SESSION['tendangnhap'])) {
									echo "Xin chào" . $_SESSION['tendangnhap'];
									?>
									<span>|</span>
							<li> <a href='logout.php'>Đăng Xuất</a>
							<?php
								} else {
									?>
							<li> <a href='dangnhap.php'>Đăng Nhập</a> </li>
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
	</header>

	<div class="container">
		<div class="heading" style="padding-top:10px;padding-right:30px">


		</div>

		<h3 style="padding-top:10px;padding-right:240px">Vui lòng gửi cho chúng tôi suy nghĩ của bạn.</h3>
		<tr>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6" style="padding-top:10px; width:420px">
					<form id="form" action="sendemail.php" method="POST">
						<label for="name"></label>

						<input type="text" id="name" name="name" class="form-control" placeholder="Tên của bạn"></td>
						<br>
						<br>
						<label for="email"></label>
						<input type="email" name="email" class="form-control" placeholder="Email">
						<br>
						<br>
						<label for="subject"></label>
						<input type="subject" name="subject" class="form-control" placeholder="Tiêu Đề">
						<br>
						<br>
						<label for="message"></label>
						<textarea id="message" name="message" class="form-control" placeholder="Nội Dung"
							required></textarea>
						<br>
						<br>


						<button type="submit" class="submit" style="margin-left:230px">Gửi</button>
					</form>
				</div>
			</div>
	</div>

</html>