<?php

function count_vowels($string){
    $array = str_split($string);
    $vocal = ['a','i','u','e','o'];
    $cari = array_intersect($vocal,$array);
    $count = array_count_values($array);
    $result = [];

    foreach($cari as $item){
        $result[$item] += $count[$item];
    }
    foreach($result as $huruf => $jumlah){
        $angka += $jumlah;
    }

    return $angka;
}

echo count_vowels('Rahmad Subagiyo');

?>