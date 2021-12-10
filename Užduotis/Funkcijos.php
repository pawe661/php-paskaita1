<?php
//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<h2>Pirma užduotis</h2>';

function Htagas($htag)
{
    echo "<h1>$htag</h1>";
}
Htagas('Sveiki atvyke');
Htagas('Testinis tekstas čia');

//Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, 
//įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją 
//remkitės pirmame uždavinyje parašytą funkciją;
echo '<h2>Antra užduotis</h2>';

function HStagas($htag, $hnumeris)
{
    echo "<h$hnumeris>$htag</h$hnumeris>";
}

HStagas('Test Tekstas8', 8);
HStagas('Test Tekstas2', 2);

//Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
//Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
//Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
//(h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite
// pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
echo '<h2>Trečia užduotis</h2>';
// echo md5(time());

$rndstring = md5(time());

echo $rndstring;
$resoult = preg_replace_callback('/[0-9]+/i', 
    function ($rado){
        echo '<h1>'.$rado[0] .'</h1>';
},$rndstring);

echo $resoult;


//Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas 
//dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, 
//kad būtų galima įvesti tik sveiką skaičių;
echo '<h2>Ketvirta užduotis</h2>';


function Devide ($number, &$s){
    $s = 0;
    $devider = 2;
    //patikrina ar skaičius yra sveikas
    if(!is_int($number)){
        echo "Įrašykite sveiką skaičių <br />";
        exit;
    }
    
    if ($number < 0){
        if ($number == -1){
            echo "Skaičius yra -1 ir jis dalinasi tik iš savęs <br />";
        }
        if ($number == -2){
            echo "Skaičius yra -2 ir jis dalinasi tik iš savęs ir iš 1 <br />";
        }
        while(($devider - 4) > $number){
            if ($number % ($devider - 4) == 0){
            $s++;
            }
            $devider--;
        }
        // echo "Skaičius be liekanos pasidalina $s kartus <br />";
        return $s;
    }
    if ($number == 0)
        echo "Skaičius yra 0 ir jis nesidalina <br />";
    if ($number > 0){
        if ($number == 1){
            echo "Skaičius yra 1 ir jis dalinasi tik iš savęs <br />";
        }
        if ($number == 2){
            echo "Skaičius yra 2 ir jis dalinasi tik iš savęs ir iš 1 <br />";
        }
        while(($devider + 1) < $number){
            if ($number % $devider == 0){
            $s++;
            }
            $devider++;
        }
        // echo "Skaičius be liekanos pasidalina $s kartus <br />";
        return $s;
        
    }      
}
Devide(23, $s);


//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
// skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos 
//kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo '<h2>Penkta užduotis</h2>';
$masyvas = [];
$new_masyvas = [];

for($i = 0; $i < 100; $i++) {

    $skaicius = rand(33, 77);

    $masyvas[] = $skaicius;
}
foreach($masyvas as $index => $sk){
    Devide($masyvas[$index], $s);
    
    $new_masyvas[] = $s;
}
array_multisort($new_masyvas,SORT_DESC, $masyvas );
print_r($masyvas);

//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
//skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo 
//ištrinkite pirminius skaičius.
echo '<h2>Šešta užduotis</h2>';
$masyvas2 = [];
$new_masyvas2 = [];
for($i = 0; $i < 100; $i++) {

    $skaicius = rand(333, 777);

    $masyvas2[] = $skaicius;
}
foreach($masyvas as $index => $sk){
    Devide($masyvas[$index], $s);
    if($s == 0){
        $new_masyvas2[] = $sk;
    }
    
}
print_r($new_masyvas2);

//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, 
//išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, 
//o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir 
//pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
// Paskutinio masyvo paskutinis elementas yra lygus 0;
echo '<h2>Septinta užduotis</h2>';
function array_add(){
    $add_array = [];
    for($i = 0; $i < rand(10, 20); $i++) {
        $add_array[] = rand(0, 10);
        return $add_array;
    }
}
for($i = 0; $i < rand(10, 20); $i++) {
    $skaicius = rand(0, 10);
    //paskutinis iš to rand bus masyvas
    for($i = 0; $i < rand(10, 20); $i++) {
        $skaicius = rand(0, 10);
    }
}
echo array_add();
 ?>