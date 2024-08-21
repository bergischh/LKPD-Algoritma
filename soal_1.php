<?php

for ($tahunKabisat=1600; $tahunKabisat <= 2024; $tahunKabisat++) {
    
    if ($tahunKabisat % 400 == 0) {
        echo $tahunKabisat. " Tahun Kabisat <br>";
    }elseif ($tahunKabisat % 100 == 0) {
        echo $tahunKabisat. " Bukan Kabisat <br>";
    }
    elseif ($tahunKabisat % 4 == 0) {
        echo $tahunKabisat. " Tahun Kabisat <br>";
    }
    elseif ($tahunKabisat == 1700 && $tahunKabisat == 1800) {
        echo $tahunKabisat. "<b>Bukan Kabisat</b> <br>";
    }
}


