<?php

if (isset($_GET['angka']) && $_GET['angka'] != "") {
    $angka = htmlspecialchars($_GET['angka']);
    
    if ((int)$angka % 2 == 1) {
        echo 'Ganjil';
    }elseif((int)$angka % 2 == 0) {
        echo 'Genap';
    }else{
        echo '-';
    }
}else{
    echo '-';
}