<?php

function open_from_db($dir){
    $failas = fopen($dir, 'r');
    $json = file_get_contents($dir);
    $json = json_decode($json, true);
    fclose($failas);

    $json = json_decode($json, true);

    return $json;
}


$json_dir = './uzd1.json';
$masyvas_out = [];

for($i = 0; $i < 100; $i++){
    for($x = 0; $x < rand(5,20); $x++){
        $masyvas_out[$i][] = rand(99,11500);
    }
}

// echo '<pre>';
// print_r($masyvas_out);
// echo '<pre>';

$json = json_encode($masyvas_out);

$failas = fopen($json_dir, 'w');
if( file_put_contents ($json_dir, $json) ) {
    echo 'Sekmingai irasytas stringas i faila';
}

// $json = fread($failas, 9999);
// $json = file_get_contents('./uzd1.json');
// $json = json_decode($json);
// print_r($json);


//I STD Tipo masyva dekodintas JSON stringas
// $std = json_decode($json);
//echo $std->indeksas->masyvas[0];

//I Asociatyvaus Tipo masyva dekodintas JSON stringas
// $json = json_decode($json, true);


//Atsidarykite failą kuriame įrašytas masyvas, konvertuokite 
//JSON stringą į masyvą ir iš jo pašalinkite visus elementus 
//kurių skaitinės reikšmės didenesnės nei 6500. Masyvą konvertuokite
// į JSON formatą ir vėl išssaugokite faile.

$json2 = file_get_contents($json_dir);
$masyvas = json_decode($json2);
// echo "<pre>";
// print_r($masyvas);
foreach($masyvas as $index => $skaicius){
    foreach($skaicius as $index2 => $skaicius2){
        if($skaicius2 > 6500){
            unset($masyvas[$index][$index2]);
        }
    }
}
echo "<pre>";
print_r($masyvas);

$json2 = json_encode($masyvas);

if(file_put_contents($json_dir, $json2) ) {
    echo 'Sekmingai irasytas stringas i faila';
}

$error = json_last_error();

//Pakartokite antrają užduotį, tačiau su sąlyga: Jei masyvo elemento 
//reikšmė yra skaičius ir jis mažesnis nei 500, jo reikšmę pakeiskite 
//masyvu su atsitiktiniu kiekiu elementų nuo 3 iki 500, o jų reikšmės 
//atsitiktiniai skaičiais nuo 500 iki 6500 

$json3 = file_get_contents($json_dir);
$masyvas_x_3 = json_decode($json3, true);
echo "<pre>";
print_r($masyvas);
foreach($masyvas_x_3 as $index => $skaicius){
    foreach($skaicius as $index2 => $skaicius2){
        if($skaicius2 < 500){
            unset($masyvas_x_3[$index][$index2]);
            for($i = 0; $i < rand(3,500); $i++){
                $masyvas_x_3[$index][$index2][] = rand(500,6500);
            }
        }
    }
}
echo "<pre>";
print_r($masyvas_x_3);
?>