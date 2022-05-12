<?php 
    
    //Variable
    $message1 = $_POST["message"]; //mensaje cliente
    //Validacion Message
    if(empty($message1)) {
        echo  "<p class='error'>* Agregar Mensaje </p>";
        $d = 0;
    }elseif(strlen($message1) < 5){
        echo  "<p class='error'>* Tu mensaje es muy corto </p>";
        $d = 0;
    }elseif(strlen($message1) > 300){
        echo  "<p class='error'>* Tu mensaje es muy largo </p>";
        $d = 0;
    }else{
        $d = 1;
    }
?>