<?php require ('./includes/funkc.php'); ?>
<?php require ('./includes/auth.php');

if($loged_in){
    header("Location: Inventorizacija.php");
}

?> 

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
                <div class="card-header bg-dark text-light">Prisijungti</div>
                <div class="m-2">
                    <form method="POST" action="">
                        <input type="hidden" name="login" value="1"/>
                        <div class="mb-3">
                            <label for="LogInEmail" class="form-label">Login</label>
                            <input type="email" name="email" class="form-control" id="LogInEmail">
                        </div>
                        <div class="mb-3">
                            <label for="LogInPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="LogInPassword">
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>