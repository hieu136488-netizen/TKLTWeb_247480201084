<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>
<body>
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

    // 2. Dữ liệu cần thêm
    $mahang = "DDK";
    $tenhang = "DINH DANG KHOI";
    $mansx = "DDK26072006";
    $namsx = 2006;   // Nên để kiểu số nếu cột trong CSDL là kiểu số (INT)
    $gia = 1000000;  // Lưu ý: Nếu cột 'gia' trong CSDL là kiểu số (INT/FLOAT), hãy dùng số thay vì chữ "Vô giá"

    // 3. Câu lệnh SQL INSERT
    $sql = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx, gia) 
            VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    // 4. Thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "Mẫu tin đã được thêm thành công.";
    } else {
        echo "Thêm dữ liệu thất bại: " . mysqli_error($conn);
    }

    // 5. Đóng kết nối
    mysqli_close($conn);
    ?>
</body>
</html>