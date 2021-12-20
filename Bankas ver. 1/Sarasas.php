<?php
require ('./includes/funk.php');
require ('./includes/auth.php');

if($loged_out){
    header("Location: ./Login.php");
}

//saskaitos trinimas
$acc_db = json_decode(file_get_contents('./db/account_db.json'), true);

if( isset($_GET['action']) AND $_GET['action'] == 'delete') {

  if( isset($_GET['id']) ) {

      $id = $_GET['id'];

      //patikrina ar sąskaitoj yra pinigų
      
      if(!$acc_db[$id]['pinigai'] > 0){

        unset($acc_db[$id]);

        if( file_put_contents( './db/account_db.json', json_encode($acc_db) ) ) {
            header('Location: ./Sarasas.php?status=1.3');
        } else {
            header('Location: ./Sarasas.php?status=2.3');
        } 
      }header('Location: ./Sarasas.php?status=3.3');
  }
}
//Rušiavimas

//PASTABA SU VISAIS ŠITAIS SORT KEIČIASI ID
if(isset($_GET['rusiavimas'])) {
  if($_GET['rusiavimas'] == 1) {
    ksort($acc_db);
  } 
  if($_GET['rusiavimas'] == 2) {
    $sort_by = array_column($acc_db, 'iban');
    array_multisort($sort_by, SORT_ASC, $acc_db);
  } 
  if($_GET['rusiavimas'] == 3) {
    $sort_by = array_column($acc_db, 'pavarde');
    array_multisort($sort_by, SORT_ASC, $acc_db);
  } 
  if($_GET['rusiavimas'] == 4) {
    $sort_by = array_column($acc_db, 'pinigai');
    array_multisort($sort_by, SORT_ASC, $acc_db);
  } 
}

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
    <div class=" container-lg rounded bg-white">
      <div class="row justify-content-between   mt-5 rounded">
          <div class="col-md-12 align-self-end pt-2 pb-2">
            <form method="GET" action="">
              <!-- Mygtuką reikėtų kažkaip į šoną įkišti -->
              <select name="rusiavimas" onchange="this.form.submit()" class="btn btn-white dropdown-toggle form-select">
                <option value="0">Pasirinkite rušiavimo būdą:</option>
                <option value="1">Rusiuoti pagal ID</option>
                <option value="2">Rusiuoti pagal IBAN</option>
                <option value="3">Rusiuoti pagal Pavardę</option>
                <option value="4">Rusiuoti pagal Sąskaitos sumą</option>
              </select>
              
            </form>
          </div>
          <table class="table text-start bdr">
            <thead class=" bg-dark text-light">
              <th class="text-center">ID</th>
              <th>Sąskaitos numeris</th>
              <th>Pavardė Vardas</th>
              <th >Suma</th>
              <th></th>
            </thead>
            <tbody >    
            <?php
              foreach($acc_db as $id => $reiksme) :
            ?>
            <tr >
              <td class="col-md-1 text-center"> <?php echo $id ?></td>
              <td class="col-md-3 "> <?php echo $reiksme['iban'] ?></td>
              <td class="col-md-3 "> <?php echo $reiksme['pavarde'] .' '. $reiksme['vardas']   ?></td>
              <td class="col-md-2"> <?php echo $reiksme['pinigai'] ?></td>
              <td class="col-md-5">
                <a href="../Bankas ver. 1/Prideti_Lesas.php?id=<?php echo $id; ?>" class="btn grn_button">Pridėti lėšų</a>
                <a href="../Bankas ver. 1/Nuskaiciuoti_Lesas.php?id=<?php echo $id; ?>" class="btn btn-primary">Nuskaičiuoti lėšas</a>
                <a href="./Sarasas.php?iban=delete&id=<?php echo $id; ?>" 
                  class="btn btn-danger">Ištrinti</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>