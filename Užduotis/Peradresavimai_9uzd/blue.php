<?php

if(isset($_GET['link']) && $_GET['link']){
header("Location: red.php");;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:blue">
    <!-- Čia href paduoda Get parametrą link su reikšme true -->
    <a href="blue.php?link=true" class="w-15 m-2 btn btn-dark btn-sm border border-light"  >Linkas į save</a> 
</body>
</html>