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

    
    $mahd  = $_POST["txtMaHoadon"] ?? '';
    $makh = $_POST["txtMaKH"] ?? '';
    $mahang   = $_POST["txtMaHang"] ?? '';
    $soluong   = $_POST["txtSoLuong"] ?? '';
    $thanhtien     = $_POST["txtThanhTien"] ?? '';


    $sql = "INSERT INTO hoadon
                (mahd, makh, mahang, soluong, thanhtien)
                VALUES
                ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công!<br>";
    } else {
        echo "Thêm dữ liệu thất bại: " . mysqli_error($conn) . "<br>";
    }
}

// SELECT hiển thị dữ liệu
$sql_select = "SELECT * FROM hoadon";
$result = mysqli_query($conn, $sql_select);

echo "<h2>DANH SÁCH HOÁ ĐƠN</h2>";

if ($result && mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
        <th>Mã Hoá Đơn</th>
        <th>Mã Khách Hàng</th>
        <th>Mã Hàng</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // Đã sửa 'mahamg' thành 'mahang' ở đây để khớp với database
        echo "<td>" . htmlspecialchars($row['mahd']) . "</td>";
        echo "<td>" . htmlspecialchars($row['makh']) . "</td>";
        echo "<td>" . htmlspecialchars($row['mahang']) . "</td>";
        echo "<td>" . htmlspecialchars($row['soluong']) . "</td>";
        echo "<td>" . htmlspecialchars($row['thanhtien']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "Chưa có dữ liệu hoá đơn!";
}

mysqli_close($conn);
?>
