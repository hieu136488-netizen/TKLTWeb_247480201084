
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlybanhang";

try {
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    echo "Kết nối database thành công!";

    $conn->set_charset("utf8");

} catch (Exception $e) {
    die("Lỗi kết nối: " . $e->getMessage());
}
?>
