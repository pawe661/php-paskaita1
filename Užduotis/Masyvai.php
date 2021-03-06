
<?php

echo '<pre>';

//Masyvai

//Paprastas masyvas
$masyvas = ['Maksima', 'Rimi', 'Iki', 'Lidl', 'norfa'];

$masyvas['indeksas'] = 'ExpressMarket';
$masyvas[] = 'Silas';

//Asociatyvus masyvas
$masyvas = ['parduotuve1' => 'Maksima', 'parduotuve2' => 'Rimi', 
            'parduotuve3' => 'Iki', 'parduotuve4' => 'Lidl', 
            'parduotuve5' => 'Norfa'];
    

$masyvas['parduotuve1'] = [
    'adresas1' => 'Kazkoks adresas 123',
    'dar vienas adresas',
    'trecias adresas'
];

// echo '<pre>';
// print_r($masyvas);

//is_array() Nusako ar kintamasis yra masyvas ar ne. Grazina true arba false
//is_string() grazina true arba false atsakyma ar kintamasis yra stringas

$filtruotas_masyvas = [];

foreach($masyvas as $indeksas => $reiksme) {

    //$masyvas[$indeksas] = 'Test';

    if(!is_array($reiksme)) {
        $filtruotas_masyvas[$indeksas] = $reiksme;
    }

}

// echo '<pre>';
// print_r($filtruotas_masyvas);

//sort() Funkcija paprasto masyvo rusiavimui nuo maziausios reiksmes iki didziausios
//rsort() Funkcija paprasto masyvo rusiavimui nuo didziausios reiksme iki maziausios
//asort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksmes iki didziausios
//ksort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksme iki didziausios pagal indeksa
//arsort() Funkcija rusiuoti asociatyviems masyvams nuo didziausios reiksmes iki maziausios
//krsort() Funkcija rusiuoti asociatyviems masyvams nuo maziausios reiksmes iki didziausios
//array_keys() Grazina masyvo reiksmes indeksa
//array_merge() Sujungia du masyvus i viena
//array_pop() Paima paskutine masyve esancia reiksme
//array_shift() Panaikina pirma reiksme is masyvo
//array_slice() Istraukia dali masyvo
//array_splice() Panaikiname dali masyvo
//array_reverse() Veikia su abiejais tipais
//array_replace() Sukeicia masyve esancias reiksmes
//array_search() iesko teksto masyve
//array_push() prideda nauja reiksme
//array_unique() Isfiltruoja masyva, kad jame liktu tik unikalios reiksmes
//https://www.php.net/manual/en/function.array-unique
//unset() - Pasalina norima indeksa is masyvo
//array_key_exists() - Patikrina ar indeksas egzistuoja
//array_sum() - Susumuoja visas reiksmes masyve

//$filtruoto_masyvos_indeksas = array_keys($filtruotas_masyvas, 'Norfa');

//Sujungti du masyvus i viena

$masyvas_antras = [25, 60, 51, 40];
//$filtruotas_masyvas[] = $masyvas_antras;

$naujas_sujungtas_masyvas = array_merge($filtruotas_masyvas, $masyvas_antras);

$paskutinis_reiksme = array_pop($naujas_sujungtas_masyvas);

array_shift($naujas_sujungtas_masyvas);

$istrauktas_masyvas = array_slice($naujas_sujungtas_masyvas, 2, 2);
$masyvas_naikinimui = $naujas_sujungtas_masyvas;

array_splice($masyvas_naikinimui, 3);

$atvirkscias_masyvas = array_reverse($naujas_sujungtas_masyvas);

$masyvas_sukeisti_reiksmes = [0 => 'Pakeista1', 1 => 'Pakeista2', 2 => 'Pakeista3'];

$sukeistos_masyvo_reiksmes = array_replace($atvirkscias_masyvas, $masyvas_sukeisti_reiksmes);

$ieskomas_tekstas = array_search('Norfa', $sukeistos_masyvo_reiksmes);


$sukeistos_masyvo_reiksmes[] = 55;

array_push($sukeistos_masyvo_reiksmes, 'Array push pridetas tekstas');

$sukeistos_masyvo_reiksmes[] = 'Norfa';

$unikalus_masyvas = array_unique($sukeistos_masyvo_reiksmes);

unset($unikalus_masyvas['parduotuve3']);

if(array_key_exists( 'parduotuve5', $unikalus_masyvas) )
    echo 'Indeksas egzistuoja';

print_r($unikalus_masyvas);

$skaiciu_masyvas = [0,15,22,52,10523,15128,189156];

echo array_sum($skaiciu_masyvas);

//Masyvai

echo '<h1>Masyvu uzduotys</h1>';

//Pirma uzduotis

echo '<h2>Pirma uzduotis</h2>';

$masyvas = [];

for($i = 0; $i < 30; $i++) {

    $skaicius = rand(5, 25);

    $masyvas[] = $skaicius;

}

print_r($masyvas);

//A uzduotis

echo '<h2>Pirmos uzduoties A</h2>';

$reiksmes = 0;

foreach($masyvas as $skaicius) {

    if($skaicius > 10)
        $reiksmes++;

}

echo $reiksmes;

//B uzduotis

echo '<h2>Pirmos uzduoties B</h2>';

$didziausios_reiksmes_indeksas = array_keys($masyvas, max($masyvas));

//count() - grazina skaiciu kiek turime reiksmiu masyve

foreach($didziausios_reiksmes_indeksas as $indeksas) {

    echo 'Reiksme: ' . $masyvas[$indeksas] . ' Indeksas:'. $indeksas . '<br />';

}

//C uzduotis

echo '<h2>Pirmos uzduoties C</h2>';

$reiksmiu_suma = 0;

foreach($masyvas as $indeksas => $reiksme) {

    if($indeksas % 2 == 0)
        $reiksmiu_suma += $reiksme;

}

echo $reiksmiu_suma;

// D uzduotis 

echo '<h2>Pirmos uzduoties D</h2>';


foreach ($masyvas as $index => $skaicius){
    $reiksmes_indekso_skirtumas[] =  $skaicius - $index;
}
print_r($reiksmes_indekso_skirtumas);


// E uzduotis 

echo '<h2>Pirmos uzduoties E</h2>';

for($i = 0; $i < 10; $i++) {

    $skaicius = rand(5, 25);

    $masyvas[] = $skaicius;

}
print_r($masyvas);

// F uzduotis 

echo '<h2>Pirmos uzduoties F</h2>';

foreach($masyvas as $skaicius){
    if($skaicius % 2 == 0){
        $poriniai[] = $skaicius;
    }else{
        $neporiniai[] = $skaicius;
    }
}   
echo "Poriniai";
print_r($poriniai);
echo "Neporiniai";
print_r($neporiniai);

// G uzduotis 

echo '<h2>Pirmos uzduoties G</h2>';
$masyvas = [];

foreach($masyvas as $indeksas => $skaicius){
    if($indeksas % 2 == 0 and $skaicius > 15){
    $masyvas[$indeksas] = 0;
    }
    }
    echo "Masyvas";
    print_r($masyvas). "<br>";


// H uzduotis 

echo '<h2>Pirmos uzduoties H</h2>';



foreach($masyvas as $index => $skaicius ){
    if($skaicius > 10){
    echo "Pirmas skai??ius didesnis nei 10 yra Indekso " . $index . "<br>";
    break;
    }
}

// I uzduotis 

echo '<h2>Pirmos uzduoties I</h2>';
foreach($masyvas as $index => $skaicius){
    if($skaicius % 2 == 0){
        unset($masyvas[$index]);
    }
}
print_r($masyvas) . "<br>";


//Sugeneruokite masyv??, kurio reik??m??s atsitiktin??s raid??s 
//A, B, C ir D, o ilgis 200. Suskai??iuokite kiek yra kiekvienos raid??s.


echo '<h2>Tre??ia u??duotis</h2>';
$A = 0;
$B = 0;
$C = 0;
$D = 0;
for($i = 0; $i < 200; $i++){
    $rnd = rand(1,4);
    if($rnd == 1){
        $raide = 'A';
        $A++;
        $abcdmasyvas[] = $raide;
    }elseif($rnd == 2){
        $raide = 'B';
        $B++;
        $abcdmasyvas[] = $raide;
    }elseif($rnd == 3){
        $raide = 'C';
        $C++;
        $abcdmasyvas[] = $raide;
    }else{
        $raide = 'D';
        $D++;
        $abcdmasyvas[] = $raide;
    }
   
}
print_r ($abcdmasyvas) .'<br>';

echo "A buvo $A, B buvo $B, C buvo $C, D buvo $D <br>";
    //??ymiai papras??iau t?? galima padaryti su masyvu

$mas_raides = ['A','B','C','D'];
$raid_masyvas[] = 0;
for($i = 0; $i < 200; $i++){
   $raides = $mas_raides[rand(0, 3)];

   $raid_masyvas[] = $raides; 
   //kad skai??iuoti raides vistiek reikia if ra??yti

}

//I??r????iuokite 3 u??davinio masyv?? pagal abec??l??.
echo '<h2>Ketvirta u??duotis</h2>';
asort($abcdmasyvas);
print_r($abcdmasyvas);

//Sugeneruokite 3 masyvus pagal 3 u??davinio s??lyg??. Sud??kite masyvus,
//sud??dami atitinkamas reik??mes. Paskai??iuokite kiek unikali?? 
//(po vien??, nesikartojan??i??) reik??mi?? ir kiek unikali?? kombinacij?? gavote.
echo '<h2>Penkta u??duotis</h2>';
$uni_kombabc = 0;
$uni_komb[] = 0;
for($i = 0; $i < 200; $i++){
    $raides = $mas_raides[rand(0, 3)];
    $abcdmasyvas1[] = $raides;
}
for($i = 0; $i < 200; $i++){
    $raides = $mas_raides[rand(0, 3)];
    $abcdmasyvas2[] = $raides;
}  
for($i = 0; $i < 200; $i++){
    $raides = $mas_raides[rand(0, 3)];
    $abcdmasyvas3[] = $raides;  
}
for($i = 0; $i < 200; $i++){
echo $abcdmasyvas1[$i].$abcdmasyvas2[$i].$abcdmasyvas3[$i].'<br>';
//skai??iuoja kiek yra kombinacij?? kur raid?? nesikartoja
if($abcdmasyvas1[$i] !== $abcdmasyvas2[$i] && $abcdmasyvas2[$i] !== $abcdmasyvas3[$i] && $abcdmasyvas3[$i] !== $abcdmasyvas1[$i]){
$uni_kombabc++;
}
//skai??iuoja kiek unikali?? raid??i?? kombinacij??
$uni_komb[] = $abcdmasyvas1[$i].$abcdmasyvas2[$i].$abcdmasyvas3[$i];
$result = array_unique($uni_komb);

}

echo "kombinacij?? kur raid?? nesikartoja yra $uni_kombabc".'<br>';
echo "unikali?? raid??i?? kombinacij?? yra " . count($result).'<br>';


//Sugeneruokite du masyvus, kuri?? reik??m??s yra atsitiktiniai skai??iai
//nuo 100 iki 999. Masyv?? ilgiai 100. Masyv?? reik??m??s turi b??ti unikalios
//savo masyve (t.y. neturi kartotis).
echo '<h2>??e??ta u??duotis</h2>';
$masyvas_vienas = [];
$masyvas_du = [];
$i = 0;
$i2 = 0;
while($i < 100){
    $rnd = rand(100,999);
    if(!in_array($rnd, $masyvas_vienas)) {
        $masyvas_vienas[] = $rnd;
            $i++;
        }
}
while($i2 < 100){
    $rnd = rand(100,999);
    if(!in_array($rnd, $masyvas_du)) {
        $masyvas_du[] = $rnd;
            $i2++;
        }
}
print_r($masyvas_vienas);
print_r($masyvas_du);


//Sugeneruokite masyv??, kuris b??t?? sudarytas i?? reik??mi??,
//kurios yra pirmame 6 u??davinio masyve, bet n??ra antrame 6 u??davinio masyve.
echo '<h2>Septinta u??duotis</h2>';

$output = array_merge(array_diff($masyvas_vienas, $masyvas_du), array_diff($masyvas_du, $masyvas_vienas));

print_r($output);

//Sugeneruokite masyv?? i?? element??, kurie kartojasi abiejuose 6 u??davinio masyvuose.
echo '<h2>A??tunta u??duotis</h2>';

$output = array_merge(array_intersect($masyvas_du, $masyvas_vienas));

print_r($output);

//Sugeneruokite masyv??, kurio indeksus sudaryt?? pirmo
// 6 u??davinio masyvo reik??m??s, o jo reik??m??s i?? b??t?? antrojo masyvo.
echo '<h2>Devinta u??duotis</h2>';

$devintas_masyvas = array_combine($masyvas_vienas, $masyvas_du);

print_r($devintas_masyvas);

//Sugeneruokite 10 skai??i?? masyv?? pagal taisykl??: 
//Du pirmi skai??iai- atsitiktiniai nuo 5 iki 25. 
//Tre??ias, pirmo ir antro suma. Ketvirtas- antro ir tre??io suma. 
//Penktas tre??io ir ketvirto suma ir t.t.
echo '<h2>De??imta u??duotis</h2>';

$des_mas = [];

for($i = 0; $i < 10; $i++){
    if($i < 2){
        $des_mas[] = rand(5,25);
    }else{
        $des_mas[] = $des_mas[$i - 2] + $des_mas[$i - 1];
    }
}
print_r($des_mas);

//Sugeneruokite 101 elemento masyv?? su atsitiktiniais skai??iais nuo 0 iki 300. 
//Reik??mes kurios tame masyve yra ne unikalios pergeneruokite i?? naujo taip, 
//kad visos reik??m??s masyve b??t?? unikalios. I??r????iuokite masyv?? taip, kad jo 
//did??iausia reik??m?? b??t?? masyvo viduryje, o einant nuo jos link masyvo prad??ios 
//ir pabaigos reik??m??s ma????t??. Paskai??iuokite pirmos ir antros masyvo dalies sumas
//(neskai??iuojant vidurin??s). Jeigu sum?? skirtumas (modulis, absoliutus dydis) yra
//didesnis nei | 30 | r????iavim?? kartokite. (Kad sumos nesiskirt?? viena nuo kitos daugiau nei per 30)
echo '<h2>Vienuolikta u??duotis</h2>';
$pask_mas = [];
$pask_mas2 = [];
$max_verte = 0;
//sugeneruoja unikalius rand skai??ius
for($i = 0; $i < 101;){
    $rnd = rand(0,300);
    if(!in_array($rnd, $pask_mas)) {
        $pask_mas[] = $rnd;
            $i++;
        }
}
//sustato masyva nuo min iki max
asort($pask_mas);
//Indeksus "reset" padaro
$pask_mas = array_values($pask_mas);
//nustato max verte
$max_verte = max($pask_mas);
//masyv?? padalina ?? du kas antr?? vert?? 
foreach($pask_mas as $indeksas => $reiksme) {
    if($indeksas % 2 == 0){    
        $pask_mas2[] = $reiksme;
        unset($pask_mas[$indeksas]);
    }
}
echo "mass 1 <br>";
//??ia indeks "reset" reikalingas kad po to b??t?? galima swap daryti tarp $pask_mas ir $pask_mas2
$pask_mas = array_values($pask_mas);
print_r($pask_mas);
echo "mass 2 <br>";
//sustato masyva nuo max iki min
arsort($pask_mas2);
//??ia indeks "reset" reikalingas kad po to b??t?? galima swap daryti tarp $pask_mas ir $pask_mas2
$pask_mas2 = array_values($pask_mas2);
print_r($pask_mas2);

//sujungia du masyvus
$pask_mas_comb = array_merge($pask_mas,$pask_mas2);
echo "max verte yra $max_verte <br>";
print_r($pask_mas_comb);
//skai??iuoja skirtum?? tarp dviej?? pusi?? atmetant did??iausi?? reik??m??
$skaiciavumas = array_sum($pask_mas) - (array_sum($pask_mas2) - $max_verte); //galima $skaiciavumas = $pask_mas % ($pask_mas2 - $max_verte);
echo $skaiciavumas . "<br>";
//Tikrina ar skirtumas yra ma??esnis nei 30
$a1 = 0;
$a2 = 50;
while($skaiciavumas > 30){
    //jeigu ne apkei??ia viej?? masyv?? pirm?? ir paskutin?? reik??m?? 
    [$pask_mas[$a1], $pask_mas2[$a2]] = [$pask_mas2[$a2], $pask_mas[$a1]];
    $a1++;
    $a2--;
    //perskai??iuoja skirtum?? tarp dviej?? pusi?? atmetant did??iausi?? reik??m??
    $skaiciavumas = array_sum($pask_mas) - (array_sum($pask_mas2) - $max_verte);
    echo "Skirtumas tarp skai??i?? $skaiciavumas <br>";
}
    //sujungia atgal naujus masyvus
$pask_mas_comb = array_merge($pask_mas,$pask_mas2);
    print_r($pask_mas_comb);