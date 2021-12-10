<?php 
require ('sessions.php'); 
// unset($_SESSION['logged_in']);

// Login php kodas

//hardcoded login credentials
$auth = [
    'login' => 'admin@php.lt',
    'password' => 'labas1234'
];

$loged_in = false;
$loged_out = false;

//patikrina ar hidden input sutampa reikšmė
if(is_param_equal($_POST, 'login', 1)){
    echo "pandom Prisijungti";

    //patikrina ar paduodamas yra email "standartiniu email formatu"
    if( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        echo "el paštas yra įvestas";

        //tikrina ar paštas sutampa su hardcoded paštu
        if( $_POST['email'] == $auth['login']){
            echo "el paštas taisingas";

            //tikrina ar slaptažodis įvestas ir ar prisijungimas toks kaip hardcoded
            if( isset($_POST['password']) && md5($_POST['password']) == md5($auth['password']) ){
                //Jeigu viską praeina tada priskiria Cookie 
                $_SESSION['logged_in'] = true;
                $_SESSION['user'] = $auth['login'];
            }
        }
    }
}
//Tikrina ar sesija sukurta ir 
if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in']) {
    $loged_in = true;

    
}

//logout php kodas

//tikrina ar Input paspaustas
if(isset($_POST['logout'])) {
    //atjungia logged in cookie
    unset($_SESSION['logged_in']);
    //nukreipia į login puslapį
    $loged_out = true;
}

?>
