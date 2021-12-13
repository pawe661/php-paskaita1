<?php

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

$failas = fopen('./uzd1.json', 'w+');
if( fwrite($failas, $json) ) {
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

$json2 = file_get_contents('./uzd1.json');
$masyvas = json_decode($json);
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

if(fwrite($failas, $json2) ) {
    echo 'Sekmingai irasytas stringas i faila';
}
?>