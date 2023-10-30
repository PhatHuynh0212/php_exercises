<?php

    include("data.php");

    $product = isset($_GET['product']) ? $_GET['product'] : null;

    if ($product && isset($data[$product])) {
        $brands = $data[$product];
        echo '<div class="row mt-3 w-100 d-flex justify-content-between">';
            foreach ($brands as $brand) {
                echo '<div class="mb-3 pt-3" style="width: 180px; border: 1px solid black; border-radius: 5px">
                        <p class="text-center" style="font-size:18px;">'.$brand.'</p>
                    </div>';
            }
            '</div>';
    } else {
        echo 'Please, choose one product to see more brand.';
    }

?>