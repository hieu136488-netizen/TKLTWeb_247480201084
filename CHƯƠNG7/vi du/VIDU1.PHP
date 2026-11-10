<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "quanlybanhang"; // Đã đổi thành viết liền không dấu để khớp với CSDL
        $username = "root";
        $password = "";

        // Tạo kết nối
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        echo "Kết nối thành công!<br><br>";

        // Thực hiện lệnh SELECT
        $sql = "SELECT * FROM khachhang";

        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "Mã khách hàng: " . $row['makh'] . "<br>";
                    echo "Tên khách hàng: " . $row['tenkh'] . "<br>";
                    echo "Năm sinh: " . $row['namsinh'] . "<br>";
                    echo "Điện thoại: " . $row['dienthoai'] . "<br>";
                    echo "Địa chỉ: " . $row['diachi'] . "<br>";
                    echo "<hr>";
                }
                mysqli_free_result($result);
            } else {
                echo "No Records";
            }
        } else {
            echo "Truy vấn thất bại: " . mysqli_error($conn);
        }

        // Đóng kết nối
        mysqli_close($conn);
    ?>
</body>
</html>