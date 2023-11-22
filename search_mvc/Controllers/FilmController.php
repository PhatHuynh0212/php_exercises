<?php
require_once ("modules/db_module.php");
require_once ("Models/film.php");

class FilmController {

    public function displayProducts() {
        $link = null;
        taoKetNoi($link);

        $query = "select * from tbl_film";
        $result = chayTruyVanTraVeDL($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $film = new Film($row['id'], $row['ten'], $row['danh_gia'], $row['anh'], $row['the_loai']);

            echo "<div class='col-md-4'>";
            echo "<div class='card' style='background: transparent;'>";
            echo "<img src='{$film->getAnh()}' class=' img-fluid' alt='Film Image'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title text-center'>{$film->getTen()}</h5>";
            echo "<p class='card-text'>Đánh giá: {$film->getDanhGia()} ⭐️</p>";
            echo "<p class='card-text'>Thể loại: {$film->getTheLoai()}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        giaiPhongBoNho($link, $result);
    }

    public function displaySearchResults($searchQuery) {
        $link = null;
        taoKetNoi($link);

        $query = "select * from tbl_film WHERE ten like '%$searchQuery%'";
        $result = chayTruyVanTraVeDL($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $film = new Film($row['id'], $row['ten'], $row['danh_gia'], $row['anh'], $row['the_loai']);

            echo "<div class='col-md-4'>";
            echo "<div class='card' style='background: transparent;'>";
            echo "<img src='{$film->getAnh()}' class=' img-fluid' alt='Film Image'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title text-center'>{$film->getTen()}</h5>";
            echo "<p class='card-text'>Đánh giá: {$film->getDanhGia()} ⭐️</p>";
            echo "<p class='card-text'>Thể loại: {$film->getTheLoai()}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        giaiPhongBoNho($link, $result);
    }
}
?>
