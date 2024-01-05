<?php

$sinhVien = array(
    array("ten" => "Nguyen Van A", "tuoi" => 20, "diem" => 85),
    array("ten" => "Tran Thi B", "tuoi" => 21, "diem" => 75),
    array("ten" => "le Van C", "tuoi" => 22, "diem" => 90)
);

foreach ($sinhVien as $sv) {
    echo "Ten: ". $sv["ten"] . "<br>";
    echo "Tuổi: ". $sv["tuoi"] . "<br>";
    echo "Điểm: ". $sv["diem"] . "<br>";

    if ($sv["diem"] >= 80) {
        echo "Đánh giá : Xuất sắc <br>";
    }elseif ($sv["diem"] >= 70) {
        echo "Đánh giá : Khá <br>";
    }elseif ($sv["diem"] >= 70) {
        echo "Đánh giá : Trung bình <br>";
    }else {
        echo "Đánh giá : Yếu <br>";
    }

    echo "<hr>";
}

$tongDiem = 0;
foreach ($sinhVien as $sv ) {
    $tongDiem += $sv["diem"];
}

$diemTrungBinh = $tongDiem / count($sinhVien);

echo "Điểm trung bình của lớp là: " . $diemTrungBinh;

?>