<?php 
require ('./includes/funk.php');
require ('./includes/auth.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/custom.css" rel="stylesheet">
</head>
<body class="mt-5 ">
<div class="container-lg ">
    <div class="target_margin row d-flex justify-content-between bg-white rounded">
        <div class="d-none d-md-block col-md-4 mx-auto d-flex align-items-center text-center">
            <img src="./assets/images/img-02.png" >
        </div>
        <div class="col-md-6 m-3 d-flex align-items-center">
            <div class="col-12 ">
            <?php 
            include("./includes/alerts.php");
            ?>
                <div class="card-header bg-dark text-light rounded">Registruoti naują vartotoją</div>
                <div class=" m-2">
                    <form method="POST" action="">
                    <div class="mb-3">
                            <label for="LogInname" class="form-label">Vartotojo vardas</label>
                            <input type="name" name="user[name]" class="form-control" id="LogInname">
                        </div>
                    <div class="mb-3">
                            <label for="LogInsurname" class="form-label">Vartotojo pavardė</label>
                            <input type="surname" name="user[surname]" class="form-control" id="LogInsurname">
                        </div>
                        <div class="mb-3">
                            <label for="LogInEmail" class="form-label">Prisijungimo paštas</label>
                            <input type="email" name="user[email]" class="form-control" id="LogInEmail">
                        </div>
                        <div class="mb-3">
                            <label for="LogInPassword" class="form-label">Slaptažodis</label>
                            <input type="password" name="user[password]" class="form-control" id="LogInPassword">
                        </div>
                        <button type="submit" class="btn grn_button" >Sukurti</button>
                        <a href="./Login.php" class="ms-4">Prisijungti</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>