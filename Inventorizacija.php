<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paprasta aplikacija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-primary">





<div class="container bg-primary">
<div class="row justify-content-center">
                    <div class="col-md-12 mt-2 mb-2">
                        <div class="card">
                            <div class="card-header bg-dark text-light">Register</div>
            <div class="m-2">
            <?php
            //PHP visu zinuciu atvaizdavimui naudokite:
                ini_set('display_errors', true); 
                error_reporting(E_ALL);
                //tikrina ar value nustatyta ir ar yra array tada  atvaizduoja lentelę
                if( isset($_GET['prekes']) AND is_array($_GET['prekes'])
                            AND count($_GET['prekes']) > 0 ) :

                        $prekes = $_GET['prekes'];
            ?>
                <table class="table text-start ">
                    <thead>
                        <th>Prekių Pavadinimas</th>
                        <th>Prekių Kiekis</th>
                        <th>Prekių Kaina</th>
                    </thead>
                    <tbody>
                <?php
                        $kiekis = 0;
                        $suma = 0;
                        $nuolaida = "";

                    //generuoja lentelę
                        foreach($prekes as $preke) {
                            if(is_array($preke)){
                                if($preke['prekes_pavadinimas'] != '') {
                            ?>
                                <tr>
                                    <td> <?php echo $preke['prekes_pavadinimas']; ?></td>
                                    <td> <?php echo $preke['kiekis']; ?></td>
                                    <td> <?php echo $preke['kaina']; ?></td>
                                </tr>
                            <?php
                                }
                                if(is_numeric($preke['kiekis'])){
                                    $kiekis += $preke['kiekis'];
                                }
                                if( is_numeric($preke['kaina']) ) {
                                    $suma += $preke['kaina'];
                                }
                            }
                        }
                    //paskaičiuoja nuolaidą  
                        $nuolaida = isset($_GET['prekes']['prekes_nuolaida']) ? $_GET['prekes']['prekes_nuolaida'] : '';            
                            if($suma > 10){
                                if($nuolaida == "BLACKFIRDAY"){
                                    echo "Su kuponu BLACKFIRDAY 10% nuolaida <br />";
                                }elseif($nuolaida == "ACHILAS"){
                                    echo "Su kuponu BLACKFIRDAY 10% nuolaida <br />";
                                }elseif($nuolaida == "META"){
                                    echo "Su kuponu BLACKFIRDAY 10% nuolaida <br />";
                                }else{
                                    echo "Nuolaidos kodas netaisingas <br />";
                                }
                            }else{
                                echo "Nuolaida netaikoma <br />";
                            }
                        ?> 
                        <div class=" h4" >
                            <?php
                            echo 'Bendras prekių kiekis yra: ' .'<strong>'. $kiekis .'</strong> vnt.<br />';
                            echo 'Bendra prekių kaina yra: ' .'<strong>' . $suma . '</strong> eur.<br />';
                            ?> 
                        </div>
                        </tbody>
                    </table>
            </div>
                    <?php endif ?>
                        <!-- form paduoda METHOD kokiu budu bus perduodami duomenis -->
                         <form method="GET" action="">
                            <div class="row g-3 p-2 justify-content-center">
                                <!-- Dropdown list su rušiavimu -->
                                <!-- <div class="col-sm-8 ">
                                    <select name="rusiavimas" class="form-select">
                                        <option value="0">Pasirinkite rušiavimo būdą:</option>
                                        <option value="1">Rusiuoti pagal pavadinima</option>
                                        <option value="2">Rusiuoti pagal kieki</option>
                                    </select>
                                </div> -->

                           <!--Nuolaidos kodai  -->
                           <?php
                        //    $nuolaida = isset($_GET['prekes']['prekes_nuolaida']) ? $_GET['prekes']['prekes_nuolaida'] : '';
                                
                           ?>
                           <div class="col-sm-8 ">
                                    <label class="form-label">Įveskite nuolaidų kodą</label>
                                    <input type="text" class="form-control" 
                                    name="prekes[prekes_nuolaida]" 
                                    value="<?php echo $nuolaida; ?>" />
                                </div>
                            <?php 
                                //išsaugo reikšmes
                                for($i = 0; $i < 10; $i++) : 
                                
                                $pavadinimas = "";
                                $kiekis    = ""; 
                                $kaina = "";

                                $pavadinimas = isset($_GET['prekes'][$i]['prekes_pavadinimas']) ? $_GET['prekes'][$i]['prekes_pavadinimas'] : '';
                                $kaina = isset($_GET['prekes'][$i]['kaina']) ? $_GET['prekes'][$i]['kaina'] : '0';
                                $kiekis = isset($_GET['prekes'][$i]['kiekis']) ? $_GET['prekes'][$i]['kiekis'] : '0';
                            ?>

                            <div class="col-sm-8">
                                <label class="form-label">Prekės pavadinimas</label>
                                <input type="text" class="form-control" 
                                name="prekes[<?php echo $i; ?>][prekes_pavadinimas]" 
                                value="<?php echo $pavadinimas; ?>" />
                            </div>
                            <div class="col-sm">
                                <label class="form-label">Prekių kiekis</label>
                                <input type="number" name="prekes[<?php echo $i; ?>][kiekis]" 
                                class="form-control" value="<?php echo $kiekis; ?>" />
                            </div>
                            <div class="col-sm">
                                <label class="form-label">Prekių kaina</label>
                                <input type="number" name="prekes[<?php echo $i; ?>][kaina]" 
                                class="form-control" value="<?php echo $kaina; ?>" />
                            </div>

                            <?php endfor; ?>
                        </div>
                        <div class="m-2 mt-4 align-end">
                            <button class="w-20 btn btn-primary btn-lg" type="submit">Siųsti duomenis</button>
                        </div>
                    </form>
                        </div>
                                </div>
                         
                        </div>
                    </div>
                </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>