<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paprasta aplikacija</title>
</head>
<body> 
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

//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi 
//būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės 
//atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio 
//masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
echo '<h2>Trečia užduotis</h2>';
$az = range('A', 'Z');
$top_az = [];

$az_count = count($az);

for($i = 0; $i < 10; $i++){
    $y = rand(2,20);
    for($x = 0; $x < $y; $x++){
        $top_az[$i][] = $az[rand(0,$az_count - 1)];
    }
    asort($top_az[$i]);
}

print_r($top_az);

//3.1 Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai 
//kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, 
//visada būtų didžiojo masyvo visai pradžioje.
echo '<h2>Ketvirta užduotis</h2>';


foreach($top_az as $index => $out_az){
    if(array_search('K', $out_az) == true){
        unset($top_az[$index]);
        $temp_az[$index] = $out_az;
    }
}
function sort_cb($a, $b) {
    return count($a) - count($b);
}
uasort($top_az, 'sort_cb');

if($temp_az != null){
function sort_db($a, $b) {
    return count($a) - count($b);
}
uasort($temp_az, 'sort_db');

$top_az = $temp_az + $top_az ;
}
print_r($top_az);


//Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra 
//masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
//unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
echo '<h2>Penkta užduotis</h2>';
$registr = [];
for($i = 0; $i < 30; $i++){
        $u_id['user_id'] = rand(1,1000000);
        $u_row['place_in_row'] = rand(0,100);
        $registr[] = $u_id + $u_row;
} 
print_r($registr);

// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: 
// name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų 
// lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
echo '<h2>Šešta užduotis</h2>';

// $letter_low = chr(rand(97,122));
$letter_n = '';
$letter_s = '';
foreach($registr as $index => $elements){
    for($n = 0; $n < (rand(5,15)); $n++){
            $letter_n .= chr(rand(97,122)); //lower letters
    }
    
    for($s = 0; $s < (rand(5,15)); $s++){
            $letter_s .= chr(rand(97,122)); //lower letters
    }
    $name['name'] = $letter_n;
    $surname['surname'] = $letter_s;
    $letter_n = 0;
    $letter_s = 0;

    $registr[$index] = $elements + $name + $surname;
}
print_r($registr);

//Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
//Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
//Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, 
//o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
//Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės 
//nuspalvintos spalva color.
echo '<h2>Septinta užduotis</h2>';
$sym = '#%+*@裡';
$output = [];
$line_count = 0;
//kaip 裡 desplay??? UTC-8 neparodo

for($i = 0; $i < 10; $i++){
    for($z = 0; $z < 10; $z++){
        $two_array['value'] = $sym[rand(0, strlen($sym)-1)];
        $twos_array['color'] = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        $output[$i][$z] = $two_array + $twos_array;
    }
}
for($sym_count = 0; $sym_count < 10 && $line_count < 10; $sym_count++){
    for($x = 0; $x < 10; $x++){
        echo '<span style="color:#' . $output[$sym_count][$x]['color'] . '">'. $output[$sym_count][$x]['value'] . ' ' . "</span>";
    }
    echo '<br />';
    $line_count++;
}
// print_r($output);

//Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę:
//generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu 
//reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
//atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę 
//nuo 0 iki 10 įrašykite tiesiogiai.
echo '<h2>Aštunta užduotis</h2>';
$z = null;
for($i = 0; $i < 10; $i++){
    $z = rand(0,5);
    // echo $z . '<br />';
    if($z == 0){
        $out[$i] = rand(0,10);
    }else{
        for($y = 0; $y < $z; $y++){
            $out[$i][$y] = rand(0,10);
        }  
    }
}
print_r($out);

//Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
// masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu 
//reikšmė yra masyvas, to masyvo reikšmių sumos.
echo '<h2>Devinta užduotis</h2>';

foreach ($out as $index => $skaicius) {
    if(is_array($skaicius)){
        $out[$index] = array_sum($skaicius); 
    }
}
sort($out);
print_r($out);
?>
</body>
</html>