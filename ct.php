<?php
  include './connectct.php';
// kiểm tra xem có dữ liệu POST được gửi đến không
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // câu lệnh SQL để ghi thông tin vào bảng liên hệ của cơ sở dữ liệu của bạn
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    
    // thực hiện câu lệnh SQL trên kết nối cơ sở dữ liệu của bạn
    if($conn->query($sql) === TRUE) {
        echo 'Gửi Thành Công';
      
        exit;
    } else {
        // nếu có lỗi xảy ra, hiển thị thông báo lỗi
        echo 'Error: ' . $conn->error;
    }
}

// đóng kết nối cơ sở dữ liệu của bạn
$conn->close();
?>