<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Không kết nối: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sử dụng toán tử ?? để tránh lỗi Warning: Undefined array key khi mới load trang
    $mahang  = $_POST["txtMaHang"] ?? '';
    $tenhang = $_POST["txtTenHang"] ?? '';
    $mansx   = $_POST["txtMaNSX"] ?? '';
    $namsx   = $_POST["txtNamSX"] ?? '';
    $gia     = $_POST["txtGia"] ?? '';

    // Đã sửa 'mahamg' thành 'mahang' cho đúng với cột trong database
    $sql = "INSERT INTO hanghoa
                (mahang, tenhang, mansx, namsx, gia)
                VALUES
                ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công!<br>";
    } else {
        echo "Thêm dữ liệu thất bại: " . mysqli_error($conn) . "<br>";
    }
}

// SELECT hiển thị dữ liệu
$sql_select = "SELECT * FROM hanghoa";
$result = mysqli_query($conn, $sql_select);

echo "<h2>DANH SÁCH HÀNG HÓA</h2>";

if ($result && mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã nhà sản xuất</th>
        <th>Năm sản xuất</th>
        <th>Giá</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // Đã sửa 'mahamg' thành 'mahang' ở đây để khớp với database
        echo "<td>" . htmlspecialchars($row['mahang']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tenhang']) . "</td>";
        echo "<td>" . htmlspecialchars($row['mansx']) . "</td>";
        echo "<td>" . htmlspecialchars($row['namsx']) . "</td>";
        echo "<td>" . htmlspecialchars($row['gia']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "Chưa có dữ liệu hàng hóa!";
}

mysqli_close($conn);
?>
