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





<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Register</div>
            <div class="m-2">
                <table class="table text-start ">
                    <thead>
                        <th>Prekių Pavadinimas</th>
                        <th>Prekių Kiekis</th>
                    </thead>
                    <tbody>


                
                <?php
                    ini_set('display_errors', true);
                    error_reporting(E_ALL);
                    //$_GET
                    //$_POST
                    //echo '<pre>';
                    //print_r($_GET);
                    //Sumuojame perduodamas reiksmes

                    if( isset($_GET['prekes']) AND is_array($_GET['prekes'])
                        AND count($_GET['prekes']) > 0 ) :

                        $suma = 0;

                        foreach($_GET['prekes'] as $preke) {
                            if(is_array($preke)){
                                if($preke['prekes_pavadinimas'] != '' 
                                    AND $preke['skaicius'] != ''){
                            ?>
                                <tr>
                                    <td> <?php echo $preke['prekes_pavadinimas']; ?></td>
                                    <td> <?php echo $preke['skaicius']; ?></td>
                                </tr>
                            <?php
                                }
                                if(is_numeric($preke['skaicius'])){
                                    $suma += $preke['skaicius'];
                                }
                            }
                            // print_r($preke);
                            // if(is_numeric($preke)) {
                            //     $suma += $preke;
                            // }

                        }

                        echo 'Gautas rezultatas is visu laukeliu yra: ' . $suma;
                    ?> 
                        </tbody>
                    </table>
            </div>
                    <?php endif ?>

                            <form method="GET" action="">
                        <div class="row g-3 p-2">

                            <?php 
                                for($i = 0; $i < 10; $i++) : 
                                
                                $pavadinimas = "";
                                $skaicius    = ""; 

                                if(isset($_GET['prekes'][$i]['prekes_pavadinimas'])) {
                                    $pavadinimas = $_GET['prekes'][$i]['prekes_pavadinimas'];
                                }

                                if(isset($_GET['prekes'][$i]['skaicius'])) {
                                    $skaicius = $_GET['prekes'][$i]['skaicius'];
                                }
                            ?>

                            <div class="col-sm-9">
                                <label class="form-label">Prekės pavadinimas</label>
                                <input type="text" class="form-control" 
                                name="prekes[<?php echo $i; ?>][prekes_pavadinimas]" 
                                value="<?php echo $pavadinimas; ?>" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Prekių kiekis</label>
                                <input type="number" name="prekes[<?php echo $i; ?>][skaicius]" 
                                class="form-control" value="<?php echo $skaicius; ?>" />
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