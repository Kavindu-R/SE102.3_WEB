<?php
    $units = $_POST["Uni"];
    $bill = null;

    if ($units <= 50){
        $bill = $units * 3.5;
        echo "Rs.", $bill;
    }
    elseif ($units <= 100) {
        $g_50 = $units - 50;
        $bill = (50 * 3.5) + ($g_50 * 4);
        echo "Rs.", $bill;
    }
    elseif ($units <= 150) {
        $g_100 = $units - 100;
        $bill = $g_100 * 5.20 + (50 * 3.5) + (50 * 4);
        echo "Rs.", $bill;
    }
    elseif ($units > 150) {
        $g_150 = $units - 150;
        $bill = $g_150 * 6.5 + (50 * 5.2) + (50 * 3.5) + (50 * 4);
        echo "Rs.", $bill;
    }

?>
