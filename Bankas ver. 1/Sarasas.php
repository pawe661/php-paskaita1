<?php
require ('./includes/funk.php');
require ('./includes/auth.php');

if($loged_out){
    header("Location: ./Login.php");
}

$acc_db = file_get_contents('./db/account_db.json');
$acc_db = json_decode($acc_db, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/custom.css" rel="stylesheet">
</head>

<body class="gradi_bg">
<?php 
    include("./includes/header.php");
?>
<div class="container-lg rounded">
  <div class="row justify-content-between bg-white  mt-5 rounded">
      <table class="table text-start bdr">
        <thead class=" bg-dark text-light ">
          <th>ID</th>
          <th>Sąskaitos numeris</th>
          <th>Vardas Pavardė</th>
          <th>Suma</th>
          <th></th>
        </thead>
        <tbody >    
        <?php
          foreach($acc_db as $id => $reiksme) :
        ?>
        <tr>
          <td> <?php echo $id ?>tttttttttttt</td>
          <td> <?php  ?></td>
          <td> <?php  ?></td>
          <td> <?php  ?></td>
          <td>
            <a href="" class="btn grn_button">Pridėti lėšų</a>
            <a href="" class="btn btn-primary">Nuskaičiuoti lėšas</a>
            <a href="" class="btn btn-danger">Ištrinti</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>