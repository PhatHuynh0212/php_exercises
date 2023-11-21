<?php
require_once("db_module.php");

if (isset($_GET['q'])) {
    $searchQuery = $_GET['q'];


    taoKetNoi($link);

    $searchQuery = mysqli_real_escape_string($link, $searchQuery);
    $query = "select * FROM tbl_film WHERE ten LIKE '%$searchQuery%'";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $films = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $films[] = array(
            'id' => $row['id'],
            'ten' => $row['ten'],
            'danh_gia' => $row['danh_gia'],
            'anh' => $row['anh'],
            'the_loai' => $row['the_loai']
        );
    }


    giaiPhongBoNho($link, $result);

    // Return the results as JSON
    echo json_encode($films);
} else {

    taoKetNoi($link);

    $query = "select * FROM tbl_film";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $films = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $films[] = array(
            'id' => $row['id'],
            'ten' => $row['ten'],
            'danh_gia' => $row['danh_gia'],
            'anh' => $row['anh'],
            'the_loai' => $row['the_loai']
        );
    }


    giaiPhongBoNho($link, $result);


    echo json_encode($films);
}
?>
