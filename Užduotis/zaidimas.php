<!-- Suprogramuokite žaidimą. 
//Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo 
//vardus ir mygtuku “pradėti”. 

Šone yra rodomas žaidėjų rezultatas.

//Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”.
Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda 
prie žaidėjo rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu 
(parodo kieno eilė “mesti kauliuką”). 

Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. 
Tada parodomas pranešimas apie laimėjimą ir vėl 
leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo. -->
<?php
// print_r($_POST['zaidejas1'])
$zaidejas1 = '';
$zaidejas2 = '';
$eile = 0;
$eileV = 0;
$rezultatasZ1 = 0;
$rezultatasZ2 = 0;

if(isset($_POST['zaidejas1']) && trim($_POST['zaidejas1']) !== "") {
    $zaidejas1 = $_POST['zaidejas1'];
}else {
   echo 'Įveskite Žaidėjo 1 vardą'; 
    //    $errors[] = "Įveskite Žaidėjo 1 vardą";
}
if(isset($_POST['zaidejas2']) && trim($_POST['zaidejas2']) !== "") {
    $zaidejas2 = $_POST['zaidejas2'];
}else {
   echo 'Įveskite Žaidėjo 2 vardą'; 
    //    $errors[] = "Įveskite Žaidėjo 1 vardą";
}

//tikrina kas mes primas
if(isset($_POST['eile']) && is_numeric($_POST['eile'])){
    $eile = $_POST['eile'];
}

//rezultato skaičiavimas
if(isset($_POST['rezultatasZ1']) && is_numeric($_POST['rezultatasZ1'])){
    $rezultatasZ1 = $_POST['rezultatasZ1'];
    if($eile == 1){
        //generuoja kiek išmetė kauliukų
        $rezultatasZ1 += rand(1,6);
    }
}

if(isset($_POST['rezultatasZ2']) && is_numeric($_POST['rezultatasZ2'])){
    $rezultatasZ2 = $_POST['rezultatasZ2'];
    if($eile == 2){
        //generuoja kiek išmetė kauliukų
        $rezultatasZ2 += rand(1,6);
    }
}
if(isset($_POST[$zaidejas1]) && $_POST[$zaidejas1] == "Mesti kauliuką"){
    $eile = 2;
}
if(isset($_POST[$zaidejas2]) && $_POST[$zaidejas2] == "Mesti kauliuką"){
    $eile = 1;
}

// print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauliukų žaidimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-light">
    <?php if($rezultatasZ1 >= 30 || $rezultatasZ2 >= 30) : ?>
            <!-- WIN Screen -->
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class=" justify-content-center">
                    <div class=" justify-content-center">
                        <div class="d-flex">
                            <span class="fs-2">Sveikinu laimėjo <?php echo (($rezultatasZ1 > $rezultatasZ2) ? $zaidejas1 : $zaidejas2); ?>!</span>
                        </div>
<!-- KODEL NEISEINA JO CENTRUOTI?????????? -->
                        <a class="w-20 btn btn-primary btn-md" href="zaidimas.php">Žaisti iš naujo</a>
                        
                    </div>
                </div>
            </div>
    <?php else: ?>
    <div class="d-flex justify-content-between">
        <!-- Game login -->
        <?php if(!$zaidejas1 && !$zaidejas2) : ?>
            <div class="d-flex m-4 ">
                <form method="POST">
                <span class="text-dark text-decoration-none fs-5">Įveskite žaidėjų vardus</span>
                    <div class="input-group mb-3 mt-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Žaidėjo 1 vardas</span>
                        </div>
                        <input type="text" class="form-control" name="zaidejas1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Žaidėjo 2 vardas</span>
                        </div>
                        <input type="text" class="form-control" name="zaidejas2">
                    </div>
                    <div>
                    <input type="hidden" name="eile" value="<?php echo rand(1,2); ?>">
                    <input class="w-20 btn btn-primary btn-md" type="submit" name="Pradėti">
                    </div>
                </form>
            </div>
        <?php else: ?>
            <!-- Žaidimo metimai -->
            <div class="d-flex m-4 ">
                <form method="POST"> 
                    <div>
                        <span class="fs-6"><?php echo ($eile == 1 ? $zaidejas1 : $zaidejas2) ?></span>
                        <input type="hidden" name="zaidejas1" value="<?php echo $zaidejas1; ?>">
                        <input type="hidden" name="zaidejas2" value="<?php echo $zaidejas2; ?>">
                        <input type="hidden" name="eile" value="<?php echo $eile; ?>">
                        <input type="hidden" name="rezultatasZ1" value="<?php echo $rezultatasZ1;?>">
                        <input type="hidden" name="rezultatasZ2" value="<?php echo $rezultatasZ2;?>">    
                        <input type="submit" class="w-15 btn btn-primary btn-md" 
                        name="<?php echo ($eile == 1 ? $zaidejas1 : $zaidejas2) ?>" 
                        value="Mesti kauliuką"/>
                    </div>
                </form>
            </div> 
        <?php endif; ?> 
        <!-- Sidebar Rezultatai -->
        <div class="d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark " style="width: 280px; height: 100vh;">
                <div class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5">Žaidimo rezultatas</span>
                </div>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item pb-2">
                    <span class="fs-5">Metimo eiliškumas</span>
                </li>
                <?php if($eile == 2) : ?>
                    <li class="nav-item">
                        <span class="badge bg-primary rounded-pill"><?php echo $rezultatasZ2 ?></span>
                        <span class="fs-6"><?php echo $zaidejas2?></span>
                    </li>
                <?php endif; ?>
                <?php if($eile == 1 || $eile == 2) : ?>    
                <li class="nav-item">
                    <span class="badge bg-primary rounded-pill"><?php echo $rezultatasZ1 ?></span>
                    <span class="fs-6"><?php echo $zaidejas1?></span>
                </li>
                <?php endif; ?> 
                <?php if($eile == 1) : ?>
                    <li class="nav-item">
                        <span class="badge bg-primary rounded-pill"><?php echo $rezultatasZ2 ?></span>
                        <span class="fs-6"><?php echo $zaidejas2?></span>
                    </li>
                <?php endif; ?> 
                </ul>
                <hr>
                <a class="w-20 btn btn-primary btn-md" href="zaidimas.php">Reset</a>
            </div>
        </div>
    </div>
    <?php endif; ?> 
</body>
</html>
