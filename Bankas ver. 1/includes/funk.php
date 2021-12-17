<?php

function is_param_equal($method, $key, $compare) {
        
    return (isset($method[$key]) && $method[$key] ==  $compare) ? true : false;

}

if( !function_exists('saskaitos_exists') ) {

//Ar $element atitinka kondicija ar ne
function saskaitos_exists() {

    if(is_array($_POST['saskaita']) AND count($_POST['saskaita']) > 0) {
        return true; // break; cikle
    }

    return false;
}

//true arba false

}
//AK validavimas pagal moda
if( !function_exists('ak_true') ) {
    function ak_true($ak) {
        $S= (substr($ak, 0, 1) * 1) +
        (substr($ak, 1, 1) * 2) +
        (substr($ak, 2, 1) * 3) +
        (substr($ak, 3, 1) * 4) +
        (substr($ak, 4, 1) * 5) +
        (substr($ak, 5, 1) * 6) +
        (substr($ak, 6, 1) * 7) +
        (substr($ak, 7, 1) * 8) +
        (substr($ak, 8, 1) * 9) +
        (substr($ak, 9, 1) * 1);

        if(fmod($S, 11) != 10){
            if(substr($ak, 10, 1) ==  $POSTAK){

            }
        }else{
            $S= (substr($ak, 0, 1) * 3) +
            (substr($ak, 1, 1) * 4) +
            (substr($ak, 2, 1) * 5) +
            (substr($ak, 3, 1) * 6) +
            (substr($ak, 4, 1) * 7) +
            (substr($ak, 5, 1) * 8) +
            (substr($ak, 6, 1) * 9) +
            (substr($ak, 7, 1) * 1) +
            (substr($ak, 8, 1) * 2) +
            (substr($ak, 9, 1) * 3);

            if(fmod($S, 11) != 10){
                if(substr($ak, 10, 1) ==  $POSTAK){

                }
            }else{
                if(substr($ak, 10, 1) ==  $POSTAK){
                    
                }

            }
        }
    }
}
//AK validavimas dėl unique 
if( !function_exists('ak_unique') ) {
    function ak_unique($db,$ak) {
        $ak_val = array_column($db, 'ak');  
        if(!in_array($ak, $ak_val)){
            return true;
        }
            return false;
    }
}

// Status check for alerts


if( !function_exists('alert_status_alert') ) {
    function alert_status_alert($staus,$text) {
        
    if( isset($_GET['status']) AND $_GET['status'] == $staus) :
 ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $text; ?>
    </div>
    <?php endif; 
    }
}

if( !function_exists('alert_status_success') ) {
    function alert_status_success($staus,$text) {
        
    if( isset($_GET['status']) AND $_GET['status'] == $staus) :
 ?>
    <div class="alert alert-success" role="alert">
        <?php echo $text; ?>
    </div>
    <?php endif; 
    }
}
    ?>
    