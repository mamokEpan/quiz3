<?php
     foreach (range(1, 15) as $angka){
        if ($angka % 3 != 0 && $angka % 5 !=0){
            echo $angka . '<br>';
            continue;
        }
        if ($angka % 3 == 0) echo 'fizz';
        if ($angka % 5 == 0) echo 'buzz';
        echo '<br>';
     }
