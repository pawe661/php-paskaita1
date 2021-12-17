<?php

//tikrina ar POST egzistuoja
if( isset($_POST['prekes']) ) {
    if(
        $_POST['prekes']['prekes_pavadinimas'] != '' AND
        $_POST['prekes']['kaina'] != '' AND
        $_POST['prekes']['kiekis'] != ''
    ) {
        //užkrauna duomenys iš .json
        $db_file = file_get_contents('./db.json');
        $db = json_decode($db_file, true);

        $prekes = [$_POST['prekes']];
    
        if($db) {
            $prekes = array_merge($db, $prekes);
        }

        $json = json_encode($prekes);

        file_put_contents('./db.json', $json);

        echo "sucess";
        // header('Location: index.php?status=1');

    } else {
        echo "FAAAIL";
        // header('Location: index.php?status=2');

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentele</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <div class="container bg-primary">
        <div class="col-md-12 mt-2 mb-2">
            <div class="card">
                <div class="card-header bg-dark text-light">Register</div>
                    <div class="m-2">
                        <table class="table text-start ">
                            <thead>
                                <th>ID</th>
                                <th>Prekių Pavadinimas</th>
                                <th>Prekių Kiekis</th>
                                <th>Prekių Kaina</th>
                            </thead>
                            <tbody>
                            <?php
                                foreach($db as $id => $reiksme) :
                                ?>
                                <tr>
                                    <td> <?php echo $id ?></td>
                                    <td> <?php echo $prekes[$id]['prekes_pavadinimas']; ?></td>
                                    <td> <?php echo $prekes[$id]['kiekis']; ?></td>
                                    <td> <?php echo $prekes[$id]['kaina']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <form method="POST" action="">
                    <div class="row g-3 p-2 justify-content-center">
                        <div class="col-sm-8">
                            <label class="form-label">Prekės pavadinimas</label>
                            <input type="text" class="form-control" name="prekes[prekes_pavadinimas]" value="" />
                        </div>
                        <div class="col-sm">
                            <label class="form-label">Prekių kiekis</label>
                            <input type="number" name="prekes[kiekis]" class="form-control" value="" />
                        </div>
                        <div class="col-sm">
                            <label class="form-label">Prekių kaina</label>
                            <input type="number" name="prekes[kaina]" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="m-2 mt-4 align-end">
                                <button class="w-20 btn btn-primary btn-lg" type="submit">Siųsti duomenis</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>