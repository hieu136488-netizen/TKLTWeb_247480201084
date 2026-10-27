<?php
$x=rand(1,100);
$y=rand(1,100);
if($x > $y)
{
    echo "kết quả phép tính nhân ".($x*$y)."";
    echo "<br>kết quả phép tính cộng ".($x+$y)."";
    echo "<br>kết quả phép tính chia  ".($x/$y)."";
    echo "<br>kết quả phép tính trừ".($x-$y)."";
    echo "<br>kết quả chia lấy dư".($x%=$y)."";
}
else{
    echo "x nhỏ hơn y";
}
?>