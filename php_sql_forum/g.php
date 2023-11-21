<?php
    $id_danhmuc = 3;
    $tieude = "Công nghệ mới";
    $hinhanh = "new_image.jpg";
    $noidung = "Nội dung bản tin mới";
    $tukhoa = "congnghe";
    $nguontin = "Nguồn tin mới";
    $like_bantin = 0; 
    $rating = 0; 

    $sql = "INSERT INTO tbl_bantin (id_danhmuc, tieude, hinhanh, noidung, tukhoa, nguontin, like_bantin, rating) VALUES ('$id_danhmuc', '$tieude', '$hinhanh', '$noidung', '$tukhoa', '$nguontin', '$like_bantin', '$rating')";
    $result = chayTruyVanTraVeDL($link, $sql);
        echo "Bản tin mới đã được thêm thành công.";
    
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_bantin WHERE id_danhmuc = 3");

    echo "<table border='1'>
    <tr>
        <th>ID bản tin</th>
        <th>Tiêu đề</th>
        <th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Từ khóa</th>
        <th>Nguồn tin</th>
        <th>Lượt thích</th>
        <th>Điểm đánh giá</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["hinhanh"] . "</td>";
        echo "<td>" . $row["noidung"] . "</td>";
        echo "<td>" . $row["tukhoa"] . "</td>";
        echo "<td>" . $row["nguontin"] . "</td>";
        echo "<td>" . $row["like_bantin"] . "</td>";
        echo "<td>" . $row["rating"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

<!-- INSERT INTO tbl_bantin (id_bantin, id_danhmuc, tieude, hinhanh, noidung, tukhoa, nguontin, like_bantin, rating) 
VALUES ( 7, (SELECT id_danhmuc FROM tbl_danhmuc WHERE ten_danhmuc = 'Công nghệ'), 'Tiêu đề bản tin mới', 'anh.jpg', 'Nội dung bản tin mới', 'congnghe', 'Nguồn tin mới', 0,0 ); -->