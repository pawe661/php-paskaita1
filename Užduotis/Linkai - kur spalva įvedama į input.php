<?php
// // $color_R = false;
// $color = 'bg-dark';
$color = 0;
if(isset($_GET['color'])){
    $color = $_GET['color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkai į save</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#<?php echo $color?>">
    <a class="w-15 btn btn-dark btn-sm border border-light m-2" href="./Linkai - kur spalva įvedama į url.php">Back 2 Black</a>
    <form method="GET" class=" m-2" action="">
        <input type="texr" name="color" value=""/>
        <input type="submit" class="w-15 btn btn-dark btn-sm border border-light " value="Submit">
    </form>
</body>
</html>