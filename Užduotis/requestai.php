<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paprasta aplikacija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    //$_GET
    //$_POST
    //echo '<pre>';
    //print_r($_GET);
    //Sumuojame perduodamas reiksmes

    if( isset($_GET['skaicius']) AND is_array($_GET['skaicius']) ) {

        $suma = 0;

        foreach($_GET['skaicius'] as $skaicius) {
            
            if(is_numeric($skaicius)) {
                $suma += $skaicius;
            }

        }

        echo 'Gautas rezultatas is visu laukeliu yra: ' . $suma;

    }

?>

<form method="GET" action="">
    <?php 
        for($i = 0; $i < 10; $i++) : 
        $pavadinimas = $_GET['prekes'][$i]['prekes_pavadinimas'];
        $skaicius = $_GET['prekes'][$i]['skaicius'];
    ?>
    <p> 
        <input type="text" name="prekes[<?php echo $i; ?>][prekes_pavadinimas]" value="<?php echo $pavadinimas; ?>"/>
        <input type="number" name="prekes[<?php echo $i; ?>][skaicius]" value="<?php echo $skaicius; ?>" />
    </p>
    <?php endfor; ?>

    <button type="submit">Siusti</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>