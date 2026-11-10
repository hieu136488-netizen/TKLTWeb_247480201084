<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "quan ly ban hang";
    $username = "root";
    $password = "";

    // Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Thực hiện lệnh select
    $sql = "SELECT diachi, dienthoai FROM khachhang";

    // ĐÃ SỬA: Dùng mysqli_query thay cho mysqli_connect
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo ("Địa chỉ: " . $row['diachi'] . " - Điện thoại: " . $row['dienthoai'] . "<br>");
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