<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng kí</title>
    <link rel="stylesheet" href="styleregister.css" />
  </head>
<?php
// Kết nối cơ sở dữ liệu mysql.
	$conn = new mysqli('localhost','root', '','mysql_web');
//kiểm tra kết nối
  if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
    }

// sử lý dữ kiện người dùng khi bấm nút đăng ký
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendangnhap = mysqli_real_escape_string($conn, $_POST["tendangnhap"]);
    $matkhau = mysqli_real_escape_string($conn, $_POST["matkhau"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $sodienthoai = mysqli_real_escape_string($conn, $_POST["sodienthoai"]);

		

		
		// Tạo câu lệnh để thêm tài khoản mới vào database.
		$sql = "INSERT INTO `tbl_dangky`(`tendangnhap`, `matkhau`,`email`,  `sodienthoai`) VALUES ('".$tendangnhap."', '".$matkhau."', '".$email."', '".$sodienthoai."')" ;
		
      
		if (mysqli_query($conn,$sql)) {
			echo "Đăng ký thành công";
		} else {
			echo "Lỗi: " . $sql . "<br>" .mysqli_error($conn);
    }

		
}
	// Đóng kết nối
  mysqli_close($conn);
		
?>
	<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang Đăng Ký</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="matkhau"],
    input[type="sodienthoai"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }
	
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    
    }
    .login1 input {
			width: 497px;
            
    }
    .btn.google{
      width: 500px;
        margin: auto;
    }
  </style>
</head>
<body>
  <h1>Đăng ký tài khoản</h1>
  <form method="POST" action="">
    <label for="tendangnhap">Tên đăng nhập:</label>
    <input type="text" id="tendangnhap" name="tendangnhap" required>

    <label for="matkhau">Mật khẩu:</label>
    <input type="matkhau" id="matkhau" name="matkhau" required>

    <label for="email">Email:</label> 
    <input type="email" id="email" name="email" required>

	  <label for="sodienthoai">Số Điện Thoại:</label>
    <input type="sodienthoai" id="sodienthoai" name="sodienthoai" required>

    <div class="login1">
       <input type="submit"value="Đăng Ký">
    </div>
    <p>
				<a class="btn google" href="/account/google?returnUrl=%2Faccount%2Fprofile">
					Đăng ký bằng Google
				</a>
      </p>

  </form>
</body>
</html>

        
          
<div class="policies">
            <label>
              
              Tôi đồng ý với
				<a href="/support/terms" target="_blank" rel="nofollow">
					Chính sách và quy định sử dụng
				</a>
            </label>
          </div>
          <div class="actions">
            Đã có tài khoản?
            <a href="dangnhap.php">Đăng nhập</a>
          </div>
        </div>
      </div>
      <div id="footer"></div>
    </div>
   
    <div class="overlay"></div>
  </body>
</html>
 