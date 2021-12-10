<?php

$kintamasis = 'Test tekstas rodomas čia';

echo $kintamasis . 'Papildomai rodomas tekstas';

$x = 2;
$y = 4;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo ($x * $y) . "<br>";
echo ($x / $y) . "<br>";

echo "Today is " . date('Y-M-d') . "<br>";
echo "Time is ". date("H:i") . "<br>" . "<br>";
?>

<!-- Darant su method="GET" užtenka taip -->
<?php
if(isset($_POST['input1']) && isset($_POST['input2'])) {
    $x = rand(1, 20);
    echo 'Rnd skaičius yra ' .$x . "<br>";
    echo 'Pliusuojam + ' . ($_POST['input1'] + $_POST['input2'] + $x) . "<br>";
    echo "Minusuojam - " . ($_POST['input1'] - $_POST['input2'] - $x) . "<br>";
    echo "Dauginam * " . ($_POST['input1'] * $_POST['input2'] * $x) . "<br>";
    echo "Dalinam / " . ($_POST['input1'] / $_POST['input2'] / $x) . "<br>";
}
?>
<form method="POST">
    <input class="Input1" type="number" name="input1" value="2">
    <input class="Input2" type="number" name="input2" value="2">
    <button type="submit">Submit su GET</button>
</form>

<!-- Darbas su random skaičiais -->

<?php
//      be 0           ////
$x = rand(1, 4);
$y = rand(1, 4);

echo 'x yra ' . $x . "<br>";
echo 'y yra ' . $y . "<br>";

if($x>$y){
    echo 'x yra didesnis' . "<br>";
    if (floor($x / $y) == ($x / $y)){
        echo 'padalinus x/y ' . ($x / $y) . "<br>";
    } else {
        echo 'suapvalinus iki 2 po kablelio ' . number_format((float)($x / $y), 2, '.', '') . "<br>";
    }
} else {
    echo 'y yra didesnis' . "<br>";
    if (floor($y / $x) == ($y / $x)){
        echo 'padalinus y/x ' . ($y / $x) . "<br>";;
    } else {
        echo 'suapvalinus iki 2 po kablelio ' . number_format((float)($y / $x), 2, '.', '') . "<br>";
    }
}
?>

<br><br>

<?php
//      be 0           ////
$x = rand(0, 4);
$y = rand(0, 4);

echo 'x yra ' . $x . "<br>";
echo 'y yra ' . $y . "<br>";


if ($x == 0 || $y == 0) {
    echo "X arba Y yra 0";
} else {
    if($x>$y){
        echo 'x yra didesnis' . "<br>";
        if (floor($x / $y) == ($x / $y)){
            echo 'padalinus x/y ' . ($x / $y) . "<br>";
        } else {
            echo 'suapvalinus iki 2 po kablelio ' . number_format((float)($x / $y), 2, '.', '') . "<br>";
        }
    } else {
        echo 'y yra didesnis' . "<br>";
        if (floor($y / $x) == ($y / $x)){
            echo 'padalinus y/x ' . ($y / $x) . "<br>";
        } else {
            echo 'suapvalinus iki 2 po kablelio ' . number_format((float)($y / $x), 2, '.', '') . "<br>";
        }
    }
}
?>

<br><br>

<!-- Ar trikampis lygiakraštis -->
<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a == $b || $b == $c || $c == $a ){
    echo 'taip';
} else {
    echo 'ne';
}
?>
<br><br>

<!--  -->
<?php

$name = 'gg';
$surname = 'gg';
$born = date_create("2013-03-15");
$today = date_create(date("Y/m/d"));

$age = date_diff($born, $today);
echo 'Aš esu ' . $name. ' ' . $surname . '. Man yra ' . $age ->format('%y') . ' metai';
?>


<br><br>
<!-- min.max funkcijos -->
<?php
$nr1 = rand(0, 25);
$nr2 = rand(0, 25);
$nr3 = rand(0, 25);

$number = (($nr1 + $nr2 + $nr3) - max($nr1, $nr2, $nr3) - min($nr1, $nr2, $nr3));

echo 'Rnd skaičiai yra ' . "$nr1, $nr2, $nr3" . "<br>";
echo 'Rnd vidurinė reikšmė yra yra ' . $number;

?>

<br><br>
<!-- Nuolaidos -->
<?php

$buy_number = rand(5,3000);

echo 'numirkta už ' . $buy_number . "<br>";

if ($buy_number > 1999){
    $discount_proc = 4;
}elseif ($buy_number > 999 && $buy_number < 2000){
    $discount_proc = 3;
}else{
    $discount_proc = 0;
}
    
$payed = $buy_number - ($buy_number * ($discount_proc/100));
if ($discount_proc > 0){
    echo 'Žvakių užsakymas už ' . $buy_number . " Pritaikyta $discount_proc% nuolaida. Sumokėta $payed";
} else {
    echo 'Žvakių užsakymas už ' . $buy_number . ' Užsakymo suma per maža todėl nuolaida netaikoma';
}
    
?>

<br><br>
<!-- Laiko skaičiavimas -->
<?php
$hour = rand(0,23);
$minute = rand(0,60);
$second = rand(0,60);
$add_time = rand(0,300);

$add_h_0 = $add_m_0 =$add_s_0 = $add_th_0 = $add_tm_0 = $add_ts_0 = null;

$time_second = $second + 0;
$time_minute = $minute + 0;
$time_hour = $hour + 0;

//padalina laiką į pilnus skaičius ir į dalis
$n = $add_time/60;
$whole = floor($n);      
$fraction = $n - $whole;
$time_minute = $minute + $whole;
$time_second = $second + ($fraction * 60);

//permeta laiką jeigu yra viršijamas laiko max
if ($time_second > 59){
    $time_second += - 60;
    $time_minute += + 1;
}
if ($time_minute > 59){
    $time_minute += - 60;
    $time_hour += + 1;
}
if ($time_hour > 23)
    $time_hour += - 23;


//jeigu yra tik vienas skaitmuo prideda 0 priešais
($hour < 10) ? ($add_h_0 = 0) : null;
($minute < 10) ? ($add_m_0 = 0) : null;
($second < 10) ? ($add_s_0 = 0) : null;
($time_hour < 10) ? ($add_th_0 = 0) : null;
($time_minute < 10) ? ($add_tm_0 = 0) : null;
($time_second < 10) ? ($add_ts_0 = 0) : null;

echo "Laikas yra $add_h_0$hour:$add_m_0$minute:$add_s_0$second" . "<br>";
echo "Laikas su papildomom sec $add_time yra $add_th_0$time_hour:$add_tm_0$time_minute:" . $add_ts_0 . ceil($time_second) . '<br>';

//patikrina ar gerai paskaičiuota ir niekur nepasimetė kokia sekundė ar dvi
$time1 = ($hour * 60 * 60) + ($minute * 60) + ($second) + $add_time;
$time2 = ($time_hour * 60 * 60) + ($time_minute * 60) + ($time_second);

if ($time1 == $time2){
    echo "Laikai sutampa!";
} else echo "ERROR";

?>

<br><br>
<!-- Skaičiaus įstatymas į <h6> -->
<?php
$h_tagas = rand(1,6);

echo "<h$h_tagas> Šis tekstas yra rašomas h $h_tagas dydžiu </h$h_tagas>";

?>

<br><br>
<!-- Skaičių rušiavimas nuo min iki max -->
<?php
$number1 = rand(1000,9999);
$number2 = rand(1000,9999);
$number3 = rand(1000,9999);
$number4 = rand(1000,9999);
$number5 = rand(1000,9999);
$number6 = rand(1000,9999);

$position1 = max($number1, $number2, $number3, $number4, $number5, $number6);
$position6 = min($number1, $number2, $number3, $number4, $number5, $number6);

if($number1 == $position1 || $number1 == $position6 )
    $number1 = null;
if($number2 == $position1 || $number1 == $position6 )
    $number2 = null;
if($number3 == $position1 || $number1 == $position6 )
    $number3 = null;
if($number4 == $position1 || $number1 == $position6 )
    $number4 = null;
if($number5 == $position1 || $number1 == $position6 )
    $number5 = null;
if($number6 == $position1 || $number1 == $position6 )
    $number6 = null;

$position2 = max($number1, $number2, $number3, $number4, $number5, $number6);

if($number1 == $position2 )
    $number1 = null;
if($number2 == $position2)
    $number2 = null;
if($number3 == $position2)
    $number3 = null;
if($number4 == $position2)
    $number4 = null;
if($number5 == $position2)
    $number5 = null;
if($number6 == $position2)
    $number6 = null;

$position3 = max($number1, $number2, $number3, $number4, $number5, $number6);

if($number1 == $position3)
    $number1 = null;
if($number2 == $position3)
    $number2 = null;
if($number3 == $position3)
    $number3 = null;
if($number4 == $position3)
    $number4 = null;
if($number5 == $position3)
    $number5 = null;
if($number6 == $position3)
    $number6 = null;

$position4 = max($number1, $number2, $number3, $number4, $number5, $number6);

if($number1 == $position4)
    $number1 = null;
if($number2 == $position4)
    $number2 = null;
if($number3 == $position4)
    $number3 = null;
if($number4 == $position4)
    $number4 = null;
if($number5 == $position4)
    $number5 = null;
if($number6 == $position4)
    $number6 = null;

$position5 = max($number1, $number2, $number3, $number4, $number5, $number6);

echo "From Max to Min $position1, $position2, $position3, $position4, $position5, $position6";
?>

