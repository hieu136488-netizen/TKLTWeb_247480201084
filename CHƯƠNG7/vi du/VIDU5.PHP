<?php
$servername = "localhost";
$database = "quanlybanhang"; // Khuyên dùng tên không dấu, viết liền để tránh lỗi
$username = "root";
$password = "";

// 1. Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thiết lập bảng mã tiếng Việt
mysqli_set_charset($conn, "utf8");

// 2. Câu lệnh SQL xóa dữ liệu (ví dụ: xóa khách hàng có mã 'K001')
$sql = "DELETE FROM khachhang WHERE makh='K001'";

// 3. Thực thi câu lệnh và kiểm tra kết quả
if (mysqli_query($conn, $sql)) {
    echo "Xóa thành công.";
} else {
    echo "Xóa thất bại: " . mysqli_error($conn);
}

// 4. Đóng kết nối
mysqli_close($conn);
?>