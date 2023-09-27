<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

 // Tạo một đối tượng PHPMailer
 $mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Lấy thông tin từ form
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST['subject'];
$message = $_POST["message"];

// Địa chỉ email của chủ sở hữu (thay bằng địa chỉ email thật)
$to = "quocvietdt8623@gmail.com";

// Tiêu đề email
$subject = " $subject";
// Nội dung email
$body = "Tên: $name\n";
$body .= "Email: $email\n";
$body .= "Noi dung: $subject";
$body .= "Y kien: $message\n";


// Cấu hình SMTP (thay bằng thông tin máy chủ SMTP thật)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'quocvietdt8623@gmail.com';
$mail->Password = 'ntpxeucucghgbdfn';
  // Người gửi và người nhận
  $mail->setFrom('quocvietdt8623@gmail.com', 'Viet');
  $mail->addAddress('quocvietdt8623@gmail.com', 'Quoc');

  // Định dạng email là HTML
  $mail->isHTML(true);

  // Tiêu đề và nội dung email
  $mail->Subject = 'Subject: ' . $name;
  $mail->Body = "Name: $name <br> Email: $email <br> Nội dung: $subject <br> Ý kiến: $message";


// Gửi email
if ($mail->send()) {
echo "Cảm ơn bạn đã gửi ý kiến đóng góp!";
} else {
echo "Có lỗi xảy ra khi gửi email. Vui lòng thử lại sau.";
}

}
?>

