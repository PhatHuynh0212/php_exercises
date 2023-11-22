<?php
require_once("db_module.php");

if (isset($_GET['q'])) {
    $searchQuery = $_GET['q'];

    taoKetNoi($link);

    $searchQuery = mysqli_real_escape_string($link, $searchQuery);

    $query = "INSERT INTO `tbl_image` (`anh`) VALUES ('$searchQuery')";
    $result = chayTruyVanTraVeDL($link, $query);

    $query = "SELECT * FROM tbl_image";
    $result = chayTruyVanTraVeDL($link, $query);

    $films = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $films[] = array(
            'anh' => $row['anh']
        );
    }
    giaiPhongBoNho($link, $result);
    echo json_encode($films);
} else {
    taoKetNoi($link);

    $query = "SELECT * FROM tbl_image";
    $result = chayTruyVanTraVeDL($link, $query);

    $films = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $films[] = array(
            'anh' => $row['anh']
        );
    }
    giaiPhongBoNho($link, $result);
    echo json_encode($films);
}
?>
