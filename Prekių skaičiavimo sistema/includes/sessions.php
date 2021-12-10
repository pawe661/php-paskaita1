<?php

session_start();

if(isset($_SESSION)) {

    $_SESSION['cookie'] = 'Pirmasis sausainelis';

}

// if($logged_in){
//     echo 'prisijungem';
// }
?>