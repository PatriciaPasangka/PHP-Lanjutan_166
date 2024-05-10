<?php
include "inc.php";
echo Sangka;
echo " <br>" ;
lif (Sangka==100){
    echo "Memuaskan";
} elseif (Sangka<100 && $angka>=85) {
    echo "Sangat Baik";
}elseif (Sangka<85 && Sangka>=70) {
    echo "Baik";
}elseif ($angka<70 && $angka>=55) {
    echo "Cukup";
}elseif (Sangka<55 && $angka>=0) {
    echo "Kurang";
}
?>