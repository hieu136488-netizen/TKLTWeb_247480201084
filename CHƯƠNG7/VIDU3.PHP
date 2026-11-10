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
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    //Thực hiện lệnh INSERT INTO
    $mahang = "DDK";
    $tenhang = "DINH DANG KHOI";
    $mansx = "DDK26072006";
    $namsx = "2006";
    $gia = "Vô giá";
    $sql = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx, gia) 
            VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";
    if($result = mysqli_query($conn, $sql)){
        echo ("Mẫu tin đã được thêm thành công.");
    }
    else{
        echo "Thêm dữ liệu thất bại." . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>