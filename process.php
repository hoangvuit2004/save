<?php
$servername = "localhost"; // Địa chỉ máy chủ MySQL (mặc định là localhost)
$username = "root";        // Tên người dùng MySQL (mặc định là root)
$password = "";            // Mật khẩu MySQL (để trống nếu mặc định)
$dbname = "hello"; // Tên cơ sở dữ liệu

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nhận dữ liệu từ form
$user = $_POST['username'];
$pass = $_POST['password'];

// Câu lệnh SQL để thêm dữ liệu vào bảng
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được thêm thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
