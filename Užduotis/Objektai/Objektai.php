<?php 

//Sugeneruokite objektą iš 30 elementų, kurių reikšmės 
//yra atsitiktiniai skaičiai nuo 5 iki 25.

$objektas = new stdClass;
for ($i=0; $i < 30; $i++) { 
    $objektas -> $i = rand(5,25);
}

//Papildykite objektą papildomais 10 elementų su reikšmėmis 
//nuo 5 iki 25, kad bendras objektas padidėtų iki indekso 39;

for ($i=30; $i < 40; $i++) { 
    $objektas -> $i = rand(5,25);
}


echo '<pre>';
print_r($objektas);
echo "<br />";

//Pirminio masyvo elementus su poriniais indeksais padarykite 
//lygius 0 jeigu jie didesni už 15;

foreach ($objektas as $key => $value) {
    if($key % 2 ==0){
        if($value > 15){
            $objektas -> $key = 0;
        }
    }
}
echo '<pre>';
print_r($objektas);

//Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

foreach ($objektas as $key => $value) {
    if($value > 10){
        echo "Indekso $key pirma vertė yra $value <br />";
        break;
    }
}


//Naudodami funkciją unset() iš objekto ištrinkite visus elementus turinčius porinį indeksą;

foreach ($objektas as $key => $value) {
    if($key % 2 ==0){
        unset($objektas -> $key);
    }
}

echo '<pre>';
print_r($objektas);


//Sugeneruokite objektą, kurio reikšmės atsitiktinės raidės A, B, C ir D,
// o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$objektABC = new stdClass;
for ($i=0; $i < 200; $i++) {
    $rand = rand(1,4);
    $rand == 1 ? $objektABC -> $i = 'A' : '';
    $rand == 2 ? $objektABC -> $i = 'B' : '';
    $rand == 3 ? $objektABC -> $i = 'C' : '';
    $rand == 4 ? $objektABC -> $i = 'D' : '';
    
}
print_r(array_count_values( (array) $objektABC ));
// $arrayABC = json_decode(json_encode($objektABC), true);
// echo '<pre>';
// print_r(array_count_values($arrayABC));

//Išrūšiuokite 6 uždavinio objektą pagal abecėlę.

$arrayABC = json_decode(json_encode($objektABC), true);
sort($arrayABC);
$objektABC = json_decode(json_encode($arrayABC));
echo '<pre>';
print_r($arrayABC);


echo "<h2> Iš klasių </h2>";

spl_autoload_register(function () {
    include './classes/FirstH.php';
    include './classes/SecondH.php';
});

$firstH = new FirstH();
$firstH ->addValue();
print_r($firstH ->object1);


