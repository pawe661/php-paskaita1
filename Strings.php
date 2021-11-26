<?php
    echo '<h1>Funkcijos stringams apdoroti</h1>';

    //Funkcijos stringams apdoroti

    //strlen(string) - Ši funkcija grąžina stringo ilgį
    //trim() - Pašalina empty space simbolius iš stringo priekio ir galo
    //str_replace() Sukeicia norimus simbolius, pasirinktais
    //strtoupper() - Pavercia teksta didziosiomis raidemis
    //strtolower() - Pavercia teksta mazosiomis raidemis
    //str_repeat() - Pakartoja teksta pasirinkta kieki kartu
    //strip_tags() - Pasalina html tag'us is teksto

    $stringas = ' Labas vakaras ';
    $stringas2 = 'Gera diena';
    $stringas3 = 'Tekstas turintis <br />';

    echo $stringas . '<br />';
    echo strlen($stringas) . '<br />';
    echo trim($stringas) . '<br />';
    
    $replaced_string = str_replace('Labas', 'Viso gero', $stringas);
    
    echo $replaced_string . '<br />';

    $replaced_string = str_replace(' ', '', $stringas);
    
    echo strlen($replaced_string) . '<br />';

    echo strtoupper($stringas) . '<br />';

    echo strtolower($stringas) . '<br />';

    echo substr($stringas2, 0, -(strlen($stringas2) - 3)) . '<br />';

    echo str_repeat($stringas, 5) . '<br />';

    echo strip_tags($stringas3) . '<br />';

    echo strpos($stringas2, 'a');
?>

<br><br>

<?php

$CelebName1 = 'Robin Williams';
$CelebName2 = 'Bill Murray';

if(strlen($CelebName1) < strlen($CelebName2)){
    echo $CelebName1;
} else{
    echo $CelebName2;
}
?>
<br><br>

<?php
$CelebName1 = 'Robin Williams';
$CelebName2 = 'Bill Murray';

$pieces = explode(' ', $CelebName1);
$CelebName1Edit2 = strtoupper(array_pop($pieces));
$CelebName1Edit = strtolower (strtok($CelebName1, " "));
// $CelebName1Edit = strtoupper(strtok($CelebName1, " "));
echo $CelebName1Edit . $CelebName1Edit2;

?>

<br><br>

<!-- Atrinti pirmą raidę -->
<?php
$CelebName1 = 'Robin Williams';
$CelebName2 = 'Bill Murray';
$string3 = explode(" ", "$CelebName1 $CelebName2");
$acronym = "";

foreach ($string3 as $w) {
  $acronym .= $w[0];
}
echo $acronym;

?>
<!-- Atrinkti paskutinę raidę -->
<br><br>
<?php
$CelebName1 = 'Robin Williams';
$CelebName2 = 'Bill Murray';

$string4 = explode(" ", "$CelebName1 $CelebName2");
$acronym = "";

foreach ($string3 as $w) {
  $acronym .= $w[-1];
}
echo $acronym;
?>

<!-- Pakeisti visas A į star -->
<br><br>
<?php
$america = 'An American in Paris';
$star = '*';

echo str_replace(['a', 'A'], $star, $america);

?>
<!-- Paskaičiuoti visas a -->
<br><br>
<?php
$america2 = 'An American in Paris';
$america2 = strtolower($america2);

$acount = substr_count($america2, 'a');
echo $acount .'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';

?>

<!-- be balsiu  -->
<br><br>
<?php
$america = 'An American in Paris';
$breakfast = "Breakfast at Tiffany's"; 
$space = "2001: A Space Odyssey";
$life = "It's a Wonderful Life";
echo str_replace(['a','e','i','o','u','A','E','I','O','U'], '', $america). '<br />';
echo str_replace(['a','e','i','o','u','A','E','I','O','U'], '', $breakfast). '<br />';
echo str_replace(['a','e','i','o','u','A','E','I','O','U'], '', $space). '<br />';
echo str_replace(['a','e','i','o','u','A','E','I','O','U'], '', $life). '<br />';

//arba galima su preg_replace//


?>

<!-- rasti episodo numerį  -->
<br><br>
<?php
$movie = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'. '<br />';

echo $movie;
$int = (int) filter_var($movie, FILTER_SANITIZE_NUMBER_INT);
echo $int;

// na arba visada galima str_replace pradžia ir galą su tusčiais ir lieka tik skaičius ...

?>

<!-- Kiek žodžių trumpesnių negu 5 raidės -->
<br><br>
<?php
$string2 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$counter = 0;
$words = explode(' ', $string2);
$wordcounter = 0;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;
if (strlen($words[$wordcounter]) <6)
$counter++;
$wordcounter++;



$stringlt = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$counterlt = 0;
$wordslt = explode(' ', $string2);
$wordcounterlt = 0;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++;
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++; 
if (strlen($wordslt[$wordcounterlt]) <6)
  $counterlt++;
  $wordcounterlt++; 

echo 'eng zodis'.  $counter . '<br />';
echo 'lt zodis' . $counterlt.  '<br />';


?>
<br><br>

<?php
$lotstring = 'abcdefghijklmnopqrstuvwxyz';
$rndstring = substr(str_shuffle($lotstring),0, 3);

echo $rndstring;
?>


<br><br>

<?php
$stringlong ="Tik nereikia gąsdinti Pietų Centro geriant sultis pas save kvartale Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$wordsforrnd = explode(' ', $stringlong);

$rnd_array = array($wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)], $wordsforrnd[rand(0,23)],);

$unique = array_unique($rnd_array);

if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}
if (count($unique) < 10){
  array_push($unique, $wordsforrnd[rand(0,23)],);
}else {
  echo implode( ", ", $unique);
}

echo '<br />';
echo count($unique) . "<br>";

$stringlong2 ="Tik nereikia gąsdinti Pietų Centro geriant sultis pas save kvartale Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$wordsforrnd2 = explode(' ', $stringlong2);
$rand_keys = array_rand($wordsforrnd2, 10);

echo $wordsforrnd2[$rand_keys[0]] .', '. $wordsforrnd2[$rand_keys[1]] .', '.$wordsforrnd2[$rand_keys[2]] .', '.$wordsforrnd2[$rand_keys[3]] .', '.$wordsforrnd2[$rand_keys[4]] .', '.$wordsforrnd2[$rand_keys[5]] .', '.$wordsforrnd2[$rand_keys[6]] .', '.$wordsforrnd2[$rand_keys[7]] .', '.$wordsforrnd2[$rand_keys[8]] .', '.$wordsforrnd2[$rand_keys[9]];

?>
<br> <br>
