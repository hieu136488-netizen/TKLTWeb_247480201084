<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật dữ liệu</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "quanlybanhang"; // Khuyên dùng tên không dấu, viết liền để tránh lỗi
    $username = "root";
    $password = "";

    //  Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

  
    $sql = "UPDATE khachhang SET tenkh='KHOA' WHERE makh='K007'";

    if (mysqli_query($conn, $sql)) {
        echo "Mẫu tin đã được cập nhật thành công.";
    } else {
        echo "Cập nhật dữ liệu thất bại: " . mysqli_error($conn);
    }


    mysqli_close($conn);
    ?>
</body>
</html>