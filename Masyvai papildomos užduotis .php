<?php
//Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai 
//iš 5 elementų su reikšmėmis nuo 5 iki 25.
echo '<h2>Pirma užduotis</h2>';
$masyvas_out = [];

for($i = 0; $i < 10; $i++){
    for($x = 0; $x < 5; $x++){
        $masyvas_out[$i][] = rand(5,25);
    }
}
echo '<pre>';
print_r($masyvas_out);
echo '<pre>';

//Naudodamiesi 1 uždavinio masyvu:
//a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<h2>Antra A užduotis</h2>';
foreach($masyvas_out as $skaicius_out){
    if(is_array($skaicius_out)){
        foreach($skaicius_out as $skaicius_in){
            if($skaicius_in > 10){
                $i++;
            }
        }
    }
}
echo "1 užduoties masyve yra $i skaičių didesnių negu 10 <br />";

//b) Raskite didžiausio elemento reikšmę;
echo '<h2>Antra B užduotis</h2>';
$max_verte = [];
foreach($masyvas_out as $skaicius_out){
    $max_verte[] = max($skaicius_out);
}
$max_verte = max($max_verte);
echo "1 užduoties masyve didžiausia reikšmė yra $max_verte  <br />";
//c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais 
//indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<h2>Antra C užduotis</h2>';
$sum0 = [0,0,0,0,0];

foreach($masyvas_out as $index1 => $skaicius_out){
    foreach($skaicius_out as $index2 => $skaicius_in){
        if($index2 == 0){
            $sum0[0] += $skaicius_in;
        }
        if($index2 == 1){
            $sum0[1] += $skaicius_in;
        }
        if($index2 == 2){
            $sum0[2] += $skaicius_in;
        }
        if($index2 == 3){
            $sum0[3] += $skaicius_in;
        }
        if($index2 == 4){
            $sum0[4] += $skaicius_in; 
        }
    }
}

print_r($sum0);

//d) Visus masyvus “pailginkite” iki 7 elementų
echo '<h2>Antra D užduotis</h2>';


for($i = 0; $i < 10; $i++){
    for($x = 0; $x < 2; $x++){
        $masyvas_out[$i][] = rand(5,25);
    }
}
echo '<pre>';
print_r($masyvas_out);
echo '<pre>';

//e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų 
//sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant 
//naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi 
//mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo '<h2>Antra E užduotis</h2>';
foreach($masyvas_out as $index1 => $skaicius_out){
    $masyvas_out[10][$index1] = array_sum($skaicius_out);
}

echo '<pre>';
print_r($masyvas_out);
echo '<pre>';

?>