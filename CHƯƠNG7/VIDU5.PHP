<?php
$servername = "localhost";
$database = "quan ly ban hang";
$username = "root";
$password = "";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Câu lệnh SQL xóa dữ liệu (ví dụ: xóa khách hàng có mã 'KH01')
$sql = "DELETE FROM khachhang WHERE makh='K001'";

$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả thực thi
if ($result) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>