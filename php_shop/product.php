<?php

    include("data.php");

    foreach ($data as $product => $brands) {
        echo '<li class="mb-3">
                <a href="?product='.$product.'" class="text-info"> 
                    '.$product.' 
                </a>
            </li>';
    }

?>