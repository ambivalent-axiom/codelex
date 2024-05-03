<?php
    function cozaLozaWoza(): void {
        for($i=1; $i<=110; $i++) {
            if ($i % 3 !== 0 && $i % 5 !== 0 && $i % 7 !== 0) {
                echo $i;
            }
            if ($i % 3 == 0) {
                echo "Coza";
            }
            if ($i % 5 == 0) {
                echo "Loza";
            }
            if ($i % 7 == 0) {
                echo 'Woza';
            }
            if ($i % 11 == 0) {
                echo "\n";
                continue;
            }
            echo " ";
        }
    }
    cozaLozaWoza();