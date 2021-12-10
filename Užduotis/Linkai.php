<?php
$color_R = false;
$color = 'bg-dark';
if(isset($_GET['color']) && $_GET['color'] ==  1){
    $color_R = true;
}
    if($color_R){
        $color = 'bg-danger';
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
<body class="<?php echo $color?>">
    <a class="w-15 btn btn-dark btn-sm border border-light" href="./Linkai.php" >Black</a>
    <form method="GET" action="">
        <button type="submit" class="w-15 btn btn-dark btn-sm border border-light" name="color" value="1">Red</button>
    </form>
</body>
</html>