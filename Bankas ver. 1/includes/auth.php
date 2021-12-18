<?php 
require ('./includes/funk.php');


session_start();
unset($_SESSION['logged_in']);

//USER DB
$user_db = file_get_contents('./db/users.json');
$user_db = json_decode($user_db, true);

//Register php            

// validavimas pateiktų duomenų
    if(isset($_POST['user']) && saskaitos_exists($_POST['user'])){
        if( isset($_POST['user']['name']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['user']['name']) 
            && strlen($_POST['user']['name']) > 3 ) {
            if( isset($_POST['user']['surname']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['user']['surname']) 
                && strlen($_POST['user']['surname']) > 3 ) {
                if( isset($_POST['user']['email']) && filter_var($_POST['user']['email'], FILTER_VALIDATE_EMAIL) 
                    && ak_unique($user_db,$_POST['user']['email'])) {
                    if( isset($_POST['user']['password']) && strlen($_POST['user']['password']) > 4) {
     
                        //užkoduoja su md5
                        $_POST['user']['password'] = md5($_POST['user']['password']);

                        $new_user = [$_POST['user']];
                                
                        if($user_db) {
                            $new_user = array_merge($user_db, $new_user);
                        }
                       
                        $json = json_encode($new_user);
                        
                        //tikrina ar sekmingai įrašyta į db
                        if( file_put_contents('./db/users.json', $json)) {
                            header('Location: ./Register.php?status=7.1');
                        }else {
                            header('Location: ./Register.php?status=6.1');
                        }
        
                    }else{
                        $_POST = [];
                        header('Location: ./Register.php?status=5.1');
                    }
                 }else{
                    $_POST = [];
                    header('Location: ./Register.php?status=4.1');
                 }
            }else{
                $_POST = [];
                header('Location: ./Register.php?status=3.1');
            }
        }else{
            $_POST = [];
            header('Location: ./Register.php?status=2.1');
        }
    }


    

// Login php kodas

// hardcoded login credentials
$auth = [
    
    // 'login' => 'admin@php.lt',
    // 'password' => 'labas1234'
];

$loged_in = false;
$loged_out = false;

//patikrina ar hidden input sutampa reikšmė
if(is_param_equal($_POST, 'login', 1)){
    echo "bandom Prisijungti";

    //patikrina ar paduodamas yra email "standartiniu email formatu"
    if( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && email_exists($user_db, $_POST['email'])) {
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
//Tikrina ar sesija sukurta (is set) ir tikrina ar $_SESSION['logged_in'] yra true
if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in']) {
    //jeigu praejo true naudojam variable kad nekartoti kas kart 
    //$_SESSION['logged_in'] = true; ir $_SESSION['user'] = $auth['login'];
    $loged_in = true;

    
}

//logout php kodas

//tikrina ar Input paspaustas
if(isset($_GET['logout']) AND $_GET['logout'] == true) {
    //atjungia logged in cookie
    unset($_SESSION['logged_in']);
    //nukreipia į login puslapį
    $loged_out = true;
    // $loged_in = false;
}

?>
