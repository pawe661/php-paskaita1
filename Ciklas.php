<?php

// Ciklai

$array = 0;

while($array< 10){
    echo $array;
    $array++;

}




?>
<br> <br>

<p style="overflow-wrap: anywhere">
<?php

$star = '*';
$star_count = 0;


// 400 zvaigzduciu vienoj linijoj //
while(++$star_count < 400){
    echo $star;
}
echo "<br><br>";
for($star_count = 0; $star_count < 400; $star_count++){
    echo $star;
}


$star_count = 0;
$line_count = 0;
echo '<br> <br>';
// zvaigzdutes po 50 //
while($star_count < 50 && $line_count < 8){
    echo $star;
    $star_count++;
        if ($star_count > 49){
        $star_count = 0;
        echo "<br>";
        $line_count++;
    }
}

echo "<br><br>";

$star_count = 0;
$line_count = 0;
echo '<br> <br>';
while($line_count < 8){
    echo $star;
    $star_count++;
        if ($star_count > 49){
        $star_count = 0;
        echo "<br>";
        $line_count++;
    }
}

$i=1;
$x=400;
$string='*';
echo '<p>';
while ($i<=$x) {
    if ($i % 50 == 0) {
        echo $string;
        $string = '';
        echo '<br/>';
    }
    $string .= '*';
    $i++;
}
    echo '</p>';
    
?>
</p>

<?php
$randcounter = 0;
$numbercounter =0;

while ($randcounter < 300){
     $randnr = rand(0, 300);
        if ($randnr > 150){
            $numbercounter++;
        }
        if($randnr > 275){
            echo '<span style="color:red;">'. $randnr . ' ' . '</span>';
        }else  echo $randnr . " ";
    $randcounter++;
}

echo "<br> Didesnių negu 150 skaičių yra $numbercounter";

echo '<br> <br>';
$numbercounter2 = 0;
$randnr2 = 0;
for ($randcounter2 = 0; $randcounter2 < 300; $randnr2 = rand(0, 300), $randcounter2++){
    if ($randnr2 < 150) {
        echo $randnr2 . " ";
        } elseif ($randnr2 < 275) {
            echo $randnr2 . " ";
            $numbercounter2++;
        } else {
            echo '<span style="color:red;">'. $randnr2 . ' ' . '</span>';;
        }    
}

echo "<br> Didesnių negu 150 skaičių yra $numbercounter2";
?>
<br><br>

<p style="overflow-wrap: anywhere">

<?php
$skaiciavimas = 0;
$first = true;

while ($skaiciavimas < 3000){
    if ($skaiciavimas % 77 == 0){
        if ($first){
            echo $skaiciavimas;
            $first = false;
        }else{
            echo ", " . $skaiciavimas;
        }
    }
    $skaiciavimas++;
}
?>

</p>



<br><br>

<link rel="stylesheet" type="text/css" href="Style.css">
<div style="line-height: 0.75">
   

        <?php
        // $starbox = '*';
        // $starboxcounter = 0;
        // $count = 0;

        // while($count < 729){
        //     $starboxcounter++;
        //     if($starboxcounter == 27){
        //         echo "$starbox <br>";
        //         $starboxcounter = 0;
        //     }else{
        //         echo "$starbox ";
        //     }
        //     $count++;
        // }
        ?>


<br><br>
<?php
        // $starbox = '*';
        // $starboxcounter = 0;
        // $count = 0;
        // $colorcount = 1;

        // while($count < 729){
        //     $starboxcounter++;
        //         if($starboxcounter == 27){
                    
                    
        //             if($colorcount == $starboxcounter){
        //                 echo '<span style="color:red">'. $starbox . ' ' . "</span>" . "</br>";
        //             }elseif($starboxcounter == (28 - $colorcount)){
        //                 echo '<span style="color:red">'. $starbox . ' ' . "</span>". "</br>";
        //                 $colorcount++;
        //             }
        //             else{
        //                 echo $starbox . "</br>";
        //                 $colorcount++;
        //             }

        //             $starboxcounter = 0;
        //         }else{
        //             if ($colorcount == $starboxcounter){
        //                 echo '<span style="color:red">'. $starbox . ' ' . "</span>";
        //             }elseif($starboxcounter == (28 - $colorcount)){
        //                 echo '<span style="color:red">'. $starbox . ' ' . "</span>";
        //             }
        //             else{
        //                 echo "$starbox ";
        //             }
        //         }
        //     $count++;
        // }
?>

</div>

<!-- <div id="container"> -->
  <!-- <div id="dummy"></div>
  <div id="element">
    some text
  </div>

// $n=100;
// echo '<p style=" line-height: 50%;">';
//    for ($i=1;$i<=$n;$i++) {
//         echo 'P';
//        for ($j=1;$j<=$n;$j++) {
//             echo 'S';
        //    if (($i==$j) || ($i+$j==$n+1) ) {
        //        echo '<span style="color: red">*</span>';
        //    } else {
        //        echo '*';
        //    }
//        }
//        echo '<br/>';
//    }
// echo '</p>';

?> -->

<br><br>
<!-- Ciklo sustabdymas metant monetą  -->
<!-- Ciklas sustoja po pirmo H -->
<?php
$ciklorun = true;
while($ciklorun){
    $moneta = rand(0,1);
    if($moneta == 0){
        echo 'H, ';
        $ciklorun = false;
    }else{
        echo 'S, ';
    }
}
?>
 
<br><br>
<!-- Ciklas sustoja tris kartus iškritus H -->
<?php
$ciklorun = true;
$hcounter = 0;
while($ciklorun){
    $moneta = rand(0,1);
    if($moneta == 0){
        echo 'H, ';
        $hcounter++;
    }else{
        echo 'S, ';
    }
    if($hcounter >= 3){
        $ciklorun = false;
    }
}
?>
 
<br><br>
<!-- Ciklas sustoja tris kartus IŠ EILĖS iškritus H -->
<?php
// $ciklorun = true;
$hcounter = 0;
$i = 0;
while(true){
    $moneta = rand(0,1);
    $i++;
    if($moneta == 0){
        echo 'H, ';
        $hcounter++;
    }else{
        echo 'S, ';
        $hcounter = 0;
    }
    if($hcounter >= 3){
        break;
    }
}

echo "Ciklų skaičius $i";
?>

<br><br>
<!-- Ciklas žaidimas su šaškem yra partijos ir bendras žaidimo score -->
<?php

$gamepetras = 0;
$gamekazys = 0;

while(true){
    $petras = rand(10,20);
    $kazys = rand(5,25);
    
    if ($petras == $kazys){
        echo "Petras surinko $petras taškų. Kazys surinko $kazys taškų. Lygiosios!!!!!!!". "</br>";
    }elseif ($petras > $kazys){
        echo "Petras surinko $petras taškų. Kazys surinko $kazys taškų. Partiją laimėjo: Petras su $petras taškų". "</br>";
    }else{
        echo "Petras surinko $petras taškų. Kazys surinko $kazys taškų. Partiją laimėjo: Kazys su $kazys taškų". "</br>";
    }

    $gamepetras += $petras;
    $gamekazys += $kazys;

    if ($gamepetras == $gamekazys && $gamekazys >= 222){
        echo "Abu žaidėjai surinko po $gamepetras taškų! Lygiosios!!! ";
        break;
    }
    if ($gamepetras >= 222 && $gamepetras > $gamekazys){
        echo "Žaidimą laimėjo Petras surinkęs $gamepetras taškų! ";
        break;
    }
    if ($gamekazys >= 222 && $gamepetras < $gamekazys){
        echo "Žaidimą laimėjo Kazys surinkęs $gamekazys taškų! ";
        break;
    }
}
?>

<!-- Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite 
pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“a) Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. 
Suskaičiuokite kiek reikia smūgių.
“b) Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, 
bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių. -->

<!-- Vinies ilgis 8.5cm (850mm) (pilnai sulenda į lentą). 
Vienas smūgis vinį įkala 5-20 mm
Suskaičiuokite kiek reikia smūgių.
-->
<br><br>
<!-- Ciklas vinies kalimas -->
<?php
$vinisIlgis = 85;
$smugiuN = 0;
$vinisGilisAll = 0;

for($sukaltuViniu = 0; $sukaltuViniu < 5; $sukaltuViniu++){ 
    for($vinisGilis = 0; $vinisGilis <= $vinisIlgis; $smugiuN++){
        $vinisGilis += rand (5,20);
    }
    $vinisGilisAll += $vinisGilis;
}
echo "MAŽI SMUGIAI Reikia $smugiuN smugių kad sukalti $sukaltuViniu vinis   </br>";

$smugiuN = 0;
$vinisGilisAll = 0;

for($sukaltuViniu = 0; $sukaltuViniu < 5; $sukaltuViniu++){ 
    for($vinisGilis = 0; $vinisGilis <= $vinisIlgis; $smugiuN++){
        if(rand(0,1)){
        }else
            $vinisGilis += rand (20,30);
    }
    $vinisGilisAll += $vinisGilis;
}
echo "DIDELI SMUGIAI Reikia $smugiuN smugių kad sukalti $sukaltuViniu vinis </br>";

?>

<br><br>
<!-- Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, 
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). 
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius 
(t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). 
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio. -->
<!-- Ciklas vinies kalimas -->
<?php

$rndArray = [];
$sk = null;
for($skaiciuKiekis = 0; $skaiciuKiekis <= 50; $sk = rand(1,200)){
    if (in_array($sk, $rndArray)){
    }else {
        $rndArray [] = $sk;
        $skaiciuKiekis++;
    }
}
echo "String nr.1 (50 vnt) " . implode(" ",$rndArray) . "<br><br>";


    // function is_prime_via_preg_expanded($number) {
    //     return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
    // }
    // foreach($rndArray as $num){
    //     if (is_prime_via_preg_expanded($num)) $rndArray2[] = $num;

    // }
    $rndArray2 = [];
        $p = true;
    $tikriniamasSK = 1;    
    foreach($rndArray as $num){
            $p = true;
            if ($num < 2) {
                // echo "0 ir 1 netinka <br>";
                $p = false; 
            }else{
                for ($tikriniamasSK = 2; $tikriniamasSK <= $num / 2; $tikriniamasSK++) {
                    //tas $num / 2 reikalingas kad nesidalintu iš savęs;
                    if ($num % $tikriniamasSK == 0) {
                        //tikrina ar dalinasi iš tikrinamo skaičiaus <br>";
                        $p = false;  
                    }
                }
                if($p == true){
                    $rndArray2[] = $num;
                    }
        }
 
    }
asort($rndArray2);
echo "String nr.2 (tik prime) " . implode(" ",$rndArray2);
?>

<!-- Rombas ir kvadratas iš * -->
<br><br>
<?php

$height = 21;
for($lines = 0; $lines < 21; $lines++){
    if($lines <= $height/2){ //top half
        for($space=$height; $space > $lines;$space--){
            echo '&nbsp;';
        }
        for($str=0;$str <= $lines;$str++){
            $y = rand(1,3);
            if($y == 1){
                echo '<span style="color:red;">'. "*" . '</span>';
            }elseif($y == 2){
                echo '<span style="color:green;">'. "*" . '</span>';
            }else {
                echo '<span style="color:blue;">'. "*" .  '</span>';
            }
        }
        echo "</br>" ;
    }else{ //bottom half
        for($space2=0;$space2 <= $lines;$space2++){
            echo '&nbsp;';
        }
        for($str2=$height; $str2 > $lines;$str2--){
                $y = rand(1,3);
                if($y == 1){
                    echo '<span style="color:red;">'. "*" . '</span>';
                }elseif($y == 2){
                    echo '<span style="color:green;">'. "*" . '</span>';
                }else {
                    echo '<span style="color:blue;">'. "*" .  '</span>';
                }
        }
        echo "</br>" ;
    }
}
?>



