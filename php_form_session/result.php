<?php
    include_once("make.php");

    echo "<table border='1' borderColor='#fff'>";
    foreach ($_SESSION['data'] as $category => $products) {
        echo "<tr>";
        echo "<th>$category</th>";
        echo "<td>";
        echo "<ul>";
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
        echo "</ul>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>