<?php
require ('./includes/funk.php');
require ('./includes/auth.php');

if($loged_out){
    header("Location: ./Login.php");
}

$acc_db = json_decode(file_get_contents('./db/account_db.json'), true);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lėšų papildymas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <div class="bg_img"></div>
        <div class="z_position">
            <?php 
                include("./includes/header.php");
            ?>
            <div class="container">
            <?php 
                include("./includes/alerts.php");
            ?>
            </div>
            <div class=" container-lg rounded ">
                <div class="row justify-content-between bg-white  mt-5 rounded">
                    <?php
                   
                if( isset($_GET['id']) && is_numeric($_GET['id']) ) :
                $acc = $acc_db[$_GET['id']];

            //Pinigų pridejimas prie esamos sąskaitos sumos
                if(isset($_POST['saskaita']) && saskaitos_exists($_POST['saskaita'])){
                    if(isset($_POST['saskaita']['iban']) && $_POST['saskaita']['iban'] == $acc['iban']){
                        if(isset($_POST['saskaita']['add_lesos']) && is_numeric($_POST['saskaita']['add_lesos']) && ($_POST['saskaita']['add_lesos'] > 0)){
        
                            $acc_db[$_GET['id']]['pinigai'] += $_POST['saskaita']['add_lesos'];

                            $json = json_encode($acc_db);
                        
                            //tikrina ar sekmingai įrašyta į db
                            if( file_put_contents('./db/account_db.json', $json)) {
                                header('Location: ./Prideti_Lesas.php?status=1.4');
                            }else {
                                header('Location: ./Prideti_Lesas.php?status=2.4');

                            }
//Reikia surašyti alerts visiem šitiem
                        }
                    }
                }
                ?>
                <form class="m-2 mt-5 mb-5 " method="POST" action="">
                    <div class="row mt-3 me-2 ">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> ID sistemoje</p>
                        </div>
                        <div class="col-1 mb-3 rounded ">
                            <input class="form-control text-center" type="text" value="<?php echo $_GET['id']; ?>" name="saskaita[id]" readonly>
                        </div>
                    
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Savininko Vardas Pavardė</p>
                        </div>
                        <div class="col-4 mb-3 rounded">
                            <input class="form-control" type="text" value="<?php echo $acc['vardas'] . ' ' . $acc['pavarde']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3 me-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Sąskaitos numeris</p>
                        </div>
                        <div class="col-7 mb-3 rounded">
                            <input class="form-control" type="text" value="<?php echo $acc['iban']; ?>" name="saskaita[iban]" readonly>
                        </div>
                    </div>
                    <div class="row mt-3 me-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Sąskaitos likutis</p>
                        </div>
                        <div class="col-7 mb-3 rounded">
                            <input class="form-control" type="text" value="<?php echo $acc['pinigai']; ?>"  readonly>
                        </div>
                    </div>
                    <div class="row mt-1 me-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 mb-3 rounded">
                            <p class="fw-bold text-center"> Pridėti lėšas</p>
                        </div>
                        <div class="col-7 mb-3">
                            <input type="text" class="form-control" id="prid-lesas" name="saskaita[add_lesos]">
                        </div>
                    </div>
                    <div class="row mt-3 me-2">
                        <div class="col-md-3"></div>
                        <button type="submit" class="col-2 btn btn-md grn_button ms-2 " >Submit</button>
                    </div>
                </form>
        <!-- Paieška pagal IBAN -->
                <?php else :
                    if( isset($_POST['iban']) && strlen($_POST['iban']) == 20){
                
                        $db_key = array_search($_POST['iban'], email_exists($acc_db, $_POST['iban'],'iban'));
                        header("Location: ./Prideti_Lesas.php?id=$db_key");

                    }elseif(isset($_POST['iban'])){
                        $_POST = [];
                        header('Location: ./Prideti_Lesas.php?status=3.4');
                    }
                    ?>
                    
                    <form class="m-2 mt-5 mb-5 " method="POST" action="">
                    <div class=" row justify-content-center mt-1 me-2">
                        
                        <div class="col-4 mb-3 rounded">
                            <p class="fw-bold text-center"> Įveskite sąskaitos numerį</p>
                            <input type="text" class="form-control" id="iban" name="iban">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3 ">
                        <button type="submit" class="col-2 btn btn-md grn_button " >Submit</button>
                    </div>
                </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>