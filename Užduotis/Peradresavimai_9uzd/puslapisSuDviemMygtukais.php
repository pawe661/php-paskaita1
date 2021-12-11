<?php

if(isset($_GET['get'])){
    $color = '00FF00';
}
if(isset($_POST['post'])){
    $color = 'FFFF00';
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
<body style="background-color:#<?php echo $color?>">
    <form method="GET"  action="puslapisSuDviemMygtukais.php">
        <button type="submit" class="w-20 btn btn-dark  border border-light" name="get" value="">GET</button>
    </form>
    <form method="POST" action="">
        <button type="submit" class="w-20 btn btn-dark border border-light" name="post">POST</button>
    </form>
</body>
</html>