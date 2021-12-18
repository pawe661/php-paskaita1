<?php
    require ('./includes/funk.php');
    require ('./includes/auth.php');

if($loged_out){
    header("Location: ./Login.php");
}

$acc_db = file_get_contents('./db/account_db.json');
$acc_db = json_decode($acc_db, true);
                        


// IBAN kurimas
    $LT_banku_kodas = [30300,40100,21400,34900,34200,20900,31300,34100,70500,71800,71802,71803,71804,71805,71806,71807,71808,71809,71810,71811,71812,71813,71814,71815,71816,71817,71818,71819,71820,71821,71822,71823,71824,71825,71826,71827,71828,71829,71830,71899,70440,34700,37400,39807,51700,39804,90577,39806,32700,37000,32800,33500,71100,35000,22500,38500,37200,38800,60024,34000,73000,21200,39100,72900,36400,50200,50109,50114,50117,50121,50126,50129,50139,50144,50147,50162,50164,50500,32900,51400,50300,50301,50100,50101,50102,50103,50104,50105,50106,50108,50110,50111,50112,50113,50115,50118,50119,50120,50122,50123,50124,50125,50127,50128,50130,50131,50132,50133,50134,50135,50136,50138,50140,50145,50146,50149,50151,50152,50153,50154,50156,50159,50163,50165,50166,50167,50168,10100,10101,10110,10900,51500,37300,72300,35100,31100,35800,30500,21700,30800,34600,39805,21500,33800,38700,34300,31400,30200,22600,70700,39200,32500,39814,70701,37101,37100,31700,74000,33200,91002,30600,33700,31800,31801,31900,36900,32400,37800,39810,35400,39802,31000,36600,31500,35900,39801,36000,35200,34600,39808,39809,35500,35501,36700,32200,31200,35300,33300,34800,33400,30900,30901,91001,39600,35600,32300,38900,32600,74100,33900,30700,37500,50800,35700,31600,51900,50160,33100,32000,39812,33000];
    $new_acc_nr = '';
    $acc_nr = '';
    $check_number = '';

    for($i = 0; $i < 11; $i++) {
        $acc_nr .= mt_rand(0, 9);
    }
    for($i = 0; $i < 2; $i++) {
        $check_number .= mt_rand(0, 9);
    }

    $new_acc_nr = 'LT' .$check_number. $LT_banku_kodas[rand(0,sizeof($LT_banku_kodas) - 1)] 
    . $acc_nr ;


// validavimas pateiktų duomenų
    if(isset($_POST['saskaita']) && saskaitos_exists($_POST['saskaita'])){
        if( isset($_POST['saskaita']['vardas']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['saskaita']['vardas']) 
            && strlen($_POST['saskaita']['vardas']) > 3 ) {
            if( isset($_POST['saskaita']['pavarde']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['saskaita']['pavarde']) 
                && strlen($_POST['saskaita']['pavarde']) > 3 ) {
                if( isset($_POST['saskaita']['ak']) && is_numeric($_POST['saskaita']['ak'])
                    && strlen($_POST['saskaita']['ak']) == 11 && ak_unique($acc_db,$_POST['saskaita']['ak'])) {
                    if( isset($_POST['saskaita']['iban']) && strlen($_POST['saskaita']['iban']) == 20) {
    //Reikėtų dar sutikrinti ar sugeneruotas IBAN ir paduodamas į POST yra toks pat   
                        
                        //Nustato sąskaitos sumą
                        $_POST['saskaita']['pinigai'] = 0;
                        
                        
                        $new_saskaita = [$_POST['saskaita']];
                                
                        if($acc_db) {
                            $new_saskaita = array_merge($acc_db, $new_saskaita);
                        }
                       
                        $json = json_encode($new_saskaita);
                        
                        //tikrina ar sekmingai įrašyta į db
                        if( file_put_contents('./db/account_db.json', $json)) {
                            header('Location: ./Nauja_Saskaita.php?status=7');
                        }else {
                            header('Location: ./Nauja_Saskaita.php?status=6');
                        }
        
                    }else{
                        $_POST = [];
                        header('Location: ./Nauja_Saskaita.php?status=5');
                    }
                 }else{
                    $_POST = [];
                    header('Location: ./Nauja_Saskaita.php?status=4');
                 }
            }else{
                $_POST = [];
                header('Location: ./Nauja_Saskaita.php?status=3');
            }
        }else{
            $_POST = [];
            header('Location: ./Nauja_Saskaita.php?status=2');
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujos sąskaitos sukūrimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/custom.css" rel="stylesheet">
</head>
<body class="gradi_bg">
<div class="bg_img"></div>
    <div class="z_position">
        <?php 
            include("./includes/header.php");
        ?>
        <div class="container-lg rounded">
            <div class="row justify-content-between bg-white  mt-5 rounded ">
                <div class="card-header bg-dark text-light rounded">Naujos sąskaitos kūrimo forma</div>
                <?php 
                    include("./includes/alerts.php");
                ?>
                <form class="m-2 mt-5 mb-5" method="POST" action="">
                    <div class="row mt-1 me-2">
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Vardas Pavardė</p>
                        </div>
                        <div class="col-md-5 mb-3 rounded">
                            <input type="text" class="form-control" id="firstName" name="saskaita[vardas]" >
                            <label for="firstName" class="text-secondary">Vardas</label>
                        </div>
                        <div class="col-md-5 mb-3 rounded">
                            <input type="text" class="form-control" id="lastName" name="saskaita[pavarde]">
                            <label for="lastName" class="text-secondary">Pavardė</label>
                        </div>
                    </div>
                    <div class="row mt-1 me-2">
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Asmens kodas</p>
                        </div>
                        <div class="col mb-3">
                            <input type="text" class="form-control" id="ak-number" name="saskaita[ak]">
                        </div>
                    </div>
                    <div class="row mt-3 me-2">
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Sąskaitos numeris</p>
                        </div>
                        <div class="col mb-3 rounded">
                            <input class="form-control" type="text" value="<?php echo $new_acc_nr; ?>" name="saskaita[iban]" readonly>
                        </div>
                    </div>
                    <div class=" mt-3 me-2">
                        <button type="submit" class="btn btn-md grn_button ms-3 ps-5 pe-5 " >Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>