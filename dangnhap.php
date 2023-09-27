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
    <link rel="stylesheet" href="dangnhap.css">
    <title>SHOP OGGY</title>
    <link rel="shortcut icon" href="image/logo1.jpg" type="image/x-icon">
</head>

<body>
    <style>
        #product-search {
            margin: 0 40px;

            padding-bottom: 20px;
            float: left;
        }
    </style>
    <header>
    <header>
        
			


<?php
// Kết nối đến cơ sở dữ liệu MySQL


require('connect.php');
//$conn = new mysqli('localhost','root', '','mysql_web');



// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Xử lý dữ liệu đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendangnhap = filter_input(INPUT_POST, 'tendangnhap', FILTER_SANITIZE_STRING);
	$matkhau = filter_input(INPUT_POST, 'matkhau', FILTER_SANITIZE_STRING);


    // Truy vấn cơ sở dữ liệu để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM `tbl_dangky` WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công, lưu thông tin vào session
        $_SESSION['tendangnhap'] = $tendangnhap;
        
        // xuất dữ liệu ra màn hình
        //print_r($_SESSION);
        echo $_SESSION['tendangnhap'];
        // Chuyển hướng đến trang chủ
        header('Location: index.php');
        exit;
      } else {
        // Đăng nhập thất bại
        $error_message = 'Tên đăng nhập hoặc mật khẩu không đúng';
      }
    }

mysqli_close($conn);
?>

<!-- Form đăng nhập -->
<body>

<?php if (isset($error_message)): ?>
  <p><?php echo $error_message; ?></p>
<?php endif; ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h1>Đăng Nhập</h1>
    <label for="tendangnhap">Tên đăng nhập:</label>
    <input type="text" name="tendangnhap" required>

    <label for="matkhau">Mật khẩu:</label>
    <input type="matkhau" name="matkhau" required>

    <input type="submit" value="Đăng nhập">

</form>
    
        <div class="dangnhap">
            Bạn chưa có tài khoản?
            <a href="dangki.php">Đăng Ký</a>
          </div>
        
<!-- Thông báo lỗi (nếu có) -->
<?php if(isset($error)) echo $error; ?>
       
</body>
</html>