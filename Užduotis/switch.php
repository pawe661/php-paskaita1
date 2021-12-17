<?php

    if(isset($_GET['submit'])){
        if(!empty($_GET['pets'])) {
            $selected = $_GET['pets'];
            
            switch($selected){
                case "dog" :
                    echo 'Buvo pasirinktas šuo';
                break;
            
                case "cat" :
                    echo 'Buvo pasirinkta katė';
                break;
            
                case "hamster" :
                    echo 'buvo pasirinktas žiurkėnas';
                break;
            
                case "parrot" :
                    echo 'Buvo pasirinkta Papūga';
                break;
            
                case "spider" :
                    echo 'pasirinktas šuo';
                break;
            
                case "goldfish" :
                    echo 'Buvo pasirinktas žuvytė';
            
            }
        }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="GET">
    <label for="pet-select">Choose a pet:</label>

    <select name="pets" id="pet-select">
        <option value="">--Please choose an option--</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="hamster">Hamster</option>
        <option value="parrot">Parrot</option>
        <option value="spider">Spider</option>
        <option value="goldfish">Goldfish</option>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
</form>
</body>
</html>